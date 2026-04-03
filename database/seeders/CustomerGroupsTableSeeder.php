<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `customer_groups` (`id`, `name`, `percentage`, `is_active`, `created_at`, `updated_at`) VALUES (1, 'general', '0', 1, '2018-05-12 08:09:36', '2019-03-02 06:01:35'), (2, 'distributor', '-10', 1, '2018-05-12 08:12:14', '2019-03-02 06:02:12'), (3, 'reseller', '5', 1, '2018-05-12 08:12:26', '2018-05-30 01:18:14'), (4, 'test', '12', 0, '2018-05-30 01:17:16', '2018-05-30 01:17:57'), (5, 'test', '0', 0, '2018-08-03 09:10:27', '2018-08-03 09:10:34');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
