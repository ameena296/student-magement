<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'class' => 'required|string|max:50'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Student::create($request->all());
        return redirect()->route('students.index')
        ->with('success', 'Student created successfully');
    }

    // API Endpoints
    public function apiIndex(){
        $students = Student::latest()->paginate(10);
        return response()->json($students);
    }

    public function apiStore(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'class' => 'required|string|max:50',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],422);
        }

        $student = Student :: create($request->all());
        return response()->json($student, 201);
    }
}
