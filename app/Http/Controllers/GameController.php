<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Game;
use App\Models\IndividualResult;
use Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = [];
        return response()->view('game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'date' => ['required', 'date'],
            'event_name' => ['required'],
            'situation' => ['required'],
            'total_participants' => ['required', 'integer'],
        ]);

        // バリデーションエラー
        if ($validator->fails()) {
            return redirect()->route('game.create')->withInput()->withErrors($validator);
        }

        $result1 = Game::create($request->all());
        $game_id = $result1->id;
        $data = $request->merge(['user_id' => Auth::user()->id, 'game_id' => $game_id])->all();
        $result2 = IndividualResult::create($data);

        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
