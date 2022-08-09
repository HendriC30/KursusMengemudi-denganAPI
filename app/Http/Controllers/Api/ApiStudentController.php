<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiStudentController extends Controller
{
    // public function showall(){
    //     return response([
    //         'Student' => Student::latest()->get(),
    //     ]);
    // }
    // public function showa(Student $Student){
    //     return response([
    //         'Student' => $Student
    //     ]);
    // }
}
