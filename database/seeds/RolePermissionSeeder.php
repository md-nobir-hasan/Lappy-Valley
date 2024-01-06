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

            //Duration
            ['name' => 'Show Duration','guard_name'=>'web'],
            ['name' => 'Create Duration','guard_name'=>'web'],
            ['name' => 'Edit Duration','guard_name'=>'web'],
            ['name' => 'Delete Duration','guard_name'=>'web'],

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

            //Order Status
            ['name' => 'Show Order Status','guard_name'=>'web'],
            ['name' => 'Create Order Status','guard_name'=>'web'],
            ['name' => 'Edit Order Status','guard_name'=>'web'],
            ['name' => 'Delete Order Status','guard_name'=>'web'],

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

            //Google Tag
            ['name' => 'Show Google Tag','guard_name'=>'web'],
            ['name' => 'Create Google Tag','guard_name'=>'web'],
            ['name' => 'Edit Google Tag','guard_name'=>'web'],
            ['name' => 'Delete Google Tag','guard_name'=>'web'],

            //Pixel
            ['name' => 'Show Pixel','guard_name'=>'web'],
            ['name' => 'Create Pixel','guard_name'=>'web'],
            ['name' => 'Edit Pixel','guard_name'=>'web'],
            ['name' => 'Delete Pixel','guard_name'=>'web'],

            //Product
            ['name' => 'Show Product','guard_name'=>'web'],
            ['name' => 'Create Product','guard_name'=>'web'],
            ['name' => 'Edit Product','guard_name'=>'web'],
            ['name' => 'Delete Product','guard_name'=>'web'],

            //Processor Model
            ['name' => 'Show Processor Model','guard_name'=>'web'],
            ['name' => 'Create Processor Model','guard_name'=>'web'],
            ['name' => 'Edit Processor Model','guard_name'=>'web'],
            ['name' => 'Delete Processor Model','guard_name'=>'web'],


            //Processor Generation
            ['name' => 'Show Processor Generation', 'guard_name' => 'web'],
            ['name' => 'Create Processor Generation', 'guard_name' => 'web'],
            ['name' => 'Edit Processor Generation', 'guard_name' => 'web'],
            ['name' => 'Delete Processor Generation', 'guard_name' => 'web'],

            //Display Size
            ['name' => 'Show Display Size', 'guard_name' => 'web'],
            ['name' => 'Create Display Size', 'guard_name' => 'web'],
            ['name' => 'Edit Display Size', 'guard_name' => 'web'],
            ['name' => 'Delete Display Size', 'guard_name' => 'web'],

            //Display Type
            ['name' => 'Show Display Type', 'guard_name' => 'web'],
            ['name' => 'Create Display Type', 'guard_name' => 'web'],
            ['name' => 'Edit Display Type', 'guard_name' => 'web'],
            ['name' => 'Delete Display Type', 'guard_name' => 'web'],

            //RAM
            ['name' => 'Show RAM', 'guard_name' => 'web'],
            ['name' => 'Create RAM', 'guard_name' => 'web'],
            ['name' => 'Edit RAM', 'guard_name' => 'web'],
            ['name' => 'Delete RAM', 'guard_name' => 'web'],

            //HDD
            ['name' => 'Show HDD', 'guard_name' => 'web'],
            ['name' => 'Create HDD', 'guard_name' => 'web'],
            ['name' => 'Edit HDD', 'guard_name' => 'web'],
            ['name' => 'Delete HDD', 'guard_name' => 'web'],

            //SSD
            ['name' => 'Show SSD', 'guard_name' => 'web'],
            ['name' => 'Create SSD', 'guard_name' => 'web'],
            ['name' => 'Edit SSD', 'guard_name' => 'web'],
            ['name' => 'Delete SSD', 'guard_name' => 'web'],

            //Graphic
            ['name' => 'Show Graphic', 'guard_name' => 'web'],
            ['name' => 'Create Graphic', 'guard_name' => 'web'],
            ['name' => 'Edit Graphic', 'guard_name' => 'web'],
            ['name' => 'Delete Graphic', 'guard_name' => 'web'],

            //Special Feature
            ['name' => 'Show Special Feature', 'guard_name' => 'web'],
            ['name' => 'Create Special Feature', 'guard_name' => 'web'],
            ['name' => 'Edit Special Feature', 'guard_name' => 'web'],
            ['name' => 'Delete Special Feature', 'guard_name' => 'web'],

            //Product Offer
            ['name' => 'Show Product Offer', 'guard_name' => 'web'],
            ['name' => 'Create Product Offer', 'guard_name' => 'web'],
            ['name' => 'Edit Product Offer', 'guard_name' => 'web'],
            ['name' => 'Delete Product Offer', 'guard_name' => 'web'],

            //Report
            //sales report
            ['name' => 'Sales Report', 'guard_name' => 'web'],
            ['name' => 'Sales Report Daily', 'guard_name' => 'web'],
            ['name' => 'Sales Report Weekly', 'guard_name' => 'web'],
            ['name' => 'Sales Report Monthly', 'guard_name' => 'web'],

            //sales report
            ['name' => 'Order Report', 'guard_name' => 'web'],
            ['name' => 'Order Report Daily', 'guard_name' => 'web'],
            ['name' => 'Order Report Weekly', 'guard_name' => 'web'],
            ['name' => 'Order Report Yearly', 'guard_name' => 'web'],
            ['name' => 'Date Wise Order Report', 'guard_name' => 'web'],
            ['name' => 'Product Wise Order Report', 'guard_name' => 'web'],

            ['name' => 'Customer Purchase History', 'guard_name' => 'web'],
            ['name' => 'Inventory Report', 'guard_name' => 'web'],

            //Site and Other Settings
            ['name' => 'Show Site Setting', 'guard_name' => 'web'],
            ['name' => 'Update Site Setting', 'guard_name' => 'web'],
            ['name' => 'Show Others Setting', 'guard_name' => 'web'],
            ['name' => 'Update Others Setting', 'guard_name' => 'web'],

            //Ami single
            ['name' => 'Dashboard', 'guard_name' => 'web'],
            ['name' => 'Media Manager', 'guard_name' => 'web'],
            ['name' => 'Setting', 'guard_name' => 'web'],
            ['name' => 'Product Attributes', 'guard_name' => 'web'],

            //Ami O single
            ['name' => 'Show SEO', 'guard_name' => 'web'],
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
