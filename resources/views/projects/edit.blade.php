
@extends('layouts.admin')

@section('content')
@section('title')
Project Edit
@endsection
<section class="content">
    <style>
        h2{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
    <div class="card">
      
    <form method ="post" action="{{ route('projects.update', [$project->id])}}" >
        @csrf
        @method('PUT')
        <div class="card-header pt-4">
            <h2 >
                <span>Update Project Data</span>
                <span class="text-muted mt-2 fw-bold fs-6"> - Form to update Project data</span>
            </h2>
                <div class="card-tools">
                    <a href="{{ route('projects.index') }}" class="btn btn-light"></i> Back</a>
                    <button type="submit" value="Submit" class="btn btn-primary">Update</button>
                </div>    
        </div><br>
            
                <div class="d-flex">
                        <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Project Name" value="{{$project->name}}">
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Project Description</label>
                                    <input type="textarea" class="form-control h-150px" name="description" placeholder="Description"  value="{{$project->description}}"></input>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5" id="reservationdatetime" data-target-input="nearest">
                                <div class="mb-10">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="text" name="start_date" class="form-control flatpickr-input" placeholder="Pick a date" id="kt_datepicker_1" readonly="true" value="{{$project->start_date}}" >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">End Date</label>
                                    <input type="text" name="end_date" class="form-control flatpickr-input" placeholder="Pick a date" id="kt_datepicker_2"  readonly="readonly" value="{{$project->end_date}}">
                                </div><br>
                               
                                
                                </div><br>
                            </div>
                        </div>
                        
                    </div>
            
                </div>
            </div>
            
    </form>       
    </div>
        
        
</div>


@endsection
