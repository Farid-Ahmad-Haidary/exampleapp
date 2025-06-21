<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function TeacherIndex()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
        
    }

    public function create()
    {
        return view('teachers.create');
    }
    

    public function store(Request $request){
        Teacher::insert([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'Salary' => $request->salary,
            
        ]);
    }

}
