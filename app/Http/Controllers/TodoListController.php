<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoListController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'konten' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Todo::create($validateData);
        return redirect('/dashboard')->with('toast_success', 'new list has been added');
    }
    public function destroy(Request $request, Todo $todo)
    {
        Todo::destroy('id', $todo->id);
        return redirect('/dashboard')->with('toast_warning', 'list has been deleted');
    }
}
