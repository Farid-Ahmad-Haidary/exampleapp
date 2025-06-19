<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
       return view('home');
    }

    public function about()
    {
        return 'HELLO WORLD';
    }
    
    public function contact()
    {
        return 'Contact us';
    }
    
    public function project(Request $request)
    {
        $name = $request->query('name', 'Guest');
        $lastName = $request->query('lastName', 'User');
        $message = "Hello, $name $lastName!";
        // You can pass the message to the view if needed
        return view('project', ['message' => $message]);

    
    }

}