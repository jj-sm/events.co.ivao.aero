<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function index()
    {
        return view('website.rfe23.statics.view');
    }
}
