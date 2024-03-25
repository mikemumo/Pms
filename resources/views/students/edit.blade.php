
@extends('layouts.admin')

@section('content')
@section('title')
Student Update
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
    <form method ="post" action="{{route('students.update', [$student->id])}}">
        @csrf
        @method('PUT')

         
        <div class="card-header pt-4">
            <h2 >
                <span class="fw-bolder text-dark fs-3 me-2">Update Student Data</span>
                <span class="text-muted mt-2 fw-bold fs-6"> - Form to update Student data</span>
            </h2>
                <div class="card-tools">
                    <a href="{{ route('students.index') }}" class="btn btn-light mx-5"></i> Back</a>
                 
                    <button type="submit" value="Submit" class="btn btn-success">Update</button>
                </div>    
        </div>
            <br>
                <div class="d-flex">
                    <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Student Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="eg John Doe"   value="{{$student->name}}" >
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Course</label>
                                    <input type="text" class="form-control " name="course" placeholder="Course"  value="{{$student->course}}" ></input>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5" >
                                <div class="mb-10">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control " placeholder="eg 0739277464"  value="{{$student->phone}}" >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control " placeholder="eg john@gmail.com"  value="{{$student->email}}"  >
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
