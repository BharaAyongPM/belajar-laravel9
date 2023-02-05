<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;

class StudentController extends Controller
{

    public function index()
    {
        //$students = Student::all();
        $students = Student::paginate(2);
        return view('index', ['students' => $students]);
    }
    public function show($id)
    {
        $student = Student::find($id);
        $activities = $student->activities;

        return view('example', ['activities' => $activities, 'student' => $student]);
    }
}
