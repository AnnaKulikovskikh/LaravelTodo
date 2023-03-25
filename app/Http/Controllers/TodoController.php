<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function show() {
        $notes = DB::table('todos')->get();
        return view('todo', ['array'=>$notes]);
    }

    public function add(){
        DB::table('todos')->insert([
            'title'=>'New Task6',
            'description'=>'bla-bla-bla6',
            'created_at'=>'2023-02-17 19:19:47',
            'updated_at'=>'2023-03-17 19:19:47',
        ]);
        return redirect('/todo');
    }

    public function showid($id) {
        $notes = DB::table('todos')->get();
        dump($notes[$id-1]);
        return view('todo', ['array'=>[$notes[$id-1]]]);
    }
}
