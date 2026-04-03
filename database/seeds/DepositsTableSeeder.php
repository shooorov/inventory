<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepositsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `deposits` (`id`, `amount`, `customer_id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES (1, 90, 1, 1, 'first deposit', '2018-08-25 22:48:23', '2018-08-26 01:18:55'), (3, 100, 2, 1, NULL, '2018-08-26 00:53:16', '2018-08-26 21:42:39'), (4, 50, 1, 1, NULL, '2018-09-04 22:56:19', '2018-09-04 22:56:19'), (5, 50, 1, 1, NULL, '2018-09-10 00:08:40', '2018-09-10 00:08:40');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
