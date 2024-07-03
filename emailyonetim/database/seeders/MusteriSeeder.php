<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusteriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Musteriler::factory(10)->create();
    }
}
