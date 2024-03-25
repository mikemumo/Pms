<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   

        $project = Project::all();
        $project = Project::with('tasks')->paginate(4);

        // Calculate progress percentage for each project
        $project->each(function ($project) {
            $totalTask = $project->tasks->count();
            $completedTask = $project->tasks->where('t_status', 1)->count();
            $project->progressPercentage = $totalTask > 0 ? ($completedTask / $totalTask) * 100 : 0;
    
            // Determine the status based on progress percentage
            if ($project->progressPercentage == 100) {
                $project->p_status = 3; // Status: Complete
            } elseif ($project->progressPercentage > 0) {
                $project->p_status = 2; // Status: Ongoing
            } else {
                $project->p_status = 1; // Status: New
            }
        });
   

        return view('projects.index', ['projects'=>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
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
            'name' => 'required|min:5|max:50|regex:/^([a-zA-Z]+)([\s.,a-zA-Z]+)*$/',
            'description' => 'required|min:15|max:200|regex:/^([a-zA-Z]+)([\s.,a-zA-Z]+)*$/',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'

        ]);

        
            $project = Project::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'start_date'=>$request->input('start_date'),
                'end_date'=>$request->input('end_date'),
                        
            ]); 
        
       
        return redirect()->route('projects.index')->with('success', 'Project Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $project = Project::find($project->id); 
        //$project = Project::where('id', $project->id)->first();
        return view('projects.show', ['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $projects=Project::find($project->id);
        return view('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //save data

        $projectUpdate = Project::where('id', $project->id)->update([
            'name'=>$request ->input('name'),
            'description'=>$request ->input('description'),
            'start_date'=>$request ->input('start_date'),
            'end_date'=>$request ->input('end_date'),
            
        ]);
                
        if($projectUpdate){
            return redirect()->route('projects.index', ['project'=>$project->id])->with('success', 'Project Updated Successfully');
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
    public function destroy(Project $project)
    {
        //
        $findproject = Project::find($project->id);
        if($findproject->delete()){

            //redirect
            return redirect()->route('projects.index')->with('success', 'Project Deleted Successfully' );
        }
        return back()->withInput()->with('error', 'project could not be deleted');
    
    }
}
