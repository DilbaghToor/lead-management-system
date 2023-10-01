<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PaginatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insert random data into the "paginateds" table
        for ($i = 1; $i <= 50; $i++) {
            DB::table('paginateds')->insert([
                'name' => $faker->name,
                'city' => $faker->city,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
