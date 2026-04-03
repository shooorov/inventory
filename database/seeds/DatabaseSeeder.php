<?php

use Database\Seeders\LegacyDatabaseSeeder;
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
        $this->call(LegacyDatabaseSeeder::class);
    }
}
