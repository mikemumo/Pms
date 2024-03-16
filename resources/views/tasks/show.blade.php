@extends('layouts.admin')
@section('content')
@section('title')
Task View
@endsection
<section class="container">
    <div class="card">
        <!-- Card Body -->
        <form action="#" method="post">
            @csrf
            <!-- Project Details -->
            <div class="pb-4 px-4">
                <div class="card-header">
                    <h3 class="card-title">Submit Task Report</h3>
                    <div class="card-tools">
                        <a href="{{route('tasks.index')}}" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h4>Project Details</h4>
                        @if($task->project)
                        <p><strong>Project:</strong> {{$task->project->name}}</p>
                        <p><strong>Description:</strong> {{$task->project->description}}</p>
                        <p><strong>Start Date:</strong> {{$task->project->start_date}}</p>
                        <p><strong>End Date:</strong> {{$task->project->end_date}}</p>
                        @else
                        <p><em>Project Not Assigned</em></p>
                        @endif
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4>Task Details</h4>
                        <p><strong>Task:</strong> {{$task->name}}</p>
                        <p><strong>Description:</strong> {{$task->description}}</p>
                        <p><strong>Start Date:</strong> {{$task->start_date}}</p>
                        <p><strong>End Date:</strong> {{$task->end_date}}</p>
                    </div>
                </div>
                <hr class="my-4">
                <!-- Task Report -->
                <div class="row">
                    <div class="col-md-6 offset-md-6 mb-4">
                        <h4>Task Submission</h4>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                    <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                </svg>
                            </span>
                            <input type="text" name="task_attachment" class="form-control" placeholder="Attach proof of work" required="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Section-->
    </div>
    <!--end::Card Body-->
    </div>
</section>
@endsection
