
@extends('layouts.admin')

@section('content')
@section('title')
Edit User
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
    <form method ="post" action="{{route('users.update', ['user'=>$user->id])}}">
        @csrf 
        @method('PUT')

         
        <div class="card-header pt-4">
            <h2 >
                <span class="fw-bolder text-dark fs-3 me-2">Update User Data</span>
            </h2>
                <div class="card-tools">
                    <a href="{{ route('users.index') }}" class="btn btn-light mx-5"></i> Back</a>
                 
                    <button type="submit" value="Submit" class="btn btn-success">Update</button>
                </div>    
        </div>
            <br>
                <div class="d-flex">
                    <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" readonly="true"   value="{{$user->name}}" >
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control " name="email"  readonly="true" value="{{$user->email}}" ></input>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5">
                                <div class="mb-10">
                                    <label for="role_id" class="form-label">Role</label>
                                    <select name="role_id" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        
                        </div><br>
                    
                    </div>
            
                </div>
            </div>
            
            
    </form>
   
    </div>
        
        
</div>


@endsection
