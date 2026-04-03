<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `languages` (`id`, `code`, `created_at`, `updated_at`) VALUES (1, 'en', '2018-07-07 22:59:17', '2019-12-24 17:34:20');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
