<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function test_about_page_is_accessible(): void
    {
        $response = $this->get(route('about.index'));

        $response->assertStatus(200);
        $response->assertSee('Acerca de Ventas Smart');
    }

    public function test_about_page_contains_seo_meta_tags(): void
    {
        $response = $this->get(route('about.index'));

        $response->assertStatus(200);
        $response->assertSee('name="description"', false);
        $response->assertSee('property="og:title"', false);
        $response->assertSee('name="twitter:card"', false);
        $response->assertSee('<link rel="canonical"', false);
    }
}

