@extends('layouts.admin')
@section('content')
<div class="container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Section-->
        <div class="card-body p-5 p-lg-10 pb-0">
            <!--begin::Heading-->
            <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                <h1 class="anchor fw-bolder">
                    <a href="#"></a>Schedule &nbsp
                    <span class="text-muted mt-2 fw-bold fs-6"> - Create and update data</span>
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
                            <th>Task Schedule</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
                
            </div>
            <!--end::Table-->
        </div>
        <!--end::Section-->
    </div>
    <!--end::Card-->
</div>
@endsection