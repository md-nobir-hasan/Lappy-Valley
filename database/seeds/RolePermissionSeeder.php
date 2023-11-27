<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role = Role::create(['name'=> 'Admin','guard_name'=>'web']);
       $erole= Role::create(['name'=> 'Editor','guard_name'=>'web']);
        $permissions = [
            //User
            ['name' => 'Show User','guard_name'=>'web'],
            ['name' => 'Create User','guard_name'=>'web'],
            ['name' => 'Edit User','guard_name'=>'web'],
            ['name' => 'Delete User','guard_name'=>'web'],
            //Product
            ['name' => 'Show Product','guard_name'=>'web'],
            ['name' => 'Create Product','guard_name'=>'web'],
            ['name' => 'Edit Product','guard_name'=>'web'],
            ['name' => 'Delete Product','guard_name'=>'web'],
        ];
        $epermissions = [
            //User
            ['name' => 'Show User'],
            // ['name' => 'Create User'],
            ['name' => 'Edit User'],
            // ['name' => 'Delete User'],
            //Product
            ['name' => 'Show Product'],
            // ['name' => 'Create Product'],
            ['name' => 'Edit Product'],
            // ['name' => 'Delete Product'],
        ];
        DB::table('permissions')->insert($permissions);

        $permissions = Permission::all();
        $role->syncPermissions($permissions);
        $erole->syncPermissions($epermissions);

        $user = User::first();
        $user2 = User::find(2);
        $user->syncRoles($role);
        $user2->syncRoles($erole);
    }
}
