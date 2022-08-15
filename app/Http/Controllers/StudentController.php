<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Student = Student::all();
        // return view('Student.index',compact(['Student']));
        return view('Student.index', [
            'Student' => Student::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = Car::all();
        return view('Student.create',compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'car_id' => $request->car_id,
        ]);
        return redirect('/Student');
        // Student::create($request->except(['_token','submit']));
        // return redirect('/Student');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student = Student::findorfail($id);
        return view('Student.edit', [
            'Student' => $Student,
            'cars' => Car::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $Student = Student::find($id);
        $Student->update($request->except(['_token','submit']));
        return redirect('/Student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Student = Student::find($id);
        $Student->delete();
        return redirect('/Student');
    }
}