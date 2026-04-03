<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftCardRechargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `gift_card_recharges` (`id`, `gift_card_id`, `amount`, `user_id`, `created_at`, `updated_at`) VALUES (1, 2, 100, 1, '2018-08-24 23:08:29', '2018-08-24 23:08:29'), (2, 1, 200, 1, '2018-08-24 23:08:50', '2018-08-24 23:08:50'), (3, 1, 100, 1, '2018-09-04 23:50:41', '2018-09-04 23:50:41'), (4, 1, 50, 1, '2018-09-04 23:51:38', '2018-09-04 23:51:38'), (5, 1, 50, 1, '2018-09-04 23:53:36', '2018-09-04 23:53:36'), (6, 2, 50, 1, '2018-09-04 23:54:34', '2018-09-04 23:54:34'), (7, 5, 10, 1, '2018-09-30 00:19:48', '2018-09-30 00:19:48'), (8, 5, 10, 1, '2018-09-30 00:20:04', '2018-09-30 00:20:04'), (9, 2, 100, 1, '2018-10-07 03:13:05', '2018-10-07 03:13:05'), (10, 1, 200, 1, '2018-10-07 03:13:39', '2018-10-07 03:13:39'), (11, 1, 300, 1, '2018-10-23 00:22:49', '2018-10-23 00:22:49');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
