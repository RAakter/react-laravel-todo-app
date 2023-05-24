<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'completed' => 'required|boolean',
        ]);

        $todo = Todo::create($validatedData);

        return response()->json($todo, 201);
    }

    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'completed' => 'required|boolean',
        ]);

        $todo->update($validatedData);

        return response()->json($todo, 200);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json(null, 204);
    }
}
