@extends('layouts.admin')
@section('content')
@section('title')
Roles
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
            <h2>Roles</h2>          
        </div>
        
        <div class="card-body">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Role</th>                    
                </tr>
                </thead>
    
            <tbody>
               
                @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>          
            @endforeach
            </tr>
            </tbody>
        
            </table>
          
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection