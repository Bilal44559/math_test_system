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
