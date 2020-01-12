<?php

use App\Models\Employee;;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        factory(Employee::class,1)->create();
    }
}
