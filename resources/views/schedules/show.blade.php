@extends('layouts.admin')
@section('content')
@section('title')
Schedule
@endsection

<section class="container">
    <style>
        h2{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
    <!--begin::Row-->
    <div class="row g-0 g-xl-5 g-xxl-8">
        <div class="col-xl-12">
            <!--begin::Table Widget 1-->
            <div class="card card-stretch mb-5 mb-xxl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-4">
                    <h2>
                        <span class="card-label fw-bolder text-dark fs-3">Schedule Details</span>
                    </h2>
                    <div class="card-tools">
                        <a href="{{ route('schedules.index') }}" class="btn btn-light"></i> Back</a> 
                    </div>
                </div><br>
                
                <div class="d-flex px-10 mb-5">
                    <div class="col-sm-6 px-5">
                        <h3 class="card-title  mb-0">
                            <span class="card-label  text-dark fs-5"><strong>{{$project->name}}</strong></span><br><br>
                            <span class="card-label fs-6"><b>Start Date: </b>{{$project->start_date}}<br><br></span>
                            <span class="card-label fs-6 "><b>End Date: </b>{{$project->end_date}}</span>
                        </h3>
                        
                    </div>
                </div>
                
                <!--end::Header-->
                <!--begin::Body-->
                <div class="px-15">
                    <table id="datatable" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>Task Schedule</th>
                                <th>Student</th>
                                @if(Auth::user()->role_id==1)
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $previousTasksCount = $tasks->perPage() * ($tasks->currentPage() - 1);
                            @endphp 
                            
                            @foreach($tasks as  $task)
                            <tr>
                                <td>{{ $loop->index + 1 + $previousTasksCount }}</td>
                                <td>
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li><b>{{$task->name}}</b></li>
                                        <li><br></li>
                                        <li>Start : {{$task->start_date}}</li>
                                        <li><b>End : {{$task->end_date}}</b></li>
                                    </ul>
                                </td>
                                <td>
                                    
                                    <ul style="list-style-type:none;padding-left:0px">
                                        @if($task->student)
                                        {{$task->student->name}}
                                        @else
                                        No student assigned
                                    </ul>
                                    @endif
                                </td>
                                @if(Auth::user()->role_id==1)
                                <td>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{$task->id}}').submit();" class="badge badge-danger">
                                        <i class="bi bi-backspace"></i>
                                        Delete
                                    </a>
                                    <form id="delete-form-{{$task->id}}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
            <!--end::Table Widget 1-->
        </div>
    </div>
    
    <!--end::Row-->
</section>
@endsection
