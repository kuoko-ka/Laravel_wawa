<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Events;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory(1)->create();
            
        Events::factory(10)->create([
            'user_id' => $user->id
             
            ]);
      //  \App\Models\User::factory()->create([
      //    'name' => 'Test User',
      //       'email' => 'test@example.com',
      //  ]);


    }
}
