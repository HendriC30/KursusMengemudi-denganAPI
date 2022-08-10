<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Instructor = Instructor::with('student')->paginate(10);
        // return view('Instructor.index',compact(['Instructor']));
        return view('Instructor.index',[
            'instructor' => Instructor::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Instructor.Create');
        $student = Student::all();
        return view('Instructor.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Instructor::create($request->except(['_token','submit']));
        // return redirect('/Instructor');
        Instructor::create([
            'nameIns' => $request->nameIns,
            'phone_numberIns' => $request->phone_numberIns,
            'student_id' => $request->student_id,
        ]);
        return redirect('/Instructor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $Instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $Instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $Instructor = Instructor::find($id);
        // return view('Instructor.edit',compact(['Instructor']));
        $instructor = Instructor::find($id);
        return view('Instructor.edit', [
            'student' => Student::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $Instructor
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $instructor = Instructor::find($id);
        $instructor->update($request->except(['_token','submit']));
        return redirect('/Instructor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $Instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();
        return redirect('/Instructor');
    }
}
