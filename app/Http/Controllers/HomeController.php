<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class HomeController extends Controller
{
    public function show()
    {
        $topics = Topic::with(['user'])->orderBy('id')->paginate(10);

        return view('home', ['topics' => $topics]);
    }
}
