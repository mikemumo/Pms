@extends('layouts.admin')
@section('content')
@section('title')
Tasks
@endsection
<section class="container">
    <!--begin::Card-->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Tasks</h1>
            <div class="card-tools">
                <a href="{{ route('tasks.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Task</a>
            </div>
        </div>
        
        <div class="card-body p-0">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th style="width: 20%">Date</th>
                    <th style="width: 20%">Task</th>   
                    <th style="width: 20%" class="">Status</th>
                    <th style="width: 12% ">Action</th>
                </tr>
                </thead>
    
            <tbody>
            
                @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>
                    <ul class="list-inline">
                        <li>Start date: {{$task->start_date}}</li>
                        <li>End date: {{$task->end_date}}</li>
                    </ul>
                </td>
                <td>{{$task->name}}</td>
                <td class="task-state">
                    <span class="badge rounded-pill text-bg-info">review</span>
                </td>
                <td><td class="project-actions text-right">
                    <a class="btn btn-secondary btn-sm" href="/tasks/{{$task->id}}">
                        <i class="bi bi-arrow-up-right"></i>
                        Update
                    </a><br>
                    <span>Task Report: </span> <br>
                                <a href="https://www.brainkart.com/article/Exercise-5-1--Finite-Differences_38959/" rel="tooltip" title="Detail" target="_blank" class="badge badge-success">
                                <i class="bi bi-link text-white"></i> Link </a>
                </td>

                @endforeach
            </tr>
            </tbody>
            </table>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection