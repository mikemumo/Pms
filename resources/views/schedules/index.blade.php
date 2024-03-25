@extends('layouts.admin')
@section('content')
@section('title')
Schedule
@endsection
<section class="container">
    <!--begin::Card-->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Schedule</h1>
            <div class="card-tools">
                
            </div>
        </div>
        
        <div class="card-body p-0">
            <table id="datatable" class="table table-striped projects">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Project</th>
                        <th>Task Schedule</th>  
                        <th>Action</th> 
                    </tr>
                </thead>
    
                <tbody>
                    @php
                        $i = ($projects->currentPage() - 1) * $projects->perPage() + 1;
                    @endphp
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <div>
                                    <strong>{{ $project->name }}</strong>
                                </div>
                                <div>
                                    <ul class="list-inline">
                                        <li>Start Date: {{ $project->start_date }}</li>
                                        <li>End Date: {{ $project->end_date }}</li>
                                    </ul>
                                </div>
                            </td>
                            <td>{{ $project->tasks()->count() }}</td> <!-- Count of tasks in the project -->
                            <td><a class="btn btn-secondary btn-sm" href="{{ route('schedules.show', $project->id) }}">
                                <i class="bi bi-arrow-up-right"></i>
                                Detail
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination justify-content-center mt-3">
                {{ $projects->links() }} <!-- Pagination links -->
            </div>
        </div>
        
    </div>
    <!--end::Card-->
</section>
@endsection
