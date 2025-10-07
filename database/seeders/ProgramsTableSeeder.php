<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class ProgramsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure at least one user exists
        $user = User::first() ?? User::create([
            'name' => 'Program Admin',
            'email' => 'programadmin@example.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('programs')->insert([
            [
                'user_id' => $user->id,
                'name' => 'Weight Loss Program',
                'title' => 'Burn Fat & Stay Fit',
                'description' => 'This program includes diet plans, exercises, and progress tracking tools.',
                'image' => 'images/programs/weight_loss.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => $user->id,
                'name' => 'Muscle Gain Program',
                'title' => 'Bulk Up Smartly',
                'description' => 'Custom workouts and nutrition for healthy muscle growth.',
                'image' => 'images/programs/muscle_gain.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
