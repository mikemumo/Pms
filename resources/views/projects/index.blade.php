
@extends('layouts.admin')

@section('content')
@section('title')
Projects
@endsection
<section class="content">

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Projects</h3>
        <div class="card-tools">
            <a href="{{ route('projects.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Project</a>
        </div>
    </div>
    <hr/>
    <div class="card-body p-0">
        <table id="datatable" class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 1%">No</th>
                <th style="width: 20%">Project Name</th>
                <th style="width: 20%">Date</th>
                <th style="width:23%">Project Progress</th>   
                <th style="width: 8%" class="text-center">Status</th>
                <th style="width: 20%" class="text-center">Action</th>
            </tr>
           </thead>

        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>#</td>
                <td>{{$project->name}}</td>
                <td>
                    <ul class="list-inline">
                        <li>Start date: {{$project->start_date}}</li>
                        <li>End date: {{$project->end_date}}</li>
                    </ul>
                </td>

                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                        <small>10% Complete</small>
                        </div>
                </td>

                <td class="project-state">
                    <span class="badge badge-primary">Ongoing</span>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="/projects/{{$project->id}}/show">
                        <i class="fas fa-folder"></i>
                        View
                    </a>

                    <a href="/projects/{{$project->id}}/edit" class="btn btn-info btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>

                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash"> </i>
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
    
</div>
</section>
@endsection
