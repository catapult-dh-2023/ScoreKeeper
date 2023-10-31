<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;
use App\Models\User;
use Validator;
use Auth;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->view('league.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('league.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            // バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        // バリデーションエラー
        if ($validator->fails()) {
            return redirect()->route('league.create')->withInput()->withErrors($validator);
        }

        $result1 = League::create($request->all());

        $league_id = $result1->id;
        $user_id = Auth::user()->id;
        $data = $request->merge(['user_id' => Auth::user()->id, 'league_id' => $league_id])->all();
        $result2 = LeagueParticipant::create($request);
        return redirect()->route('league.index');
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
    public function my_league(){
        return response()->view('league.show');
    }
}
