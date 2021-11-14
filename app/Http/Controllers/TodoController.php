<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function home()
    {
        $todos = Todo::all();
        // dd($todos);
        return view('home', ['todos' => $todos]);
    }

    public function create(Request $request)
    {
        // dd($request->post('title'));
        $validatedData = $request->validate(['title' => 'required|max:124']);
        // dd($validatedData); 
        Todo::create($validatedData);
        // $todo = new Todo();
        // $todo->title = $request->post('title');
        // $todo->save();
        return redirect('/');
    }

    public function edit(Todo $id)
    {
        return view('update', compact('id'));
    }

    public function update(Request $request, Todo $id)
    {
        $validatedData = $request->validate([
            "title" => "required|max:124"

        ]);
        // dd($validatedData);
        $id->title = $validatedData['title'];
        $id->save();
        return redirect(route('home'));
    }

    public function delete(Todo $id)
    {
        $id->delete();
        return back();
    }
}
