@extends('layouts.admin')
@section('content')
@section('title')
Students
@endsection
<section class="container">
    <style>
        h2{
            
            font-size:38px;
            font-weight:bold;
            font-family:'Montserrat', sans-serif;
        }
        </style>
    <!--begin::Card-->
    <div class="card">
        <div class="card-header pt-4">
            <h2>Students</h2>
            <div class="card-tools">
                <a href="{{ route('students.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>  Add Student</a>
            </div>
        </div>
        
        <div class="card-body">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">No</th>
                    <th style="width: 20%">Name</th>
                    <th style="width: 20%">Course</th>   
                    <th style="width: 20%" class="">Email</th>
                    <th style="width: 20%" class="">Phone</th>
                    <th style="width: 12% ">Action</th>
                </tr>
                </thead>
    
            <tbody>
                @php
                $i = ($students->currentPage() - 1) * $students->perPage() + 1;
              @endphp
            
                @foreach($students as $student)
            <tr>
                <td>{{$i++}}</td>
                <td >
                    {{$student->name}}
                </td>
                <td>{{$student->course}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a class="btn btn-info btn-sm " href="/students/{{$student->id}}/edit" >
                        <i class="bi bi-pencil-square">
                            Edit
                        </i>
                    </a>
                    <a href="#" 
                    onclick="
                  var result = confirm('Are you sure you wish to delete this Student?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "class="btn btn-danger btn-sm" >

                        <i class="bi bi-backspace"></i>
                        Del
                    </a>
                    <form id="delete-form" action="{{ route('students.destroy',[$student->id]) }}" 
                        method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                      </form>
                </td>
                @endforeach
            </tr>
            </tbody>
            </table>
            <div class="pagination justify-content-center mt-3">
                {{ $students->links() }}
            </div>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection