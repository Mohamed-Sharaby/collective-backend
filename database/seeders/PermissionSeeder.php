<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::updateOrCreate(['email'=>'admin@admin.com'],[
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '123456',
        ]);

        $permissions = [
            'Admins',
            'Roles',
            'Users',
            'Categories',

        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission],['name' => $permission, 'guard_name' => 'admin']);
        }

        $role = Role::updateOrCreate(['name'=> 'Super Admin'],['name' => 'Super Admin', 'guard_name' => 'admin']);
        $role->syncPermissions($permissions);
        $admin->assignRole('Super Admin');


    }
}
