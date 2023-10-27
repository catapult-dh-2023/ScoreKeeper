<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaguesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //1
        \App\Models\League::create([
            'name' => 'Aリーグ',
        ]);

        $league=\App\Models\League::find(1);
        $game=\App\Models\Game::find(2);
        $league->games()->attach($game);

        //2
        \App\Models\League::create([
            'name' => 'Bリーグ',
        ]);

    }
}
