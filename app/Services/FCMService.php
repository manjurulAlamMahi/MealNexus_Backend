<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class FCMService
{
    protected $messaging;

    public function __construct()
    {
        $credentialsPath = config('services.firebase.credentials');
        if (empty($credentialsPath)) {
            $credentialsPath = storage_path('app/firebase-credentials.json');
        } elseif (!file_exists($credentialsPath)) {
            $fallbackPath = storage_path('app/' . ltrim($credentialsPath, '/\\'));
            if (file_exists($fallbackPath)) {
                $credentialsPath = $fallbackPath;
            }
        }
        Log::info('FCM credentials path resolved.', [
            'path' => $credentialsPath,
            'exists' => file_exists($credentialsPath),
        ]);

        $factory = (new Factory)
            ->withServiceAccount($credentialsPath);
        $this->messaging = $factory->createMessaging();
    }

    public function sendToMultipleTokens(array $tokens, string $title, string $body, array $data = [])
    {
        foreach ($tokens as $token) {
            $message = CloudMessage::new()
                ->withToken($token)
                ->withNotification(Notification::create($title, $body))
                ->withData($data);

            $this->messaging->send($message);
        }
    }
}
