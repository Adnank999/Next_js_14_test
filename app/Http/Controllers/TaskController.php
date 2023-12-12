<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $validatedData = $request->validate([
        //     'id' => 'required|string',
        //     'name' => 'required|string|max:255',
        //     'category' => 'required|string|max:255',
        //     'checked' => 'required'
        // ]);

        $task = new Task();
        $task->name = $request->name;
        $task->category = $request->category;
        $task->checked = $request->checked;

        $task->save();

        
        return response()->json(['message' => 'Task created successfully', 'task' => $task], 201);
    }

  
    public function show()
    {
        $tasks_show = Task::all();

        return response()->json($tasks_show, JsonResponse::HTTP_OK);
    }


    public function edit(string $id)
    {
        
           
            $task = Task::find($id);
    
            
            if (!$task) {
                return response()->json(['message' => 'Task not found'], 404);
            }
    
        
            return response()->json(['message' => 'Task retrieved successfully', 'task' => $task], 200);
       
    }

  
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'checked' => 'required'
           
        ]);

       
        $task = Task::find($id);

        // Check if the task exists
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

       
        $task->name = $validatedData['name'];
        $task->category = $validatedData['category'];
        $task->checked = $validatedData['checked'];
     

       
        $task->save();

        
        return response()->json(['message' => 'Task updated successfully', 'task' => $task], 200);
    
    }

    
    public function destroy(string $id)
    {
        $tasks_del = Task::find($id)->delete();

        return response()->json(['message' => 'Task Deleted successfully', 'task' => $tasks_del], 200);
    }   
}
