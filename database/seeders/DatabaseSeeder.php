<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Position::factory(128)->create();
    }
}
