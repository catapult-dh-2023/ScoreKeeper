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
             'name' => '狂人',
         ]);
         \App\Models\Role::create([
             'name' => '狂信者',
         ]);
         \App\Models\Role::create([
             'name' => '市民',
         ]);
         \App\Models\Role::create([
             'name' => '騎士',
         ]);
         \App\Models\Role::create([
             'name' => '霊媒師',
         ]);
         \App\Models\Role::create([
             'name' => '占い師',
         ]);
         \App\Models\Role::create([
             'name' => '共有者',
         ]);
         \App\Models\Role::create([
             'name' => '名探偵',
         ]);
         \App\Models\Role::create([
             'name' => 'てるてる',
         ]);
         \App\Models\Role::create([
             'name' => '妖狐',
         ]);
         \App\Models\Role::create([
             'name' => '背徳者',
         ]);
        
        //resultテーブル(２件)
         \App\Models\Result::create([
             'name' => '勝ち',
             
         ]);
         \App\Models\Result::create([
             'name' => '負け', 
         ]);

         \App\Models\ResultWay::create([
             'name' => '吊り',
         ]);
         \App\Models\ResultWay::create([
             'name' => '噛み',
         ]);
         \App\Models\ResultWay::create([
             'name' => '勝ち',
         ]);
    }
}
