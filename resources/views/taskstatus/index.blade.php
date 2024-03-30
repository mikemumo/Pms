@extends('layouts.admin')

@section('content')
@section('title')
Task Report
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
        <!--begin::Section-->
        <div class="card-body p-5 p-lg-10 pb-0">
            <!--begin::Heading-->
            <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                <h2>
                    Task Status Report 
                </h2>
            </div>
            <!--end::Heading-->
            <hr/>
            <!--begin::Table-->
            <div class="px-5">
                <table id="datatable" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                            <th>No</th>
                            <th>Project</th>
                            <th>Total Students</th>
                            <th>Task Progress</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                    @endphp
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li>{{ $project->name }}</li>
                                        <li>Date Finished : </li>
                                    </ul>
                                </td>
                                <td>
                                    
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li>{{$project->total_students}}</li>
                                    </ul>
                                   
                                </td>                        
                                <td>
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li>{{$project->tasks()->count()}} Total Tasks</li>
                                        <li>{{ $project->tasks->where('t_status', 1)->count() }} Tasks Completed</li>
                                        
                                </td>        
                                <td>
                                    <a href="{{route('taskstatus.show',$project->id)}}" class="badge badge-success">
                                        <i class="bi bi-arrow-up-right text-white"></i>Print Out
                                    </a>
                                </td>        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Section-->
    </div>
    <!--end::Card-->
</section>
@endsection
