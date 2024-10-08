
@extends('layouts.admin')

@section('content')
@section('title')
Project Create
@endsection
<section class="content">


    
    <div class="card">
    <form method ="POST" action="{{route('projects.store')}}">
        @csrf
        @method('post')

         
        <div class="card-header">
            <h3 class="card-title">
                <span class="fw-bolder text-dark fs-3 me-2">Create Project Data</span>
                <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
            </h3>
                <div class="card-tools">
                    <a href="{{ route('projects.index') }}" class="btn btn-light mx-5"></i> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>    
        </div>
            <br>
                <div class="d-flex">
                    <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Project Name"  required="" >
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Project Description</label>
                                    <textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description"  required="" ></textarea>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5" >
                                <div class="mb-10">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control flatpickr-input" placeholder="Pick a date" id="Startdate" required=""  >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control flatpickr-input" placeholder="Pick a date" id="Enddate" required=""  >
                                </div><br>
                               
                                <br>
                            </div>
                        
                        </div>
                    
                    </div>
            
                </div>
            </div>
            
            
    </form>
   
    </div>
        
        
</div>


@endsection
