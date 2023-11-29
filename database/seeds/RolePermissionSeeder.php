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
            //Banner
            ['name' => 'Show Banner','guard_name'=>'web'],
            ['name' => 'Create Banner','guard_name'=>'web'],
            ['name' => 'Edit Banner','guard_name'=>'web'],
            ['name' => 'Delete Banner','guard_name'=>'web'],

            //Category
            ['name' => 'Show Category','guard_name'=>'web'],
            ['name' => 'Create Category','guard_name'=>'web'],
            ['name' => 'Edit Category','guard_name'=>'web'],
            ['name' => 'Delete Category','guard_name'=>'web'],

            //Brand
            ['name' => 'Show Brand','guard_name'=>'web'],
            ['name' => 'Create Brand','guard_name'=>'web'],
            ['name' => 'Edit Brand','guard_name'=>'web'],
            ['name' => 'Delete Brand','guard_name'=>'web'],

            //Shipping
            ['name' => 'Show Shipping','guard_name'=>'web'],
            ['name' => 'Create Shipping','guard_name'=>'web'],
            ['name' => 'Edit Shipping','guard_name'=>'web'],
            ['name' => 'Delete Shipping','guard_name'=>'web'],

            //Order
            ['name' => 'Show Order','guard_name'=>'web'],
            ['name' => 'Create Order','guard_name'=>'web'],
            ['name' => 'Edit Order','guard_name'=>'web'],
            ['name' => 'Delete Order','guard_name'=>'web'],

            //Review
            ['name' => 'Show Review','guard_name'=>'web'],
            ['name' => 'Create Review','guard_name'=>'web'],
            ['name' => 'Edit Review','guard_name'=>'web'],
            ['name' => 'Delete Review','guard_name'=>'web'],

            //Post
            ['name' => 'Show Post','guard_name'=>'web'],
            ['name' => 'Create Post','guard_name'=>'web'],
            ['name' => 'Edit Post','guard_name'=>'web'],
            ['name' => 'Delete Post','guard_name'=>'web'],

            //Post Category
            ['name' => 'Show pCategory','guard_name'=>'web'],
            ['name' => 'Create pCategory','guard_name'=>'web'],
            ['name' => 'Edit pCategory','guard_name'=>'web'],
            ['name' => 'Delete pCategory','guard_name'=>'web'],

            //Tag
            ['name' => 'Show Tag','guard_name'=>'web'],
            ['name' => 'Create Tag','guard_name'=>'web'],
            ['name' => 'Edit Tag','guard_name'=>'web'],
            ['name' => 'Delete Tag','guard_name'=>'web'],

            //Comment
            ['name' => 'Show Comment','guard_name'=>'web'],
            ['name' => 'Create Comment','guard_name'=>'web'],
            ['name' => 'Edit Comment','guard_name'=>'web'],
            ['name' => 'Delete Comment','guard_name'=>'web'],

            //Cupon
            ['name' => 'Show Cupon','guard_name'=>'web'],
            ['name' => 'Create Cupon','guard_name'=>'web'],
            ['name' => 'Edit Cupon','guard_name'=>'web'],
            ['name' => 'Delete Cupon','guard_name'=>'web'],

            //User
            ['name' => 'Show User','guard_name'=>'web'],
            ['name' => 'Create User','guard_name'=>'web'],
            ['name' => 'Edit User','guard_name'=>'web'],
            ['name' => 'Delete User','guard_name'=>'web'],

            //Role
            ['name' => 'Show Role','guard_name'=>'web'],
            ['name' => 'Create Role','guard_name'=>'web'],
            ['name' => 'Edit Role','guard_name'=>'web'],
            ['name' => 'Delete Role','guard_name'=>'web'],

            //Permission
            ['name' => 'Show Permission','guard_name'=>'web'],
            ['name' => 'Create Permission','guard_name'=>'web'],
            ['name' => 'Edit Permission','guard_name'=>'web'],
            ['name' => 'Delete Permission','guard_name'=>'web'],

            //Product
            ['name' => 'Show Product','guard_name'=>'web'],
            ['name' => 'Create Product','guard_name'=>'web'],
            ['name' => 'Edit Product','guard_name'=>'web'],
            ['name' => 'Delete Product','guard_name'=>'web'],

            //Gangam1
            ['name' => 'Dashboard', 'guard_name' => 'web'],
            ['name' => 'Media Manager', 'guard_name' => 'web'],
            ['name' => 'Setting', 'guard_name' => 'web'],
        ];
        $epermissions = [
            //Banner
            ['name' => 'Show Banner'],
            // ['name' => 'Create Banner'],
            ['name' => 'Edit Banner'],
            // ['name' => 'Delete Banner'],

            //Category
            ['name' => 'Show Category'],
            // ['name' => 'Create Category'],
            ['name' => 'Edit Category'],
            // ['name' => 'Delete Category'],

            //Brand
            ['name' => 'Show Brand'],
            ['name' => 'Create Brand'],
            // ['name' => 'Edit Brand'],
            // ['name' => 'Delete Brand'],

            //Shipping
            ['name' => 'Show Shipping'],
            ['name' => 'Create Shipping'],
            // ['name' => 'Edit Shipping'],
            // ['name' => 'Delete Shipping'],

            //Order
            ['name' => 'Show Order'],
            // ['name' => 'Create Order'],
            ['name' => 'Edit Order'],
            // ['name' => 'Delete Order'],

            //Review
            // ['name' => 'Show Review'],
            ['name' => 'Create Review'],
            ['name' => 'Edit Review'],
            ['name' => 'Delete Review'],

            //Post
            ['name' => 'Show Post'],
            ['name' => 'Create Post'],
            // ['name' => 'Edit Post'],
            // ['name' => 'Delete Post'],

            //Post Category
            ['name' => 'Show pCategory'],
            // ['name' => 'Create pCategory'],
            // ['name' => 'Edit pCategory'],
            // ['name' => 'Delete pCategory'],

            //Tag
            ['name' => 'Show Tag'],
            // ['name' => 'Create Tag'],
            ['name' => 'Edit Tag'],
            ['name' => 'Delete Tag'],

            //Comment
            ['name' => 'Show Comment'],
            ['name' => 'Create Comment'],
            // ['name' => 'Edit Comment'],
            // ['name' => 'Delete Comment'],

            //Cupon
            ['name' => 'Show Cupon'],
            // ['name' => 'Create Cupon'],
            ['name' => 'Edit Cupon'],
            // ['name' => 'Delete Cupon'],

            //User
            // ['name' => 'Show User'],
            ['name' => 'Create User'],
            // ['name' => 'Edit User'],
            ['name' => 'Delete User'],

            //Product
            ['name' => 'Show Product'],
            // ['name' => 'Create Product'],
            ['name' => 'Edit Product'],
            ['name' => 'Delete Product'],

            //Gangam1
            ['name' => 'Dashboard'],
            ['name' => 'Media Manager'],
            // ['name' => 'Setting'],
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
