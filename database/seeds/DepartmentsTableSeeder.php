<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `departments` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES (1, 'Sale', 1, '2018-12-27 05:16:47', '2018-12-27 10:40:23'), (2, 'xyz', 1, '2018-12-27 10:28:47', '2018-12-27 10:28:47');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
