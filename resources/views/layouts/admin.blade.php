<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Flatpickr-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-window-sidebar"></i> <b>Student Project Management System</b></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    
                </li>
               
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">

                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <p>
                            <i class="nav-icon fas fa-power-off"></i>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="\img\Image.jpeg" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">SPMS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                

                <!-- Sidebar Menu -->
                
                <nav class="mt-2">
                    
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @if(Auth::user()->role_id==1) <!--Supervisor-->
                        <li class="py-1">
                            <span class="opacity-50">Planning</span>
                        </li>
                        
                        <li class="menu-item py-1" >
                            <a href="{{route('dashboards.index')}}" class="nav-link">
                                <span class="menu-icon">
                                <i class="nav-icon fas fa-window-maximize"></i>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
            
                        <li class="menu-item py-1">
                            <a href="{{route('projects.index')}}" class="nav-link">
                                <span class="menu-icon">
                                <i class="nav-icon fas fa-briefcase"></i>
                                </span>
                                <span class="menu-title">Projects</span>
                            </a>
                        </li>
            
                        <li class="menu-item py-1">
                            <a href="{{route('students.index')}}" class="nav-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-plus"></i>
                                </span>
                            <span class="menu-title">Student</span>
                            </a>
                        </li>
            
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="py-1">
                            <span class="opacity-50">Progress</span>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('schedules.index')}}" class="nav-link">
                                <span class="menu-icon">
                                <i class="fas fa-clipboard-list"></i>
                                </span>
                                <span class="menu-title">Schedule</span>
                            </a>
                        </li>
                        <li class="menu-item py-1">
                            <a href="{{route('tasks.index')}}" class="nav-link">
                                <span class="menu-icon">
                                    <i class="nav-icon fas fa-list"></i>
                                </span>
                                <span class="menu-title">Tasks</span>
                            </a>
                        </li>

                        <li class="menu-item py-1">
                            <a href="{{route('reviews.index')}}" class="nav-link">
                                <span class="menu-icon">
                                <i class="fas fa-eye"></i>
                                </span>
                            <span class="menu-title">Review</span>
                            </a>
                        </li>
                    </ul>
                        
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="py-1">
                            <span class="opacity-50">Reports</span>
                        </li>
                        <li class="menu-item py-1">
                            <a href="{{route('projectsummaries.index')}}" class="nav-link">
                                <span class="menu-item">
                                <i class="bi bi-collection"></i>
                                </span>
                            <span class="menu-title">Project Summary</span>
                            </a>
                        </li>
                        <li class="menu-item py-1">
                            <a href="{{route('taskstatus.index')}}" class="nav-link">
                                <span class="menu-item">
                                <i class="bi bi-collection"></i>
                                </span>
                            <span class="menu-title">Task Status</span>
                            </a>
                        </li>
                    </ul> 
                    
                    
            @elseif(Auth::user()->role_id==2) <!--Student-->
            <li class="py-1">
                <span class="opacity-50">Planning</span>
            </li>
            <li class="menu-item py-1" >
                <a href="{{route('dashboards.index')}}" class="nav-link">
                    <span class="menu-icon">
                    <i class="nav-icon fas fa-window-maximize"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="menu-item py-1">
                <a href="{{route('projects.index')}}" class="nav-link">
                    <span class="menu-icon">
                    <i class="nav-icon fas fa-briefcase"></i>
                    </span>
                    <span class="menu-title">Projects</span>
                </a>
            </li>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="py-1">
                    <span class="opacity-50">Progress</span>
                </li>
            <li class="menu-item">
                <a href="{{route('schedules.index')}}" class="nav-link">
                    <span class="menu-icon">
                    <i class="fas fa-clipboard-list"></i>
                    </span>
                    <span class="menu-title">Schedule</span>
                </a>
            </li>

            <li class="menu-item py-1">
                <a href="{{route('tasks.index')}}" class="nav-link">
                    <span class="menu-icon">
                        <i class="nav-icon fas fa-list"></i>
                    </span>
                    <span class="menu-title">Tasks</span>
                </a>
            </li>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="py-1">
                    <span class="opacity-50">Reports</span>
                </li>
                <li class="menu-item py-1">
                    <a href="{{route('projectsummaries.index')}}" class="nav-link">
                        <span class="menu-item">
                        <i class="bi bi-collection"></i>
                        </span>
                    <span class="menu-title">Project Summary</span>
                    </a>
                </li>
                <li class="menu-item py-1">
                    <a href="{{route('taskstatus.index')}}" class="nav-link">
                        <span class="menu-item">
                        <i class="bi bi-collection"></i>
                        </span>
                    <span class="menu-title">Task Status</span>
                    </a>
                </li>
            </ul>   


            @elseif(Auth::user()->role_id==3) <!--Coordinator-->
            <li class="py-1">
                <span class="opacity-50">Planning</span>
            </li>
            <li class="menu-item py-1" >
                <a href="{{route('dashboards.index')}}" class="nav-link">
                    <span class="menu-icon">
                    <i class="nav-icon fas fa-window-maximize"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="py-1">
                    <span class="opacity-50">Reports</span>
                </li>
                <li class="menu-item py-1">
                    <a href="{{route('projectsummaries.index')}}" class="nav-link">
                        <span class="menu-item">
                        <i class="bi bi-collection"></i>
                        </span>
                    <span class="menu-title">Project Summary</span>
                    </a>
                </li>
                <li class="menu-item py-1">
                    <a href="{{route('taskstatus.index')}}" class="nav-link">
                        <span class="menu-item">
                        <i class="bi bi-collection"></i>
                        </span>
                    <span class="menu-title">Task Status</span>
                    </a>
                </li>
            </ul>   


            @endif
                    
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="py-1">
                            <span class="opacity-50">Out</span>
                        </li>
                        <li class="menu-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <span class="menu-icon">
                                <i class="nav-icon fas fa-power-off"></i>
                                </span>
                                <span class="menu-title font-weight-bold" >Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 399px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                   
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('pageName')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                    
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <!--alerts-->
                    @include('partials.alert')
                    <!--alerts-->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                
                @yield('content')
                
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->
    <!-- Date flatpickr-->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
<!--Datepick script-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#Startdate', {
                minDate: 'today',
                
            });
            flatpickr('#Enddate', {
                minDate: 'today',
                
            });
        });
    </script>



    </body>

</html>