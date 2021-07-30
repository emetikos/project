<?php

namespace Database\Seeders;

use App\Models\Hap;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Hap::factory()->times(10)->create();
    }
}
