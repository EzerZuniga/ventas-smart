<?php

namespace Tests\Feature;

use Tests\TestCase;

class LegalPagesTest extends TestCase
{
    public function test_privacy_page_is_accessible(): void
    {
        $response = $this->get(route('legal.privacy'));

        $response->assertStatus(200);
        $response->assertSee('Política de privacidad');
    }

    public function test_terms_page_is_accessible(): void
    {
        $response = $this->get(route('legal.terms'));

        $response->assertStatus(200);
        $response->assertSee('Términos y condiciones');
    }

    public function test_login_page_contains_legal_links(): void
    {
        $response = $this->get(route('login.index'));

        $response->assertStatus(200);
        $response->assertSee(route('legal.privacy'));
        $response->assertSee(route('legal.terms'));
    }
}
