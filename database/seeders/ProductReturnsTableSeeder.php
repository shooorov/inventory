<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductReturnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `product_returns` (`id`, `return_id`, `product_id`, `variant_id`, `qty`, `sale_unit_id`, `net_unit_price`, `discount`, `tax_rate`, `tax`, `total`, `created_at`, `updated_at`) VALUES (3, 2, 4, NULL, 20, 1, 2, 0, 0, 0, 40, NULL, NULL), (4, 3, 10, NULL, 2, 7, 22, 0, 0, 0, 44, NULL, '2018-10-07 02:19:40'), (6, 5, 3, NULL, 1, 1, 250, 0, 0, 0, 250, NULL, '2018-12-25 22:16:08'), (12, 6, 1, NULL, 1, 1, 400, 0, 10, 40, 440, NULL, NULL), (23, 11, 13, NULL, 1, 0, 21, 0, 0, 0, 21, '2019-12-24 05:20:29', '2019-12-24 05:20:29'), (26, 13, 61, NULL, 1, 1, 10000, 0, 15, 1500, 11500, '2020-08-16 16:25:02', '2020-08-16 16:25:02'), (27, 14, 1, NULL, 1, 1, 400, 0, 10, 40, 440, '2020-10-13 11:39:54', '2020-10-13 11:39:54'), (31, 18, 61, NULL, 1, 1, 10000, 0, 15, 1500, 11500, '2020-11-18 01:02:18', '2020-11-18 01:02:18');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
