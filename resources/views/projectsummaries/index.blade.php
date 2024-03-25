@extends('layouts.admin')

@section('content')
@section('title')
Project Report
@endsection

<section class="container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Section-->
        <div class="card-body p-5 p-lg-10 pb-0">
            <!--begin::Heading-->
            <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                <h1 class="anchor fw-bolder">
                    <a href="#"></a>Report 
                </h1>
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
                            <th>Total Tasks</th>
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
                                        <li>{{$project->tasks()->count()}}</li>
                                    </ul>
                                </td>        
                                <td>
                                    <a href="" rel="tooltip" title="Detail" class="badge badge-success">
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
