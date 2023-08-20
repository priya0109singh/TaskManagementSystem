<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = task::latest()->paginate(5);

        return view('tasks.index', compact('tasks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duedate' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
        }
  return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);

        if (!$task) {
        }
  return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duedate' => 'required',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
    
    public function markAsCompleted(Task $task)
    {
        $task->update(['status' => 'completed']);

        return redirect()->back()->with('success', 'Task marked as completed.');
    }

    public function markAsPending(Task $task)
    {
        $task->update(['status' => 'pending']);

        return redirect()->back()->with('success', 'Task marked as pending.');
    }

    // public function updateStatus($id){
        
    //     $task = task::find($id);
    //     if($task){
    //         if($task->status){
    //             $task->status = 'pending';
    //         }else{
    //             $task->status = 'completed';
    //         }

    //         $task->save();
    //     }
    //     return back();
    // }
    public function sort(Request $request)
    {
        $query = Task::query();

        // Sorting
        $sortColumn = $request->get('sort', 'due_date');
        $sortDirection = $request->get('direction', 'asc');
        $query->orderBy($sortColumn, $sortDirection);

        // Filtering
        $status = $request->get('status');
        if ($status) {
            $query->where('status', $status);
        }

        $tasks = $query->paginate(10);

        return view('tasks.index', compact('tasks'));
    }
    
    
}
