<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `taxes` (`id`, `name`, `rate`, `is_active`, `created_at`, `updated_at`) VALUES (1, 'vat@10', 10, 1, '2018-05-12 09:58:30', '2019-03-02 11:46:10'), (2, 'vat@15', 15, 1, '2018-05-12 09:58:43', '2018-05-27 23:35:05'), (3, 'test', 6, 0, '2018-05-27 23:32:54', '2018-05-27 23:34:44'), (4, 'vat 20', 20, 1, '2018-09-01 00:58:57', '2018-09-01 00:58:57');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
