<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `brands` (`id`, `title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES (3, 'HP', 'HP.jpg', 1, '2018-05-12 09:06:14', '2019-03-02 05:32:21'), (4, 'samsung', 'samsung.jpg', 1, '2018-05-12 09:08:41', '2018-07-04 03:38:37'), (5, 'Apple', 'Apple.jpg', 1, '2018-08-31 23:34:49', '2018-12-06 03:05:38'), (6, 'jjjj', '20201019093419.jpg', 0, '2020-10-19 15:33:52', '2020-10-19 15:35:58'), (7, 'Lotto', NULL, 1, '2020-11-16 04:13:41', '2020-11-16 04:13:41');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
