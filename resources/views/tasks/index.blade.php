@extends('layouts.admin')
@section('content')
@section('title')
Tasks
@endsection
<section class="container">
    <style>
        h2{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
    <!--begin::Card-->
    <div class="card">
        <div class="card-header pt-4">
            <h2 >Tasks</h2>
            @if(Auth::user()->role_id==1)
            <div class="card-tools">
                <a href="{{ route('tasks.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Task</a>
            </div>
            @endif
        </div>
        
        <div class="card-body ">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th style="width: 20%">Date</th>
                    <th style="width: 30%">Task</th>   
                    <th style="width: 20%" class="">Status</th>
                    <th>Review</th>
                    <th style=" ">Action</th>
                </tr>
                </thead>
    
            <tbody>
                @php
                $i = ($tasks->currentPage() - 1) * $tasks->perPage() + 1;
              @endphp
            
                @foreach($tasks as $task)
            <tr>
                <td>{{$i++ }}</td>
                <td>
                    <ul class="list-inline">
                        <li>Start date: {{$task->start_date}}</li>
                        <li>End date: {{$task->end_date}}</li>
                    </ul>
                </td>
                <td>{{$task->name}}</td>
                <td class="task-state">
                    @if($task->t_status ==1)
                    <span class="badge badge-pill badge-success"><i class="bi bi-check2-all"></i>Completed</span>
                    @elseif($task->t_status ==2)
                    <span class="badge badge-pill  badge-danger"><i class="bi bi-x"></i>Incomplete</span>
                    @else
                    <span class="badge badge-pill badge-warning"><i class="bi bi-hourglass"></i>Pending</span>
                    @endif
                </td>
                <td>{{$task->review}}</td>
                <td class="project-actions text-right">
                    <a class="btn btn-secondary btn-sm" href="/tasks/{{$task->id}}">
                        <i class="bi bi-arrow-up-right"></i>
                        Update
                    </a><br>
                    <span>Task Report: </span> <br>
                                <a href="{{$task->attachment}}" rel="tooltip" title="Detail" target="_blank" class="badge badge-success" >
                                <i class="bi bi-link text-white"></i> Link </a>
                </td>

                @endforeach
            </tr>
            </tbody>
            </table>
            <div class="pagination justify-content-center mt-3">
                {{ $tasks->links() }}
            </div>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection