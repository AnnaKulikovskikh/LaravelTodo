<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function show() {
        $notes = Todo::all();
        return view('todo', ['array'=>$notes]);
    }

    public function add(){
        $note = new Todo;

        $note->title = 'New Task7';
        $note->description = 'bla-bla-bla7';
        $note->save();
        
        return redirect('/todo');
    }

    public function showid($id) {
        //$notes = Todo::all();
        //$notes = Todo::find('id');

        $notes = Todo::paginate($id);
        dump($notes);
        return view('todo', ['array'=>[$notes[$id-1]]]);
    }
}
