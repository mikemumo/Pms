@extends('layouts.admin')
@section('content')
@section('title')
Review
@endsection

<section class="container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card Body-->
        <div class="card-body p-5 pt-0 pb-0">
            <!--begin::Section-->
            <div class="pb-10">
                <div class="py-5">
                    
                        <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder text-dark fs-3 me-2">Review Task Report</span>
                                <span class="text-muted mt-2 fw-bold fs-6"> - Form Submit a review</span>
                            </h3>
                            
                        <form action="{{ route('tasks.submit_review', $task->id) }}" method="post">
                            @csrf
                            
                        </div>
                        
                        <hr class="mb-5">

                        <div class="d-flex">
                                <div class="col-sm-6 px-5">
                                <div class="mb-10">
                                    
                                        <span class="card-label fw-bolder text-dark fs-2"><b>Project  :</b><br> {{$task->project->name}}</span>
                                      
                                
                                    <div class="mb-5">
                                        <span class="card-label fs-6"><b>Description : </b><br>{{$task->project->description}}</span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <span class="card-label fs-6"><b>Start Project : </b>{{$task->project->start_date}}</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="card-label fs-6"><b>End Project : </b> {{$task->project->end_date}}</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="card-label fs-6"></span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="card-label fs-6"></span>
                                    </div>
                                </div>
                                <hr class="mb-5">
                                <div class="mb-10">
                                       
                                        
                                                           
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 px-5">
                                    <div class="mb-10">
                                        
                                            <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Task : </b><br>{{$task->name}}
                                           </span>
                                        
                                        <div class="mb-5">
                                            <span class="card-label fs-6"><b>Description : </b><br>{{$task->description}}</span>
                                        </div>     
                                        <div class="mb-3">
                                            <span class="card-label fs-6"><b>Start Date : </b>{{$task->start_date}}</span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="card-label fs-6"><b>End Date : </b> {{$task->end_date}}</span>
                                        </div>         
                
                                    </div>
                                    <hr class="mb-5">

                                    <div class="mb-10">
                                        <label for="" class="form-label fs-4"><b>Task Report</b></label>
                                                      
                                        <div class="input-group">
                                            <div class="mb-5">
                                                <span class="card-label fs-6"><b>Task Attachment : </b></span> 
                                                <a href="{{$task->attachment}}" rel="tooltip" title="Detail" target="_blank"class="badge badge-success">
                                                <i class="bi bi-link text-white"></i> Link </a>
                                            </div>                                                      
                                            <input type="hidden" name="id_task" value="">
                                            <input type="hidden" name="t_status" value="0">
                                            <input type="hidden" name="id_project" value="">
                                        </div>
                                        <hr>   

                                        <div class="mb-5">
                                            <label class="form-label">Feedback</label>
                                            <textarea type="textarea" class="form-control h-150px" name="review" placeholder="Feedback" required></textarea>
                                        </div>
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <button type="submit" class="btn btn-danger mx-5" value="decline" name="action">Decline</button>
                                        <button type="submit" class="btn btn-success" value="accept" name="action">Accept</button>
                                    </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Block-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            
            <!--end::Section-->
        </div>
        <!--end::Card Body-->
    </div>
    <!--end::Card-->
</div>


@endsection