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
        foreach ($individual_results as $individual_result){
            $result_id = $individual_result->result_id;
            $result_way_id = $individual_result->result_way_id;
            if ($result_id == 1){
                $individual_result_win += 1;
                if ($result_way_id <= 3){
                    $win_zin += 1;
                    $zin += 1;
                }
                else if ($result_way_id <= 8){
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
                if ($result_way_id <= 3){
                    $lose_zin += 1;
                    $zin += 1;
                }
                else if ($result_way_id <= 8){
                    $lose_sim += 1;
                    $sim += 1;
                }
                else {
                    $lose_san += 1;
                    $san += 1;
                }
            }
        }
        foreach ($individual_results as $individual_result){
            
        }
        return response()->view('individual_results.analysis', compact('individual_result_win', 'individual_result_lose', 'sim', 'zin', 'san', 'win_sim', 'win_zin', 'win_san', 'lose_sim', 'lose_zin', 'lose_san'));
    }
}
