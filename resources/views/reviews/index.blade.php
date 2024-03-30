@extends('layouts.admin')
@section('content')
@section('title')
Review
@endsection
<section class="container">

    <style>
        h1{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
    <!--begin::Card-->
    <div class="card">
        <div class="card-header pt-4">
            <h1 >Review Task</h1>    
        </div>
        
        <div class="card-body ">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th style="width: 20%">Date</th>
                    <th style="width: 30%">Task</th>  
                    <th style="width: 15% ">Student</th>      
                    <th style="width: 10%" class="">Status</th>
                    <th style=" ">Action</th>
                </tr>
                </thead>
    
            <tbody>
                @php
                $i = ($tasks->currentPage() - 1) * $tasks->perPage() + 1;
              @endphp
                
                @foreach($tasks as $task)
            <tr>
                <td>{{$i++}}</td>
                <td>
                    <ul class="list-inline">
                        <li>Start date: {{$task->start_date}}</li>
                        <li>End date: {{$task->end_date}}</li>
                    </ul>
                </td>
                <td><strong>{{$task->name}}</strong>
                    <br>
                Submitted on: <br>
                {{$task->updated_at}}
                </td>
                <td>
                    @if ($task->student)
                    {{ $task->student->name }}
                @else
                    <span class="text-muted">Not Assigned</span>
                @endif
                </td>
                <td class="review-state">
                    @if(!empty($task->review))
                    <span class="badge badge-pill badge-success"><i class="bi bi-check"></i>Reviewed</span>
                    @else
                    <span class="badge badge-pill badge-info"><i class="bi bi-hourglass"></i>Pending Review</span>
                    @endif
                </td>
                
                <td><a class="btn btn-primary btn-sm" href="{{ route('reviews.show', ['id' => $task->id]) }}">
                    <i class="bi bi-arrow-up-right"></i>
                    Review
                </a></td>
                
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