<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.teachers', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {
        return view('pages.teacher-detail', compact('teacher'));
    }
}
