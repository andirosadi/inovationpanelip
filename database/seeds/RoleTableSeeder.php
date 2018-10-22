<?php

use Illuminate\Database\Seeder;
Use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_superAdmin = new Role();
      $role_superAdmin->name = 'admin';
      $role_superAdmin->full_name = 'Admin';
      $role_superAdmin->save();

      $role_admin = new Role();
      $role_admin->name = 'evaluator';
      $role_admin->full_name = 'Evaluator';
      $role_admin->save();

      $role_user = new Role();
      $role_user->name = 'user';
      $role_user->full_name = 'User';
      $role_user->save();
    }
}
