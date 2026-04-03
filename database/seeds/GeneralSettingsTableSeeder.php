<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `general_settings` (`id`, `site_title`, `site_logo`, `currency`, `staff_access`, `date_format`, `developed_by`, `invoice_format`, `state`, `theme`, `created_at`, `updated_at`, `currency_position`) VALUES (1, 'SalePro', 'logo.png', '1', 'own', 'd/m/Y', 'LionCoders', 'standard', 1, 'default.css', '2018-07-06 06:13:11', '2020-11-17 01:12:13', 'prefix');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
