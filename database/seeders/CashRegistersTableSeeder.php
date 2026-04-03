<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CashRegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `cash_registers` (`id`, `cash_in_hand`, `user_id`, `warehouse_id`, `status`, `created_at`, `updated_at`) VALUES (1, 100, 9, 1, 0, '2020-10-13 07:32:54', '2020-10-24 00:27:42'), (2, 50, 9, 1, 1, '2020-10-13 15:25:26', '2020-10-13 15:25:26'), (3, 200, 1, 1, 1, '2020-10-22 07:53:07', '2020-10-24 00:33:32'), (4, 100, 1, 2, 1, '2020-10-24 01:04:39', '2020-10-24 01:04:39');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
