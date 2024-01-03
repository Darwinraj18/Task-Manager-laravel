<?php

namespace App\Http\Controllers;
use App\Models\TaskModel;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = TaskModel::all();
    
        return view('Task.index', compact('tasks'));
    }
    
    public function create(){
        return view('Task.create');

    }

    public function store(Request $request){
        // Validate the incoming request data
        $validatedData = $request->validate([   
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // Add more validation rules for other fields if needed
        ]);
    
        // Create a new TaskModel instance with the validated data
        $task = TaskModel::create($validatedData);
    
        // Optionally, you can return a response or redirect to another page
        return redirect()->route('Tasks.index')->with('success', 'Task created successfully!');
    }
    
    public function destroy($id)
{
    // Find the TaskModel instance by ID
    $task = TaskModel::find($id);

    // Check if the task exists
    if (!$task) {
        return redirect()->route('Tasks.index')->with('error', 'Task not found!');
    }

    // Delete the task
    $task->delete();

    // Optionally, you can return a response or redirect to another page
    return redirect()->route('Tasks.index')->with('success', 'Task deleted successfully!');
}
public function edit($id)
    {
        $task = TaskModel::findOrFail($id);

        return view('Task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task = TaskModel::findOrFail($id);
        $task->update($validatedData);

        return redirect()->route('Tasks.index')->with('success', 'Task updated successfully!');
    }
}
