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

        //Userテーブル(3件)
         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
         \App\Models\User::factory()->create([
             'name' => 'Test User2',
             'email' => 'test2@example.com',
         ]);
         \App\Models\User::factory()->create([
             'name' => 'Test User3',
             'email' => 'test3@example.com',
         ]);
         

        //Gameテーブル(2件)
         \App\Models\Game::create([
             'date' => '2023-10-12',
             'event_name' => 'TestEvent',
             'situation' => 'TestSituation',
             'total_participants' => 100000,
             'note' => 'Gameidが発行されてない個人成績はこのGaemとして扱いましょう' 
         ]);
         \App\Models\Game::create([
             'date' => '2023-10-13',
             'event_name' => 'TestEvent2',
             'situation' => 'TestSituation',
             'total_participants' => 500000,
             'note' => 'Testgame2' 
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
             'name' => '生存',
         ]);
         
         //Individual Resultデータ(3件)
         \App\Models\IndividualResult::create([
            'user_id' => '1',
            'game_id' => '1',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => 'test case 1'
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '1',
            'game_id' => '2',
            'role_id' => '10',
            'result_id' => '2',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => 'test case 2'
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '2',
            'game_id' => '2',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => 'test case 3'
         ]);


        //sampleデータ
         \App\Models\User::factory()->create([
             'name' => 'Jinro master',
             'email' => 'jinro.master@example.com',
         ]);

        $this->call(IndividualResultsSeeder::class);

    }
}
