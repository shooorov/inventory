<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared("INSERT INTO `variants` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'Medium', '2019-11-21 07:03:04', '2019-11-24 08:43:52'), (3, 'Small', '2019-11-21 07:03:04', '2019-11-24 08:43:52'), (5, 'Large', '2019-11-24 06:07:20', '2019-11-24 08:44:56'), (9, 'a', '2020-05-18 16:44:14', '2020-05-18 16:44:14'), (11, 'b', '2020-05-18 16:53:49', '2020-05-18 16:53:49'), (12, 'variant 1', '2020-09-27 06:08:27', '2020-09-27 06:08:27'), (13, 'variant 2', '2020-09-27 06:08:27', '2020-09-27 06:08:27'), (15, 'S', '2020-11-16 06:09:33', '2020-11-16 06:09:33'), (16, 'M', '2020-11-16 06:09:33', '2020-11-16 06:09:33'), (17, 'L', '2020-11-16 06:09:33', '2020-11-16 06:09:33');");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
