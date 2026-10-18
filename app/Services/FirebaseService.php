<?php

namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    public static function messaging()
    {
        $factory = (new Factory)
            ->withServiceAccount(config('services.firebase.credentials'));

        return $factory->createMessaging();
    }
}
