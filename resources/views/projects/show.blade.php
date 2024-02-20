@extends('layouts.admin')
@section('content')

<div class="container">
    <!--begin::Row-->
    <div class="row g-0 g-xl-5 g-xxl-8">
        <div class="col-xl-8">
            <!--begin::Table Widget 1-->
            <div class="card card-stretch mb-5 mb-xxl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark fs-3">Project Details</span>
                        <span class="text-muted mt-2 fw-bold fs-6"> Note : Add service to this project data</span>
                    </h3>

                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                        <a href="#" class="badge badge-success btn-sm mb-0 mx-5"><i class="bi bi-pencil-square text-xl text-white"></i> Edit</a>
                        <a href="#" class="badge badge-danger btn-sm mb-0"><i class="bi bi-backspace text-white"></i> Delete</a>
                    </div>
                </div>
                <div class="px-10 mb-5">
                <hr> 
                <h3 class="card-title align-items-start flex-column px-5 pt-5">
                    <span class="card-label fw-bolder text-dark fs-2">Investment</span>
                    <span class="text-muted mt-2 fw-bold fs-6">
                                                                        <span rel="tooltip" title="detail" class="badge badge-light">Pending</span>
                                                                </span></h3>
                <div class="mb-3 pt-3 px-5">
                    <span class="card-label fs-6"><b>Description : </b><br>do an assignment for the work</span>
                </div>
                </div>
                <div class="d-flex px-10 mb-5">
                    <div class="col-sm-6 px-5">

                        <div class="mb-3">
                            <span class="card-label fs-6"><b>Priode : </b>Once</span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6"><b>Start Date : </b>01-02-2024</span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6"><b>End Date : </b>28-02-2024 </span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6"><b>Attachment : </b> </span> 
                            <a href="https://help.sap.com/docs/SAP_S4HANA_ON-PREMISE/4dd8cb7b1c484b4b93af84d00f60fdb8/1ad4b65334e6b54ce10000000a174cb4.html" rel="tooltip" title="Detail" target="_blank" class="badge badge-success">
                            <i class="bi bi-link text-white"></i> Link </a>
                        </div>
                    </div>
                    <div class="col-sm-6 px-5">
                        <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label fw-bolder text-dark fs-5">Customer Details</span>
                        </h3>
                        <div class="mb-3">
                            <span class="card-label fs-6">Michael - Africa nazarene</span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6">0711191480 - mutuamichael46@gmail.com</span>
                        </div>
                        <div class="mb-3">
                            <span class="card-label fs-6">1233</span>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="px-15">
                    <table id="datatable" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>Service</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                            </tbody>
                    </table>
                </div>
            </div>
            <!--end::Table Widget 1-->
        </div>
        <div class="col-xl-4">
            <!--begin::Engage Widget 5-->
            <div class="card mb-5 mb-xxl-10">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Wrapper-->
                    <form action="{{route('projects.show')}}" method="post">
                    <div class="row mb-5">
                        <div class="col-7 pl-4 align-items-center">
                        <h6 class="mb-0">Add Service</h6>
                            <span class="text-sm mb-0">Select service</span>
                        </div>
                        <div class="col-3 text-end">
                            <button class="badge btn-success btn-sm mb-0">Add Service</button>
                        </div>
                    </div>
                    <select name="id_service" id="date" class="form-select mb-10 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" data-select2-id="select2-data-date" tabindex="-1" aria-hidden="true">
                            <option disabled="" selected="" data-select2-id="select2-data-2-6o5k">Pilih</option>
                                                                                <option value="1001">Photography</option> 
                                                                                <option value="1002">Design Graphic</option> 
                                                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-1-y7sz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select mb-10" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-date-container" aria-controls="select2-date-container"><span class="select2-selection__rendered" id="select2-date-container" role="textbox" aria-readonly="true" title="Pilih">Pilih</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                    <input type="hidden" name="id_project" value="1003">

                    </form>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage Widget 5-->
        </div>
    </div>
    <!--end::Row-->
</div>


@endsection