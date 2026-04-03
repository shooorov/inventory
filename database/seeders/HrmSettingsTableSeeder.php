<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrmSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `hrm_settings` (`id`, `checkin`, `checkout`, `created_at`, `updated_at`) VALUES (1, '10:00am', '6:00pm', '2019-01-02 02:20:08', '2019-01-02 04:20:53');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
