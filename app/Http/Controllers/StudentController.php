<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $allName;
    public function fullName(Request $request)
    {
        // return $request->all();
        // return "$request->firstName $request->lastName";
        $this->allName = $request->firstName.' '.$request->lastName;
        return view('contact', ['result'=> $this->allName]);
    }
}
