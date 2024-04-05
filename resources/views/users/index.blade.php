@extends('layouts.admin')
@section('content')
@section('title')
Users
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
            <h2>Users</h2>    
                  
        </div>
        
        <div class="card-body">
            <table id="datatable" class="table table-striped projects">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>  
                    <th>Action</th>                  
                </tr>
                </thead>
    
            <tbody>
                @php
                $i = ($users->currentPage() - 1) * $users->perPage() + 1;
                @endphp
              @foreach($users as $user)
               
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id}}</td>
                <td>
                    <a class="btn btn-info btn-sm " href="/users/{{$user->id}}/edit" >
                        <i class="bi bi-pencil-square">
                            Edit
                        </i>
                    </a>
                    <a href="#" 
                    onclick="
                  var result = confirm('Are you sure you wish to delete this User?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $user->id }}').submit();
                      }
                          "class="btn btn-danger btn-sm" >

                        <i class="bi bi-backspace"></i>
                        Del
                    </a>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', [$user->id]) }}" 
                        method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                      </form>
                </td>
            @endforeach 
            </tr>
            </tbody>
            </table>
            <div class="pagination justify-content-center mt-3">
                {{ $users->links() }}
            </div>
        </div>
        
    </div>
    <!--end::Card-->
</div>

@endsection