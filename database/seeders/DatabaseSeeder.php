<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Company::factory(20)->create();
        Employee::factory(50)->create();
        $this->call([UserSeeder::class, SalarySeeder::class]);
    }
}
