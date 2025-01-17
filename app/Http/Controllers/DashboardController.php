<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard(){
        $studentsCount = Student::count();
        return view('dashboard',compact('studentsCount'));
    }
}
