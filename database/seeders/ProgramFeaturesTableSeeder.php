<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Program;
use App\Models\User;

class ProgramFeaturesTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure at least one program exists
        $user = User::first() ?? User::create([
            'name' => 'Feature User',
            'email' => 'featureuser@example.com',
            'password' => bcrypt('password'),
        ]);

        $program = Program::first() ?? Program::create([
            'user_id' => $user->id,
            'name' => 'Fitness Program',
            'title' => 'Build Strength and Endurance',
            'description' => 'Custom program with daily workouts and meal plans.',
            'image' => 'images/programs/fitness_program.jpg',
            'status' => 1,
        ]);

        $features = [
            'Daily workout plans',
            'Custom diet guide',
            'Progress tracking',
            'Weekly check-ins',
            'Expert video tutorials',
        ];

        foreach ($features as $feature) {
            DB::table('program_features')->insert([
                'program_id' => $program->id,
                'feature' => $feature,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
