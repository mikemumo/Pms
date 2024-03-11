<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
use Illuminate\Support\Facades\Auth;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $task = Task::all();
        return view('tasks.index', ['tasks'=>$task]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id = null)
    {
        //
        $projects=null;
       
        $project=Project::all();
        return view('tasks.create', ['project_id'=>$project_id, 'projects'=>$project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'name' => 'required|min:3|max:50|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'description' => 'required|min:5|max:200|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'

        ]);
        
            $task = Task::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'attachment'=>$request->input('attachment'),
                'start_date'=>$request->input('start_date'),
                'end_date'=>$request->input('end_date'),
                'project_id'=>$request->input('project_id'),
                
            ]); 
        
       
        return redirect()->route('tasks.index')->with('success', 'Task Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        $task = Task::find($task->id); 
        
        //$task = Task::where('id', $task->id)->first();
        return view('tasks.show', ['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        $task = Task::find($task->id); 
        return view('tasks.edit', ['Task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //save data

        $taskUpdate = Task::where('id', $task->id)->update([
            'name'=>$request ->input('name'),
            'description'=>$request ->input('description'),
            'start_date'=>$request ->input('start_date'),
            'end_date'=>$request ->input('end_date'),
            'attachment'=>$request ->input('attachment'),
        ]);
                
        if($taskUpdate){
            return redirect()->back('tasks.index', ['Task'=>$task->id])->with('success', 'Task Updated Successfully');
        }
        //redirect
        return back()->withInput();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        $findTask = Task::find($task->id);
        if($findTask->delete()){

            //redirect
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully' );
        }
        return back()->withInput()->with('error', 'Task could not be deleted');
    
    }
}
