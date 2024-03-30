<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Student;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

    

    // Retrieve projects with completed tasks and count of total students
    $projects = Project::withCount(['tasks as total_students' => function ($query) {
            $query->selectRaw('count(distinct student_id)');
        }])
        ->with(['tasks' => function ($query) {
            $query->where('t_status', 1); // Filter completed tasks
        }])
        ->get();

    return view('taskstatus.index', compact('projects'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Project::findOrFail($id);
        $tasks = Task::where('project_id', $project->id)->with('student')->get();
        $project = Project::findOrFail($id);
        // Calculate progress percentage for the project
        $totalTask = $project->tasks->count();
        $completedTask = $project->tasks->where('t_status', 1)->count();
        $project->progressPercentage = $totalTask > 0 ? ($completedTask / $totalTask) * 100 : 0;
        return view('taskstatus.show', compact('project', 'tasks'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
