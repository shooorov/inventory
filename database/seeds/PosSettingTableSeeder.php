<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `pos_setting` (`id`, `customer_id`, `warehouse_id`, `biller_id`, `product_number`, `keybord_active`, `stripe_public_key`, `stripe_secret_key`, `created_at`, `updated_at`) VALUES (1, 11, 2, 1, 4, 0, 'pk_test_ITN7KOYiIsHSCQ0UMRcgaYUB', 'sk_test_REDACTED', '2018-09-02 03:17:04', '2020-04-17 13:59:54');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
