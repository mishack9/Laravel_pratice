<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_student()


    {
        $students = Student::all();
        return view('student',['students' => $students]);
    }
}
