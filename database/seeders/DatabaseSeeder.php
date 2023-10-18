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

         //1
         \App\Models\Game::create([
             'date' => '2019-02-12',
             'event_name' => 'カレッジウルフ',
             'situation' => '女王',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '3',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);

         //2
         \App\Models\Game::create([
             'date' => '2019-02-12',
             'event_name' => 'カレッジウルフ',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '4',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //3
         \App\Models\Game::create([
             'date' => '2019-02-12',
             'event_name' => 'HOUSEフリーデイ',
             'situation' => '通常',
             'total_participants' => 10,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '5',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //4
         \App\Models\Game::create([
             'date' => '2019-02-21',
             'event_name' => '福大人狼会@通常会',
             'situation' => 'アプリ',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '6',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);

         //5
         \App\Models\Game::create([
             'date' => '2019-02-21',
             'event_name' => '福大人狼会@通常会',
             'situation' => 'アプリ',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '7',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //6
         \App\Models\Game::create([
             'date' => '2019-02-23',
             'event_name' => 'カレッジウルフ',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '8',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => '2',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //7
         \App\Models\Game::create([
             'date' => '2019-02-23',
             'event_name' => 'HOUSEはじめての人狼',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '9',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //8
         \App\Models\Game::create([
             'date' => '2019-02-27',
             'event_name' => 'HOUSEはじめての人狼',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '10',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => '3',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //9
         \App\Models\Game::create([
             'date' => '2019-03-02',
             'event_name' => 'HOUSEはじめての人狼',
             'situation' => '通常',
             'total_participants' => 11,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '11',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => '3',
            'result_way_id' => '1',
            'note' => '占い騙り',
         ]);

         //10
         \App\Models\Game::create([
             'date' => '2019-03-09',
             'event_name' => '福大人狼会@通常会',
             'situation' => '雪女',
             'total_participants' => 15,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '12',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //11
         \App\Models\Game::create([
             'date' => '2019-03-09',
             'event_name' => '福大人狼会@通常会',
             'situation' => '通常',
             'total_participants' => 13,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '13',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => '霊媒騙り',
         ]);

         //12
         \App\Models\Game::create([
             'date' => '2019-03-10',
             'event_name' => 'くろさき人狼会',
             'situation' => '通常',
             'total_participants' => 12,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '14',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '占い騙り',
         ]);

         //13
         \App\Models\Game::create([
             'date' => '2019-03-10',
             'event_name' => 'くろさき人狼会',
             'situation' => '五陣営',
             'total_participants' => 12,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '15',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => '3',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //14
         \App\Models\Game::create([
             'date' => '2019-03-10',
             'event_name' => 'くろさき人狼会',
             'situation' => '四陣営',
             'total_participants' => 11,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '16',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => '3',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //15
         \App\Models\Game::create([
             'date' => '2019-03-10',
             'event_name' => 'くろさき人狼会',
             'situation' => '人狼殺',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '17',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);

         //16
         \App\Models\Game::create([
             'date' => '2019-03-10',
             'event_name' => 'くろさき人狼会',
             'situation' => '通常',
             'total_participants' => 10,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '18',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => '4',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //17
         \App\Models\Game::create([
             'date' => '2019-03-17',
             'event_name' => 'カレッジウルフ',
             'situation' => '通常',
             'total_participants' => 12,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '19',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //18
         \App\Models\Game::create([
             'date' => '2019-03-17',
             'event_name' => 'カレッジウルフ',
             'situation' => '作為',
             'total_participants' => 12,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '20',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //19
         \App\Models\Game::create([
             'date' => '2019-03-17',
             'event_name' => 'Houseフリーデイ',
             'situation' => '通常',
             'total_participants' => 11,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '21',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '潜伏',
         ]);

         //20
         \App\Models\Game::create([
             'date' => '2019-03-17',
             'event_name' => 'HOUSEフリーデイ',
             'situation' => '通常',
             'total_participants' => 11,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '22',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => '3',
            'result_way_id' => '1',
            'note' => '占い騙り',
         ]);

         //21
         \App\Models\Game::create([
             'date' => '2019-03-23',
             'event_name' => 'かわよき大人の人狼会',
             'situation' => '救世主',
             'total_participants' => 12,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '23',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => '1',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //22
         \App\Models\Game::create([
             'date' => '2019-03-23',
             'event_name' => 'かわよき大人の人狼会',
             'situation' => '通常',
             'total_participants' => 13,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '24',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '潜伏',
         ]);

         //23
         \App\Models\Game::create([
             'date' => '2019-03-23',
             'event_name' => 'villageはじめての人狼',
             'situation' => '通常',
             'total_participants' => 10,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '25',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //24
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '26',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //25
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '生痕者',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '27',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);

         //26
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '生痕者',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '28',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);

         //27
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '通常',
             'total_participants' => 9,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '29',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => '2',
            'result_way_id' => '2',
            'note' => '',
         ]);

         //28
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '通常',
             'total_participants' => 13,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '30',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => '4',
            'result_way_id' => '1',
            'note' => '',
         ]);

         //29
         \App\Models\Game::create([
             'date' => '2019-03-31',
             'event_name' => 'villageはじめての人狼',
             'situation' => '通常',
             'total_participants' => 11,
             'note' => '', 
         ]);
         \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '31',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '',
         ]);
    }
}
