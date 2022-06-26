<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * index para mostrar todos los elementos
     * store para guardar un todo
     * update para actualizar
     * show para mostrar
     * edit para mostrar el formulario de edición
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Tarea creada correctamente');
    }
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function update()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function destroy()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }
}
