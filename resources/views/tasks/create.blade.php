@extends('layouts.admin')
@section('content')
@section('title')
Task Create
@endsection
<section class="content">
    <div class="card">
     
        <form action="{{route('tasks.store')}}" method="post">
            @csrf
            <div class="card-header">
                
                <h2 class="card-title align-items-start flex-column">
                    <span class="fw-bolder text-dark fs-3 me-2">Create Task Data</span>
                    <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                </h2>
                <div class="card-tools">
                    <a href="{{ route('tasks.index') }}" class="btn btn-light mx-5"></i> Back</a>
                    <button type="submit" class="btn btn-success" Value="Submit">Save</button>
                </div>
            </div><br>
            
            <!--<div class="d-flex mb-10 mt-10">
                <div class="col-sm-6 px-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bolder text-dark fs-2"></span>
                       
                    </h3>
                    <div class=" ">
                        <span class="card-label fs-6"><b>Description : </b><br></span>
                    </div>
                </div>
                <div class="col-sm px-5">
                    
                    <div class="mb-3">
                        <span class="card-label fs-6"><b>Start Date : </b></span>
                    </div>
                    <div class="mb-3">
                        <span class="card-label fs-6"><b>End Date : </b> </span>
                    </div>
                    <div class="mb-3">
                        <span class="card-label fs-6"><b>Attachment : </b> </span> 
                        <a href="https://help.sap.com/docs/SAP_S4HANA_ON-PREMISE/4dd8cb7b1c484b4b93af84d00f60fdb8/1ad4b65334e6b54ce10000000a174cb4.html" rel="tooltip" title="Detail" target="_blank" class="badge badge-success">
                        <i class="bi bi-link text-white"></i> Link </a>
                    </div>
                </div>
                <div class="col-sm px-5">
                    
                </div>
            </div>-->
            <div class="d-flex">
                    <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Task Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Task Name"  required="" >
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Task Description</label>
                                    <textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description"  required="" ></textarea>
                                </div> <br>  

                                <div class="form-group">
                                    <label for="student_id">Select Student</label>
                                    <select name="student_id" class="form-control">
                                        <option>-- Select Student --</option>
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                
                            </div>
                    @if($projects == null)
                            <input   
                            class="form-control"
                            type="hidden"
                                    name="project_id"
                                    value="{{ $project_id }}"
                                     />
                            </div>
                            @endif

                            @if($projects != null)
                            <div class="col-sm-6 px-5" >
                                <div class="form-group">
                                <label for="project-content" >Select Project</label>
                                <select name="project_id" class="form-control">
                                    <option>-- Select Project --</option>
                                    @foreach($projects as $project)
                                        
                                        <option value="{{$project->id}}"> {{$project->name}} </option>
                                    @endforeach
                                </select>
                                @endif
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control flatpickr-input" placeholder="Pick a date" id="Startdate" required=""  >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control flatpickr-input" placeholder="Pick a date" id="Enddate" required=""  >
                                </div><br>
                               
                                <!--<div class="mb-10">
                                    <label for="" class="form-label">Attachment File (optional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                            <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                            </svg>
                                        </span>
                                    <input type="url" name="attachment" class="form-control" placeholder="Link Attachment">
                                    <input type="hidden" name="p_status" value="1">
                                </div><br>
                            </div>-->
                        
                        </div>
                    
                    </div>
            
                </div>
        </form>
         
    </div>
</section>

@endsection