<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndividualResultsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //1
        \App\Models\Game::create([
            'date' => '2019-02-12',
            'event_name' => 'カレッジウルフ',
            'situation' => '女王村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '3',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //2
        \App\Models\Game::create([
            'date' => '2019-02-12',
            'event_name' => 'カレッジウルフ',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '4',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //3
        \App\Models\Game::create([
            'date' => '2019-02-12',
            'event_name' => 'HOUSEフリーデイ',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '5',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //4
        \App\Models\Game::create([
            'date' => '2019-02-21',
            'event_name' => '福大人狼会＠通常会',
            'situation' => 'アプリ村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '6',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //5
        \App\Models\Game::create([
            'date' => '2019-02-21',
            'event_name' => '福大人狼会＠通常会',
            'situation' => 'アプリ村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '7',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //6
        \App\Models\Game::create([
            'date' => '2019-02-23',
            'event_name' => 'カレッジウルフ',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '8',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //7
        \App\Models\Game::create([
            'date' => '2019-02-23',
            'event_name' => 'HOUSEはじめての人狼',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '9',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //8
        \App\Models\Game::create([
            'date' => '2019-02-27',
            'event_name' => 'HOUSEはじめての人狼',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '10',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //9
        \App\Models\Game::create([
            'date' => '2019-03-02',
            'event_name' => 'HOUSEはじめての人狼',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '11',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //10
        \App\Models\Game::create([
            'date' => '2019-03-09',
            'event_name' => '福大人狼会＠通常会',
            'situation' => '雪女村',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '12',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //11
        \App\Models\Game::create([
            'date' => '2019-03-09',
            'event_name' => '福大人狼会＠通常会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '13',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //12
        \App\Models\Game::create([
            'date' => '2019-03-10',
            'event_name' => 'くろさき人狼会',
            'situation' => '特殊村',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '14',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //13
        \App\Models\Game::create([
            'date' => '2019-03-10',
            'event_name' => 'くろさき人狼会',
            'situation' => '五陣営',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '15',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => 3,
            'result_way_id' => '2',
            'note' => '占い騙り',
        ]);

        //14
        \App\Models\Game::create([
            'date' => '2019-03-10',
            'event_name' => 'くろさき人狼会',
            'situation' => '四陣営',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '16',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //15
        \App\Models\Game::create([
            'date' => '2019-03-10',
            'event_name' => 'くろさき人狼会',
            'situation' => 'jinro殺村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '17',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //16
        \App\Models\Game::create([
            'date' => '2019-03-10',
            'event_name' => 'くろさき人狼会',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '18',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => 4,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //17
        \App\Models\Game::create([
            'date' => '2019-03-17',
            'event_name' => 'カレッジウルフ',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '19',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //18
        \App\Models\Game::create([
            'date' => '2019-03-17',
            'event_name' => 'カレッジウルフ',
            'situation' => '作為村',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '20',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //19
        \App\Models\Game::create([
            'date' => '2019-03-17',
            'event_name' => 'HOUSEフリーデイ',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
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
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '22',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //21
        \App\Models\Game::create([
            'date' => '2019-03-23',
            'event_name' => 'かよわき大人の人狼会',
            'situation' => '救世主村',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '23',
            'role_id' => '6',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //22
        \App\Models\Game::create([
            'date' => '2019-03-23',
            'event_name' => 'かよわき大人の人狼会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
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
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '25',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //24
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '26',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //25
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '生痕者村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '27',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //26
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '生痕者村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '28',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //27
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '29',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //28
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '30',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => 4,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //29
        \App\Models\Game::create([
            'date' => '2019-03-31',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '31',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //30
        \App\Models\Game::create([
            'date' => '2019-04-06',
            'event_name' => 'シュピール',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '32',
            'role_id' => '5',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => '※勇者',
        ]);

        //31
        \App\Models\Game::create([
            'date' => '2019-04-09',
            'event_name' => 'villageはやさんGM',
            'situation' => '通常',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '33',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 5,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //32
        \App\Models\Game::create([
            'date' => '2019-04-09',
            'event_name' => 'villageはやさんGM',
            'situation' => '狐村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '34',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '※共有者',
        ]);

        //33
        \App\Models\Game::create([
            'date' => '2019-04-14',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '35',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //34
        \App\Models\Game::create([
            'date' => '2019-04-18',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '36',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '占い騙り',
        ]);

        //35
        \App\Models\Game::create([
            'date' => '2019-04-18',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '37',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '2',
            'note' => '1確',
        ]);

        //36
        \App\Models\Game::create([
            'date' => '2019-04-26',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '38',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //37
        \App\Models\Game::create([
            'date' => '2019-04-26',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '39',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //38
        \App\Models\Game::create([
            'date' => '2019-04-26',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '40',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //39
        \App\Models\Game::create([
            'date' => '2019-04-26',
            'event_name' => '福大人狼会@リガーデン',
            'situation' => 'ネズミ村',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '41',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //40
        \App\Models\Game::create([
            'date' => '2019-05-02',
            'event_name' => 'かよわき大人の人狼会',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '42',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //41
        \App\Models\Game::create([
            'date' => '2019-05-02',
            'event_name' => 'かよわき大人の人狼会',
            'situation' => 'サイコ村',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '43',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //42
        \App\Models\Game::create([
            'date' => '2019-05-02',
            'event_name' => 'かよわき大人の人狼会',
            'situation' => 'パン屋村',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '44',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '騎士騙り',
        ]);

        //43
        \App\Models\Game::create([
            'date' => '2019-05-06',
            'event_name' => '福大人狼会',
            'situation' => 'アプリ村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '45',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //44
        \App\Models\Game::create([
            'date' => '2019-05-10',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '狐村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '46',
            'role_id' => '11',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //45
        \App\Models\Game::create([
            'date' => '2019-05-10',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '狙われ村',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '47',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 5,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //46
        \App\Models\Game::create([
            'date' => '2019-05-12',
            'event_name' => 'カレッジウルフ',
            'situation' => 'ハンター村',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '48',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '2',
            'note' => '1確',
        ]);

        //47
        \App\Models\Game::create([
            'date' => '2019-05-12',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '49',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //48
        \App\Models\Game::create([
            'date' => '2019-05-12',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '50',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '2',
            'note' => '1確',
        ]);

        //49
        \App\Models\Game::create([
            'date' => '2019-05-12',
            'event_name' => 'villageはじめての人狼',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '51',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //50
        \App\Models\Game::create([
            'date' => '2019-05-17',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '狙われ村',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '52',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //51
        \App\Models\Game::create([
            'date' => '2019-05-17',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '53',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //52
        \App\Models\Game::create([
            'date' => '2019-05-24',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '54',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //53
        \App\Models\Game::create([
            'date' => '2019-05-26',
            'event_name' => '福大人狼会@佐福交流戦',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '55',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //54
        \App\Models\Game::create([
            'date' => '2019-06-14',
            'event_name' => '福大人狼会@金曜会',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '56',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //55
        \App\Models\Game::create([
            'date' => '2019-06-15',
            'event_name' => '福大人狼会@放送会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '57',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //56
        \App\Models\Game::create([
            'date' => '2019-06-15',
            'event_name' => '福大人狼会@放送会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '58',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //57
        \App\Models\Game::create([
            'date' => '2019-06-15',
            'event_name' => 'village土曜',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '59',
            'role_id' => '7',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //58
        \App\Models\Game::create([
            'date' => '2019-06-15',
            'event_name' => 'village土曜',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '60',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //59
        \App\Models\Game::create([
            'date' => '2019-06-15',
            'event_name' => 'village土曜',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '61',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //60
        \App\Models\Game::create([
            'date' => '2019-06-29',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '通常',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '62',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //61
        \App\Models\Game::create([
            'date' => '2019-07-05',
            'event_name' => '福大人狼会＠金曜会',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '63',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //62
        \App\Models\Game::create([
            'date' => '2019-07-26',
            'event_name' => 'HOUSE人狼ナイト',
            'situation' => '狐村',
            'total_participants' => '12',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '64',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //63
        \App\Models\Game::create([
            'date' => '2019-07-26',
            'event_name' => 'HOUSE人狼ナイト',
            'situation' => '悪女村',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '65',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //64
        \App\Models\Game::create([
            'date' => '2019-07-27',
            'event_name' => 'HOUSE人狼ナイト',
            'situation' => 'ハンター村',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '66',
            'role_id' => '7',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //65
        \App\Models\Game::create([
            'date' => '2019-07-27',
            'event_name' => '自宅会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '67',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //66
        \App\Models\Game::create([
            'date' => '2019-07-27',
            'event_name' => '自宅会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '68',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //67
        \App\Models\Game::create([
            'date' => '2019-07-28',
            'event_name' => 'カレッジウルフ',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '69',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //68
        \App\Models\Game::create([
            'date' => '2019-07-28',
            'event_name' => 'ハヤブサ会',
            'situation' => '名探偵村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '70',
            'role_id' => '9',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //69
        \App\Models\Game::create([
            'date' => '2019-07-28',
            'event_name' => 'ハヤブサ会',
            'situation' => '霊媒決め打ち村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '71',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //70
        \App\Models\Game::create([
            'date' => '2019-07-28',
            'event_name' => 'ハヤブサ会',
            'situation' => '狐村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '72',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //71
        \App\Models\Game::create([
            'date' => '2019-07-28',
            'event_name' => 'ハヤブサ会',
            'situation' => 'ネットjinro村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '73',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '※Twiceガード',
        ]);

        //72
        \App\Models\Game::create([
            'date' => '2019-08-01',
            'event_name' => '福大人狼会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '74',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'RPP',
        ]);

        //73
        \App\Models\Game::create([
            'date' => '2019-08-11',
            'event_name' => 'HOUSEフリーデイ',
            'situation' => '通常',
            'total_participants' => '10',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '75',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //74
        \App\Models\Game::create([
            'date' => '2019-08-11',
            'event_name' => 'HOUSEフリーデイ',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '76',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '霊媒騙り',
        ]);

        //75
        \App\Models\Game::create([
            'date' => '2019-08-25',
            'event_name' => 'ハヤブサ会',
            'situation' => '名探偵村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '77',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => 4,
            'result_way_id' => '1',
            'note' => '霊媒騙り',
        ]);

        //76
        \App\Models\Game::create([
            'date' => '2019-08-25',
            'event_name' => 'ハヤブサ会',
            'situation' => '2占い村',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '78',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 7,
            'result_way_id' => '1',
            'note' => '潜伏',
        ]);

        //77
        \App\Models\Game::create([
            'date' => '2019-08-31',
            'event_name' => '福大人狼会@突発会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '79',
            'role_id' => '5',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //78
        \App\Models\Game::create([
            'date' => '2019-08-31',
            'event_name' => '福大人狼会@突発会',
            'situation' => '通常',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '80',
            'role_id' => '1',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => '潜伏',
        ]);

        //79
        \App\Models\Game::create([
            'date' => '2019-08-31',
            'event_name' => '福大人狼会@突発会',
            'situation' => '通常',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '81',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //80
        \App\Models\Game::create([
            'date' => '2019-08-31',
            'event_name' => '福大人狼会@突発会',
            'situation' => '通常',
            'total_participants' => '15',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '82',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //81
        \App\Models\Game::create([
            'date' => '2019-09-07',
            'event_name' => '福大人狼会@OB会',
            'situation' => '黒幕村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '83',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //82
        \App\Models\Game::create([
            'date' => '2019-09-07',
            'event_name' => '福大人狼会@OB会',
            'situation' => '通常',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '84',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //83
        \App\Models\Game::create([
            'date' => '2019-09-13',
            'event_name' => '自宅会@グリキャン',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '85',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //84
        \App\Models\Game::create([
            'date' => '2019-09-22',
            'event_name' => '福大人狼会@初心者会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '86',
            'role_id' => '2',
            'result_id' => '2',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //85
        \App\Models\Game::create([
            'date' => '2019-09-22',
            'event_name' => '福大人狼会@初心者会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '87',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //86
        \App\Models\Game::create([
            'date' => '2019-09-28',
            'event_name' => '福大人狼会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '88',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 1,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //87
        \App\Models\Game::create([
            'date' => '2019-10-05',
            'event_name' => '福大人狼会@放送会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '89',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '1',
            'note' => '潜伏',
        ]);

        //88
        \App\Models\Game::create([
            'date' => '2019-10-05',
            'event_name' => '福大人狼会@放送会',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '90',
            'role_id' => '2',
            'result_id' => '1',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => '占い騙り',
        ]);

        //89
        \App\Models\Game::create([
            'date' => '2019-10-05',
            'event_name' => '福大人狼会@放送会',
            'situation' => '通常',
            'total_participants' => '11',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '91',
            'role_id' => '6',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //90
        \App\Models\Game::create([
            'date' => '2019-10-14',
            'event_name' => '自宅会@クイ研',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '92',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //91
        \App\Models\Game::create([
            'date' => '2019-10-19',
            'event_name' => '福大人狼会',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '93',
            'role_id' => '7',
            'result_id' => '2',
            'result_day' => 2,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //92
        \App\Models\Game::create([
            'date' => '2019-10-27',
            'event_name' => '自宅会@エンジニア人狼',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '94',
            'role_id' => '4',
            'result_id' => '2',
            'result_day' => 4,
            'result_way_id' => '2',
            'note' => 'nan',
        ]);

        //93
        \App\Models\Game::create([
            'date' => '2019-10-27',
            'event_name' => '自宅会@エンジニア人狼',
            'situation' => '通常',
            'total_participants' => '9',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '95',
            'role_id' => '5',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //94
        \App\Models\Game::create([
            'date' => '2019-11-03',
            'event_name' => '福大人狼会@七隈祭',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '96',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //95
        \App\Models\Game::create([
            'date' => '2019-11-03',
            'event_name' => '福大人狼会@七隈祭',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '97',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

        //96
        \App\Models\Game::create([
            'date' => '2019-12-21',
            'event_name' => '福大人狼会',
            'situation' => '勇者村',
            'total_participants' => '14',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '98',
            'role_id' => '4',
            'result_id' => '1',
            'result_day' => null,
            'result_way_id' => '3',
            'note' => 'nan',
        ]);

        //97
        \App\Models\Game::create([
            'date' => '2019-12-22',
            'event_name' => '福大人狼会＠長期村',
            'situation' => '通常',
            'total_participants' => '13',
            'note' => 'NULL',
        ]);
        \App\Models\IndividualResult::create([
            'user_id' => '4',
            'game_id' => '99',
            'role_id' => '1',
            'result_id' => '2',
            'result_day' => 3,
            'result_way_id' => '1',
            'note' => 'nan',
        ]);

    }
}
