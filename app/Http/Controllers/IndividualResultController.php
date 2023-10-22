<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndividualResult;
use App\Models\User;
use Auth;

class IndividualResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function mydata()
    {
        //return redirect('https://www.google.com');

        $individual_results = User::query()
          ->find(Auth::user()->id)
          ->userIndividualResults()
          ->orderBy('created_at', 'desc')
          ->get();

        return response()->view('individual_results.index', compact('individual_results'));
    }
    
    public function analysis()
    {
        $individual_results = User::query()
          ->find(Auth::user()->id)
          ->userIndividualResults()
          ->orderBy('created_at', 'desc')
          ->get();
        
        //総成績
        $individual_result_win = 0;
        $individual_result_lose = 0;
        $sim=0;
        $zin=0;
        $san=0;
        $win_sim=0; //市民勝ち
        $win_zin=0; //人狼
        $win_san=0; // 第三陣営
        $lose_sim=0; //市民負け
        $lose_zin=0; //人狼
        $lose_san=0; // 第三陣営
        $live=0;
        $bite=0;
        $hung=0;
        $win_live=0;
        $lose_live=0;
        $win_bite=0;
        $lose_bite=0;
        $win_hung=0;
        $lose_hung=0;
        $nine=0;
        $ten=0;
        $eleven=0;
        $twelve=0;
        $thirteen=0;
        $fourteen=0;
        $fifteen=0;
        $nine_win=0;
        $ten_win=0;
        $eleven_win=0;
        $twelve_win=0;
        $thirteen_win=0;
        $fourteen_win=0;
        $fifteen_win=0;
        foreach ($individual_results as $individual_result){
            $result_id = $individual_result->result_id;
            $result_way_id = $individual_result->result_way_id;
            $role_id = $individual_result->role_id;
            if ($result_id == 1){
                $individual_result_win += 1;
                if ($role_id <= 3){
                    $win_zin += 1;
                    $zin += 1;
                }
                else if ($role_id <= 8){
                    $win_sim += 1;
                    $sim += 1;
                }
                else {
                    $win_san += 1;
                    $san += 1;
                }
            }
            else{
                $individual_result_lose += 1;
                if ($role_id <= 3){
                    $lose_zin += 1;
                    $zin += 1;
                }
                else if ($role_id <= 8){
                    $lose_sim += 1;
                    $sim += 1;
                }
                else {
                    $lose_san += 1;
                    $san += 1;
                }
            }
            if ($result_way_id == 1) {
                $hung += 1;
                if ($result_id == 1) {
                    $win_hung += 1;
                }
                else {
                    $lose_hung += 1;
                }
            }
            else if ($result_way_id == 2) {
                $bite += 1;
                if ($result_id == 1) {
                    $win_bite += 1;
                }
                else {
                    $lose_bite += 1;
                }
            }
            else {
                $live += 1;
                if ($result_id == 1) {
                    $win_live += 1;
                }
                else {
                    $lose_live += 1;
                }
            }
            $game = $individual_result->game;
            $totalParticipants = $game->total_participants;
            if ($result_id == 1){
                if ($totalParticipants<=9) {
                    $nine += 1;
                    $nine_win += 1;
                }
                if ($totalParticipants==10) {
                    $ten += 1;
                    $ten_win += 1;
                }
                if ($totalParticipants==11) {
                    $eleven += 1;
                    $eleven_win += 1;
                }
                if ($totalParticipants==12) {
                    $twelve += 1;
                    $twelve_win += 1;
                }
                if ($totalParticipants==13) {
                    $thirteen += 1;
                    $thirteen_win += 1;
                }
                if ($totalParticipants==14) {
                    $fourteen += 1;
                    $fourteen_win += 1;
                }
                if ($totalParticipants==15) {
                    $fifteen += 1;
                    $fifteen_win += 1;
                }
            }
            else {
                if ($totalParticipants<=9) {
                    $nine += 1;
                }
                if ($totalParticipants==10) {
                    $ten += 1;
                }
                if ($totalParticipants==11) {
                    $eleven += 1;
                }
                if ($totalParticipants==12) {
                    $twelve += 1;
                }
                if ($totalParticipants==13) {
                    $thirteen += 1;
                }
                if ($totalParticipants==14) {
                    $fourteen += 1;
                }
                if ($totalParticipants==15) {
                    $fifteen += 1;
                }
            }
        }
        if ($nine == 0) {
            $nine=1;
        }
        if ($ten == 0) {
            $ten=1;
        }
        if ($eleven == 0) {
            $eleven=1;
        }
        if ($twelve == 0) {
            $twelve=1;
        }
        if ($thirteen == 0) {
            $thirteen=1;
        }
        if ($fourteen == 0) {
            $fourteen=1;
        }
        if ($fifteen == 0) {
            $fifteen=1;
        }
        return response()->view('individual_results.analysis', compact('individual_result_win', 'individual_result_lose', 'sim', 'zin', 'san', 'win_sim', 'win_zin', 'win_san', 'lose_sim', 'lose_zin', 'lose_san', 'live', 'bite', 'hung', 'win_live', 'lose_live', 'win_bite', 'lose_bite', 'win_hung', 'lose_hung', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'nine_win', 'ten_win', 'eleven_win', 'twelve_win', 'thirteen_win', 'fourteen_win', 'fifteen_win'));
    }
}
