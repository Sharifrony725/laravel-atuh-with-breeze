<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Salary;

class TeacherController extends Controller
{
    public function view(){
        $teachers = Teacher::with('rSalary')->get();
        return view('teacher', compact('teachers'));
    }
}
