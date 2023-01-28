<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->insert([
            'position' => 'Manager',
            'salary' => 1100000
        ]);

        DB::table('salaries')->insert([
            'position' => 'Staff Administration',
            'salary' => 600000
        ]);

        DB::table('salaries')->insert([
            'position' => 'Fullstack Developer',
            'salary' => 900000
        ]);
    }
}
