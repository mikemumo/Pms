@extends('layouts.admin')
@section('content')
@section('title')
Project View
@endsection
<div class="container">
  <!--begin Row-->
  <div class ="row g-0 g-xl-5 gxxl-8">
    <div class="col-xl-8">
    <!--begin::Table Widget 1-->
      <div class="card card-stretch mb-5 mb-xxl-8">
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
              <span class="card-label fw-bolder text-dark fs-3">Project Details</span>
              <span class="text-muted mt-2 fw-bold fs-6"> </span>
          </h3>
          <div class="card-tools">
            <a href="{{ route('projects.index') }}" class="btn btn-light"></i> Back</a>
            
        </div> 

         
      </div>
      <div class="px-5 mb-3 pt-3">
        <span class="card-label fs-6"><b>Project Title : </b><br>{{$project->name}}</span>
      </div>
      <div class="mb-3 pt-3 px-5">
          <span class="card-label fs-6"><b>Description : </b><br>{{$project->description}}</span>
      </div>
      
      <div class="d-flex px-10 mb-5">
          <div class="col-sm-6 px-5">

              <div class="mb-3">
                  <span class="card-label fs-6"><b>Start Date : </b>{{$project->start_date}}</span>
              </div>
              <div class="mb-3">
                  <span class="card-label fs-6"><b>End Date : </b>{{$project->end_date}} </span>
              </div>
              <div class="mb-3">
                  <span class="card-label fs-6"><b>Attachment : </b></span> 
                  <a href="https://help.sap.com/docs/SAP_S4HANA_ON-PREMISE/4dd8cb7b1c484b4b93af84d00f60fdb8/1ad4b65334e6b54ce10000000a174cb4.html" rel="tooltip" title="Detail" target="_blank" class="badge badge-success">
                  <i class="bi bi-link text-white"></i> Link </a>
              </div>
          </div>
          <div class="col-sm-6 px-5">
              <h3 class="card-title align-items-start flex-column mb-5">
                  <span class="card-label fw-bolder text-dark fs-5"></span>
              </h3>
              <div class="mb-3">
                  <span class="card-label fs-6"></span>
              </div>
              <div class="mb-3">
                  <span class="card-label fs-6"></span>
              </div>
              <div class="mb-3">
                  <span class="card-label fs-6"></span>
              </div>
          </div>
       </div>
      <!--end::Header-->
  </div>  
</div>


@endsection