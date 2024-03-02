
@extends('layouts.admin')

@section('content')
@section('title')
Project Edit
@endsection
<section class="content">

    <div class="card">
      
    <form method ="GET" action="{{ route('projects.update', $project->id)}}" >
        @csrf
        @method('get')
        <div class="card-header">
            <h3 class="card-title">Update Project Data</h3>
                <div class="card-tools">
                    <a href="{{ route('projects.index') }}" class="btn btn-light"></i> Back</a>
                    <button type="update" class="btn btn-primary">Update</button>
                </div>    
        </div>
            
                <div class="d-flex">
                        <div class="col-sm-6 px-5">
                            <div class="mb-10">
                                <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control" name="project_name" placeholder="Project Name" required="" value="{{$project->name}}">
                                </div><br>
                                
                                <div class="mb-10">
                                    <label class="form-label">Project Description</label>
                                    <input type="textarea" class="form-control h-150px" name="project_description" placeholder="Description" required="" value="{{$project->description}}"></input>
                                </div>
                            </div>
                        
                            <div class="col-sm-6 px-5" id="reservationdatetime" data-target-input="nearest">
                                <div class="mb-10">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="text" name="start_date" class="form-control flatpickr-input" placeholder="Pick a date" id="kt_datepicker_1" required="" readonly="true" value="{{$project->start_date}}" >
                                    
                                </div><br>
                                <div class="mb-10">
                                    <label for="" class="form-label">End Date</label>
                                    <input type="text" name="end_date" class="form-control flatpickr-input" placeholder="Pick a date" id="kt_datepicker_2" required="" readonly="readonly" value="{{$project->end_date}}">
                                </div><br>
                               
                                <div class="mb-10">
                                    <label for="" class="form-label">Attachment File</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                            <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                            </svg>
                                        </span>
                                    <input type="text" name="attachment" class="form-control" placeholder="Link Attachment" required="" value="{{$project->attachment}}">
                                    <input type="hidden" name="p_status" value="1">
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
