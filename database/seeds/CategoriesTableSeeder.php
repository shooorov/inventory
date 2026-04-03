<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `categories` (`id`, `name`, `image`, `parent_id`, `is_active`, `created_at`, `updated_at`) VALUES (1, 'Fruits', NULL, 9, 1, '2018-05-12 03:27:25', '2019-03-01 15:07:21'), (2, 'electronics', NULL, NULL, 1, '2018-05-12 03:35:57', '2019-03-01 15:07:21'), (3, 'computer', '20200701093146.jpg', 2, 1, '2018-05-12 03:36:08', '2020-07-01 15:31:46'), (4, 'toy', NULL, NULL, 1, '2018-05-23 22:57:48', '2019-03-01 15:09:27'), (7, 'jacket', NULL, NULL, 0, '2018-05-27 22:39:51', '2018-05-27 22:40:48'), (9, 'food', NULL, NULL, 1, '2018-06-25 01:21:40', '2018-09-03 03:41:28'), (10, 'anda', NULL, NULL, 0, '2018-08-28 23:36:31', '2018-08-28 23:37:34'), (11, 'anda', NULL, NULL, 0, '2018-08-28 23:48:06', '2018-08-28 23:53:22'), (12, 'accessories', NULL, NULL, 1, '2018-12-04 23:28:53', '2019-04-10 04:17:03'), (14, 'nn', NULL, NULL, 0, '2019-04-10 04:22:30', '2019-04-10 05:38:47'), (15, 'nm', NULL, NULL, 0, '2019-04-10 04:22:36', '2019-04-10 05:41:43'), (16, 'desktop', NULL, 3, 1, '2020-03-11 10:42:33', '2020-03-11 10:42:33'), (17, 'tostos', '20200701080042.png', NULL, 0, '2020-07-01 14:00:42', '2020-07-01 15:35:34');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
