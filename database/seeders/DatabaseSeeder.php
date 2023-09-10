<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use App\Models\Team;
use App\Models\Role;
use App\Models\Responsibility;
use App\Models\Employee;
use App\Models\UserCompany;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Company::factory(10)->create();
        Team::factory(5)->create();
        Role::factory(50)->create();
        Responsibility::factory(60)->create();
        Employee::factory(800)->create();
        // UserCompanySeeder::class;

        // $this->call([
        //     CompanySeeder::class,
        //     RoleSeeder::class,
        //     ResponsibilitySeeder::class,
        //     EmployeeSeeder::class,
        // ]);

    }
}
