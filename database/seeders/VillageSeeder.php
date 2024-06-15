<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your SQL file
        $sqlFile = 'database/seeders/VillageSeeder.sql';

        // Read SQL file
        $sql = file_get_contents($sqlFile);

        // Execute SQL statements
        DB::unprepared($sql);
    }
}
