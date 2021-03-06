<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Requests\StudentStore;
use App\Models\Score;
use App\Models\students;
use App\Models\Subject;
use Auth;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class StudentsController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('students.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::orderBy('name', 'asc')->get();
        return view('students.create', compact('subject'));
    }


    public function store(StudentStore $request)
    {
        User::create([
            'enrollment' => $request->enrollment,
            'name' => $request->name,
            'semester' => $request->semester,
            'career' => $request->career,
            'number' => $request->number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('Student');
        return redirect()->route('registro.index');
    }


    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        //
    }

    public function subjects($id)
    {

        $subject = Subject::orderBy('name', 'asc')->get();
        return view('students.studentSubject', compact('subject'));
    }

    public function loadSubject(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->user_id = Auth::user()->id;
        $subject->update();
        return redirect()->route('dashboard');
    }

    public function score($id)
    {
        $subject = Subject::where('user_id', $id)->firstOrFail();
        $score  = Score::findOrFail($id);
        return view('students.studentScore', compact('subject', 'score'));
    }
}
