<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'employee';
        $role_employee->mo_ta = 'A Employee User';
        $role_employee->save();
        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->mo_ta = 'A Manager User';
        $role_manager->save();
        $role_manager = new Role();
        $role_manager->name = 'customer';
        $role_manager->mo_ta = 'A Customer User';
        $role_manager->save();
    }
}
