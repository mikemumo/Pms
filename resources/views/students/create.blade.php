
@extends('layouts.admin')

@section('content')
@section('title')
Student Create
@endsection
<section class="content">


    
    <div class="card">
    <form method ="POST" action="{{route('students.store')}}">
        @csrf
        @method('post')

         
        <div class="card-header">
            <h3 class="card-title">
                <span class="fw-bolder text-dark fs-3 me-2">Create Student Data</span>
                <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
            </h3>
                <div class="card-tools">
                    <a href="{{ route('students.index') }}" class="btn btn-light mx-5"></i> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>    
        </div>
            <br>
                <div class="d-flex">
                    <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Student Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="eg John Doe"  required="" >
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Course</label>
                                    <input type="text" class="form-control " name="course" placeholder="Course"  required="" ></input>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5" >
                                <div class="mb-10">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control " placeholder="eg 0739277464"  required=""  >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control " placeholder="eg john@gmail.com"  required=""  >
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
