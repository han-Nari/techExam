<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{

    public function addTodo() {
        
        return view('todoTask.add');
    }

    public function createTodo(Request $request) {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'due_date' => 'date'
        ]);

        Todo::create($validate);
        return redirect()->route(route:'todo.todoLists')->with('success', 'Task Created!');
    }

    public function todoLists() {
        $items = Todo::orderby('created_at', 'desc')->paginate(5);
        return view('todoTask.todoList', ['items' => $items]);
    }

    public function todoId($id) {
        $todo = Todo::findOrfail($id);
        return view('todoTask.show', ['todo' => $todo]);
    }

    public function deleteItem($id) {
        $del = Todo::findOrfail($id);
        $del->delete();
        return redirect()->route('todo.todoLists')->with('delete', 'Task Deleted!');;
    }

    public function editItem($id) {
        // Retrieve the item from the database
        $item = Todo::find($id);
    
        // Check if item exists, if not, you can redirect or show an error
        if (!$item) {
            return redirect()->route('todo.todoLists');
        }
    
        // Pass the item data to the edit view
        return view('todoTask.edit', compact('item'));
    }
    
    public function updateItem(Request $request, $id) {
        // Retrieve the item from the database
        $item = Todo::find($id);
    
        // If item doesn't exist, handle the error
        if (!$item) {
            return redirect()->route('todo.todoLists');
        }
    
        // Update the item with the new data
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->due_date = $request->input('due_date');
    
        // Save the changes to the database
        $item->save();
    
        // Redirect to the task list page with a success message
        return redirect()->route('todo.todoLists')->with('update', 'Task updated successfully!');
    }
    
}
