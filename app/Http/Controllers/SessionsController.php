<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function show()
    {
        return view('sessions.login');
    }

    public function store()
    {

    }
    
    public function logout()
    {

    }
}
