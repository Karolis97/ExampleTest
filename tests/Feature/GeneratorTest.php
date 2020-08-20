<?php

namespace Tests\Feature;
use App\Generator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GeneratorTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function testCreate() {
        $this->withoutExceptionHandling();

        $respose = $this->post('/beneficiaries', [
            'uniq_code' => 'Karolis',
            'name' => 'Reimeris',
        ]);
        $respose->assertOk();
        $this->assertCount(1, Generator::all());
    }
}
