<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // User Management
            'create_user',
            'users',
            'edit_user',
            'delete_users',
            'update_users_roles',

            // Product Management
            'view_products',
            'create_product',
            'add_product',
            'edit_product',
            'delete_product',

            // Profile
            'view_profile',
            'edit_profile',
            'update_profile',

            // Permissions Management
            'view_permissions',
            'create_permissions',
            'edit_permissions',
            'update_permissions',
            'delete_permissions',

            // Role Management
            'view_roles',
            'create_roles',
            'edit_roles',

            // Category
            'view_categories',
            'add_categories',

            // Pillars
            'add_pillars',
            'edit_pillars',
            'delete_pillars',

            // Sub Categories
            'view_sub_categories',
            'create_sub_categories',
            'edit_sub_categories',
            'update_sub_categories',
            'delete_sub_categories',

            // Appointments
            'appointments',

            // MetaTags
            'view_metatags',
            'create_metatag',
            'edit_metatag',
            'delete_metatag',
            'view_metatag',
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->updateOrInsert(
                ['name' => $permission, 'guard_name' => 'web'],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }
    }
}
