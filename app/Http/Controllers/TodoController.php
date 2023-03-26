<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function show() {
        //$notes = Todo::all();
        $notes = Todo::paginate();
        return view('todo', ['array'=>$notes]);
    }

    public function add(){
        $note = new Todo;

        $note->title = 'New Task8';
        $note->description = 'bla-bla-bla8';
        $note->save();
        
        return redirect('/todo');
    }

    public function showid($id) {
        //$notes = Todo::all();
        //$notes = Todo::find('id');

        $notes = Todo::paginate($id);
        dump($notes);
        dump($notes[$id]);
        dump($notes[$id-1]);
        return view('todo', ['array'=>[$notes[$id-1]]]);
    }
}
