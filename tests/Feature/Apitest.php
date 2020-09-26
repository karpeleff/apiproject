<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Apitest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/Api/v1/document');

        $response->assertStatus(200);

        $this->json('POST', '/Api/v1/document', ['status' => 'published'])
            ->seeJson([
                'created' => true,
            ]);
    }
}
