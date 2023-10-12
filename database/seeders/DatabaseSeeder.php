<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //Userテーブル(1件)
         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        //Gameテーブル(1件)
         \App\Models\Game::create([
             'date' => '2023-10-12',
             'event_name' => 'TestEvent',
             'situation' => 'TestSituation',
             'total_participants' => 100000,
             'note' => 'Gameidが発行されてない個人成績はこのGaemとして扱いましょう' 
         ]);

        //roleテーブル(たくさん)
         \App\Models\Role::create([
             'name' => '人狼',
         ]);
         \App\Models\Role::create([
             'name' => '市民',
         ]);
        
        //resultテーブル(２件)
         \App\Models\Result::create([
             'name' => '勝ち',
             
         ]);
         \App\Models\Result::create([
             'name' => '負け', 
         ]);

         \App\Models\ResultWay::create([
             'name' => '吊られ',
         ]);
    }
}
