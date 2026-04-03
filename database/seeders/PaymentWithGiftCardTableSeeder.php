<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentWithGiftCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `payment_with_gift_card` (`id`, `payment_id`, `gift_card_id`, `created_at`, `updated_at`) VALUES (1, 36, 2, '2018-08-24 21:48:36', '2018-08-25 00:57:35'), (4, 39, 1, '2018-08-25 02:36:34', '2018-08-25 02:36:34'), (6, 50, 1, '2018-09-02 23:01:38', '2018-09-02 23:01:38'), (8, 293, 1, '2020-10-18 05:14:26', '2020-10-18 05:14:26');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
