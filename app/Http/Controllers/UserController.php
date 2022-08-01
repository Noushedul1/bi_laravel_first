<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function bitm()
    {
        return view('bitm');
    }
}
