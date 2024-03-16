@extends('layouts.admin')
@section('content')
@section('title')
Review
@endsection
<section class="container">
    <!--begin::Card-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Reviw Task</h3>    
        </div>
        
        <div class="card-body p-0">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th style="width: 20%">Date</th>
                    <th style="width: 30%">Task</th>        
                    <th style="width: 20%" class="">Status</th>
                    <th style=" ">Action</th>
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
                    <span class="badge badge-info">Pending</span>
                </td>
                
                <td><a class="btn btn-primary btn-sm" href="{{ route('reviews.show', ['id' => $task->id]) }}">
                    <i class="bi bi-arrow-up-right"></i>
                    Detail
                </a></td>

                @endforeach
            </tr>
            </tbody>
            </table>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection