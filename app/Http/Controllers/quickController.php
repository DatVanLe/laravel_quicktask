<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Task;

class quickController extends Controller
{
    public function getindex(){
        return view('tasks');
    }

    public function postadd(Request $req){
        $validator = Validator::make($req->all(),
            [
                'name' => 'required|max:50',
            ]);

            if ($validator->fails()) {
                return redirect('index')->withInput()->withErrors($validator);
            }

        $add = new Task;
        $add -> name = $req -> text;
        $add->save();

        return redirect('index');
    }

    public function getresetindex(){
        $tasks = Task::orderBy('created_at', 'asc') -> get();

        return view('index', compact('tasks'));
    }
}
