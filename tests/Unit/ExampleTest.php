<?php

namespace Tests\Unit;
use App\Generator;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $data = [
            'uniq_code' => 'John',
            'name' => 'john@toptal.com',
        ];

        $this->json('POST', 'api/beneficiaries', $data)
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'uniq_code',
                    'name',
                    'created_at',
                    'updated_at',
                ],
            ]);;
    }
}
