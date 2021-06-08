<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('score.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        return view('score.create', compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit($score)
    {
        $score = Score::findOrFail($score);
        $subject = Subject::all();
        return view('score.edit', compact('score', 'subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $score)
    {
        $score = Score::findOrFail($score);
        $score->parcial1    = $request->parcial1;
        $score->parcial2    = $request->parcial2;
        $score->parcial3    = $request->parcial3;
        $score->parcial4    = $request->parcial4;
        $score->update();
        return redirect()->route('studentScore', Auth::user()->id)->with('succes', 'actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
