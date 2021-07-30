<?php

namespace Database\Seeders;

use App\Models\Hap;
use Illuminate\Database\Seeder;

class HapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hap::factory()->times(10)->create();
    }
}
