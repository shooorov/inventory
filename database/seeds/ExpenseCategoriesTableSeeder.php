<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `expense_categories` (`id`, `code`, `name`, `is_active`, `created_at`, `updated_at`) VALUES (1, '16718342', 'washing', 1, '2018-08-16 00:32:48', '2019-03-02 07:02:07'), (2, '60128975', 'electric bill', 1, '2018-08-16 00:39:18', '2018-08-16 00:39:18'), (3, '83954970', 'test', 0, '2018-08-16 00:50:28', '2018-08-16 00:51:40'), (4, '1234', 'snacks', 1, '2018-09-01 02:40:04', '2018-09-01 02:40:04');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
