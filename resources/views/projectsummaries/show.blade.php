@extends('layouts.admin')

@section('content')
@section('title')
Project Report
@endsection

<style>
    h1 {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
    }
</style>

<div class="container">
    <!-- Project Summary -->
    <div class="row g-0 g-xl-5 g-xxl-8">
        <div class="col-xl-12">
            <div class="card card-stretch mb-5 mb-xxl-8">
                <!-- Header -->
                <div class="card-header border-0 pt-5">
                    <h1>
                        <span class="card-label fw-bolder text-dark fs-3">PROJECT SUMMARY</span>
                    </h1>
                    <div class="card-tools">
                        <ul class="nav nav-pills nav-pills-sm nav-light">
                            <li class="nav-item">
                                <button class="print-button btn btn-success" onclick="window.print()"><i class="bi bi-printer"></i>Print</button>
                            </li>
                        </ul>
                        <style>
                            @media print {
                                .print-button {
                                    display: none !important;
                                }
                            }
                        </style>
                    </div>
                </div><br>
                <!-- Body -->
                <div class=" d-flex px-10 mb-5">
                    <div class="col-sm px-5">
                        <h3 class="mb-3">
                            <span class="card-label fw-bolder text-dark fs-5"> {{ $project->name }}</span>
                        </h3>
                        <div class="mb-3">
                            <span class="card-label fs-6"><b>Start Date: {{ $project->start_date }}</b></span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6"><b>End Date: {{ $project->end_date }}</b></span>
                        </div>
                    </div>
                    <div class="col-sm px-5">
                    <h4 class="mb-3">
                            <span class="card-label fw-bolder text-dark fs-5">Project Progress </span>
                        </h4>
                        <div class="mb-3">
                            <span class="card-label fs-2 mb-5"> <b>{{ $project->progressPercentage }}%</b> </span>Completed
                        </div>
                        
                    </div>
                </div>
                
                <!-- Tasks and Students -->
                <div class="px-15">
                    <table id="datatable" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>Tasks</th>
                                <th>Status</th>
                                <th>Student</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1
                            @endphp
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    {{ $task->name }}
                                    <br><br>
                                    Due date: {{$task->end_date}}
                                </td>
                                <td class="task-state">
                                    @if($task->t_status ==1)
                                <span class="text-success"><i class="bi bi-check2-all"></i>Completed</span>
                                @else
                                <span class="text-danger"><i class="bi bi-x"></i>Incomplete</span>
                                @endif
                                </td>
                                <td>{{ $task->student->name }}</td>    
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
