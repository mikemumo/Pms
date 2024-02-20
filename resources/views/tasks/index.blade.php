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
                
            </div>
        </div>
        
        <div class="card-body p-0">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Task</th>   
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
    
            <tbody>
                
    
            </tbody>
            </table>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection