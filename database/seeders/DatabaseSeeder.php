<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Fake data for today
        Employee::factory(6)->create([
            'created_at' => Carbon::today(),
        ]);

        // Fake data for yesterday
       Employee::factory(6)->create([
            'created_at' => Carbon::yesterday(),
        ]);

        // Fake data for this week
        Employee::factory(6)->create([
                    'created_at' => Carbon::now()->startOfWeek(),
                ])->each(function ($post) {
                    $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
                    $post->save();
                });

        // Fake data for last week
        Employee::factory(6)->create([
                    'created_at' => Carbon::now()->subWeek()->startOfWeek(),
                ])->each(function ($post) {
                    $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
                    $post->save();
                });  
                
        // Fake data for this month
        Employee::factory(6)->create([
            'created_at' => Carbon::now()->startOfMonth(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
            $post->save();
        });

       // Fake data for last month
       Employee::factory(6)->create([
                    'created_at' => Carbon::now()->subMonth()->startOfMonth(),
                ])->each(function ($post) {
                    $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
                    $post->save();
                });

        // Fake data for this year
        Employee::factory(6)->create([
                    'created_at' => Carbon::now()->startOfYear(),
                ])->each(function ($post) {
                    $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
                    $post->save();
                });

        // Fake data for last year
        Employee::factory(6)->create([
                    'created_at' => Carbon::now()->subYear()->startOfYear(),
                ])->each(function ($post) {
                    $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
                    $post->save();
            });        




    }
}
