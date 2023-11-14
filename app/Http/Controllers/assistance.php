<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assistance extends Controller
{
    public function index()
    {
        return view("front.assistance");
    }
}
