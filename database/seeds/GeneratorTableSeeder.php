<?php

use App\Generator;
use Illuminate\Database\Seeder;

class GeneratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generator::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Generator::create([
                'uniq_code' => $faker->unique()->ipv6,
                'name' => $faker->name,
            ]);
        }
    }
}
