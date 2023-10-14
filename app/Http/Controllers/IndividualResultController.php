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
}
