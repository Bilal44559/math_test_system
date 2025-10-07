<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class MembershipsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Dummy user create karo ya existing user lo
        $user = User::first() ?? User::create([
            'name' => 'Test User',
            'email' => 'membership_user@example.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('memberships')->insert([
            [
                'user_id' => $user->id,
                'image' => 'images/memberships/basic.png',
                'name' => 'Basic Plan',
                'tagline' => 'Affordable and effective',
                'type' => 'basic',
                'monthly_price' => 9.99,
                'annual_price' => 99.99,
                'monthly_discount' => 0.00,
                'annual_discount' => 10.00,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => $user->id,
                'image' => 'images/memberships/premium.png',
                'name' => 'Premium Plan',
                'tagline' => 'Full access and more',
                'type' => 'premium',
                'monthly_price' => 29.99,
                'annual_price' => 299.99,
                'monthly_discount' => 5.00,
                'annual_discount' => 50.00,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
