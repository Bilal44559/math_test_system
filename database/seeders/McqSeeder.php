<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class McqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        for ($i = 1; $i <= 45; $i++) {
            $mcqId = DB::table('mcqs')->insertGetId([
                'question' => 'Sample Question ' . $i . ': ' . Str::random(20),
                'status' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            // 4 options for each question
            $correctIndex = rand(1, 4);

            for ($j = 1; $j <= 4; $j++) {
                DB::table('options')->insert([
                    'mcq_id' => $mcqId,
                    'option_text' => 'Option ' . $j . ' for Q' . $i . ' - ' . Str::random(10),
                    'is_correct' => ($j === $correctIndex) ? 1 : 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }
}
