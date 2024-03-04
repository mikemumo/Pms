<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

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
            'name' => 'required|min:3|max:50|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'description' => 'required|min:5|max:200|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'

        ]);
        $project = Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'attachment'=>$request->input('attachment'),
            'start_date'=>$request->input('start_date'),
            'end_date'=>$request->input('end_date'),
            
        ]); 
        return redirect()->back()->with('success', 'Project Added Successfully');
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
        $project = Project::find($project->id); 
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
            'attachment'=>$request ->input('attachment'),
        ]);
                
        if($projectUpdate){
            return redirect()->back('projects.index', ['project'=>$project->id])->with('success', 'Project Updated Successfully');
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
            return redirect()->route('projects.index')->with('success', 'project deleted successfully' );
        }
        return back()->withInput()->with('error', 'project could not be deleted');
    
    }
}
