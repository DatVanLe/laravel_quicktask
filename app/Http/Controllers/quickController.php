<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quickController extends Controller
{
    public function getindex(){
        return view('tasks');
    }
}
