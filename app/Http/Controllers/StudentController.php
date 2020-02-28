<?php

namespace App\Http\Controllers;

use App\ticket;
use App\feedback;
use App\massage;
use App\subject;
use App\ias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $tickets = ticket::where('id', '=', Auth::student()->id)->get();
        return view('home', compact('tickets'));
    }

     

    public function store(Request $request)
    {
        $tickets = new ticket;

        $tickets->ticket = $request->input('content');
        $tickets->category = $request->input('state');
        $tickets->id = Auth::student()->id;
        $tickets->save();
        return redirect('home');
    }

    /*public function edit($id)
    {
        $todo = Todo::find($id);
        if (Auth::user()->id != $todo->user_id) {
            return redirect('home');
        }
        return view('edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        if ($todo = Todo::find($id)) {
            if (Auth::user()->id != $todo->user_id) {
                return redirect('home');
            }
            $data = $request->all();
            $todo->task = $data['task'];
            $todo->category = $data['category'];
            $todo->description = $data['description'];
            $todo->save();
        }
        return redirect('home');
    }

    public function delete($id)
    {
        if ($todo = Todo::find($id)) {
            if (Auth::user()->id != $todo->user_id) {
                return redirect('home');
            }
            $todo->delete();
        }
        return redirect('home');
    }*/
}
