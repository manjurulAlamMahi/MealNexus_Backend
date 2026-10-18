<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageControllerTest extends TestCase
{
    public function test_privacy_page_renders_successfully(): void
    {
        $response = $this->get('/privacy');

        $response->assertStatus(200);
        $response->assertSee('Privacy Policy');
        $response->assertSee('MealNexus');
    }

    public function test_terms_page_renders_successfully(): void
    {
        $response = $this->get('/terms');

        $response->assertStatus(200);
        $response->assertSee('Terms');
        $response->assertSee('Conditions');
        $response->assertSee('MealNexus');
    }
}
