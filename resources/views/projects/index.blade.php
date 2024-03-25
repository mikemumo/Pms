
@extends('layouts.admin')

@section('content')
@section('title')
Projects
@endsection
<section class="content">
    <style>
        h2{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
<div class="card">
    <div class="card-header pt-4">
        <h2>
            <span>Projects</span>
        </h2>
        @if(Auth::user()->role_id==1)
        <div class="card-tools">
            <a href="{{ route('projects.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Project</a>
        </div>
        @endif
    </div>
    
    <div class="card-body ">
        <table id="datatable" class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 1%">No</th>
                <th style="width: 20%">Project Name</th>
                <th style="width: 20%">Date</th>
                <th style="width:23%">Project Progress</th>   
                <th style="width: 8%" class="text-center">Status</th>
                <th style="width: 15%" class="text-center">Action</th>
            </tr>
           </thead>

        <tbody>
            @php
                $i = ($projects->currentPage() - 1) * $projects->perPage() + 1;
              @endphp
            @foreach($projects as $project)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$project->name}}</td>
                <td>
                    <ul class="list-inline">
                        <li>Start date: {{$project->start_date}}</li>
                        <li>End date: {{$project->end_date}}</li>
                    </ul>
                </td>

                <td class="project_progress">
                    <div class="progress progress-sm">
                        
                        <div class="progress-bar bg-green " role="progressbar" aria-valuenow="{{ $project->progressPercentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->progressPercentage }}%">
                        <small>{{ $project->progressPercentage }}% Complete</small>
                        </div>
                        
                    </div>   
                </td>

                <td class="project-state">
                    
                        @if ($project->p_status == 1)
                        <span class="badge badge-pill badge-primary">New</span>
                    @elseif ($project->p_status == 2)
                    <span class="badge badge-pill badge-info">Ongoing</span>
                    @else
                    <span class="badge badge-pill badge-success">Complete</span>
                    @endif
                    </span>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-secondary btn-sm" href="/projects/{{$project->id}}">
                        <i class="bi bi-arrow-up-right"></i>
                        Detail
                    </a>

                   <!--<a href="/projects/{{$project->id}}/edit" class="btn btn-info btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>-->

                    <!--<a href="#" 
                    onclick="
                  var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "class="btn btn-danger btn-sm" >

                        <i class="fas fa-trash"> </i>
                        Delete
                    </a>
                    <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                        method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                      </form>-->
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
        <div class="pagination justify-content-center mt-3">
            {{ $projects->links() }}
        </div>
    </div>
    
</div>
</section>
@endsection
