@extends('layouts.admin')
@section('content')
@section('title')
Task View
@endsection
<section class="container">
<div class="card">
    <!--begin::Card Body-->
    <form action="#" method="post">
       @csrf
        <!--begin::Section-->
        <div class="pb-10">
                    <div class="card-header">
                        <h3 class="card-title">Submit Task Report</h3>
                            
                        
                            <div class="card-tools">
                                <a href="{{route('tasks.index')}}" class="btn btn-light mx-5">Back</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        
                    </div>
                    <div class="d-flex mb-5 mt-10">
                        <div class="col-sm-6 px-5">
                            <h3>
                                @if($task->project)
                                <span class="card-label fw-bolder text-dark fs-2">Project :{{$task->project->name}} </span>
                                @else
                                <span class="text-muted mt-2 fw-bold fs-6">
                                      <span class="text-xs font-weight-bold ">Project Not assigned</span>
                                </span>
                                @endif
                            </h3>
                            <div class=" ">
                                
                                <span class="card-label fs-6"><b>Description :  </b><br></span>
                            </div>
                        </div>
                        <div class="col-sm px-5">
                            
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>Start Project : </b>16-11-2023</span>
                            </div>
                            <div class="mb-3">
                                <span class="card-label fs-6"><b>End Project : </b>30-11-2023 </span>
                            </div>
                        </div>
                        
                    </div>
                    <hr class="mb-10">

                    <div class="d-flex">
                            <div class="col-sm-6 px-5">
                                <div class="mb-10">
                            
                                                                   
                                </div>
                            </div>
                            
                            <div class="col-sm-6 px-5">
                                <div class="mb-5">
                                <span class="text-xs font-weight-bold text-info"></span>
                                
                                </div>
                                <div class="mb-10">
                                    <label for="" class="form-label">Task Report</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                            <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name="task_attachment" class="form-control" placeholder="Attachment Task" required="">
                                        
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="card-title align-items-start flex-column ">
                                        <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Task : </b><br>{{$task->name}}</span>
                    
                                    </div>
                                    <div class="mb-3">
                                        <span class="card-label fs-6"><b>Description : </b><br>{{$task->description}}</span>
                                    </div>     
                                    <div class="mb-3">
                                        <span class="card-label fs-6"><b>Start Date : </b>{{$task->start_date}}</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="card-label fs-6"><b>End Date : </b> </span>
                                    </div>                               
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!--end::Block-->
        </div>
        <!--end::Section-->
        <!--begin::Section-->
    </form>
        <!--end::Section-->
    </div>
    <!--end::Card Body-->
</div>
</div>
@endsection