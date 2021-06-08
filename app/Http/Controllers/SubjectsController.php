<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectStore;
use App\Models\Subject;
use App\Models\Score;
use Auth;
use Illuminate\Http\Request;
use Livewire\Request as LivewireRequest;

class SubjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::all();
        return view('subjects.index', compact('subject'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectStore $request)
    {
        $subject = new Subject();

        $score = new Score();
        $score->parcial1 = 0;
        $score->parcial2 = 0;
        $score->parcial3 = 0;
        $score->parcial4 = 0;
        $score->save();

        $subject->name = $request->name;
        $subject->score_id = $score->id;
        $subject->user_id = Auth::user()->id;
        $subject->save();
        return redirect()->route('subject.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subjects)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectStore $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->name = $request->name;
        $subject->update();
        return redirect()->route('subject.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjects $subjects)
    {
        //
    }
}
