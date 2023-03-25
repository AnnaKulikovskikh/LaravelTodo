<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('todo')->insert([
            ['title'=>'Task 1',
            'description'=>'bla-bla-bla1'],
            ['title'=>'Task 2',
            'description'=>'bla-bla-bla2'],
            ['title'=>'Task 3',
            'description'=>'bla-bla-bla3'],
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
