<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
    <!--   <link rel="stylesheet" href="/vendor/datatables/css/buttons.bootstrap4.css">-->
     <link rel="stylesheet" href="{{URL::asset('js/lightgallery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('js/style.css')}}">



</head>
<body>

    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><h1>Elysius Sales</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Deo</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                                {{-- <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fas fa-power-off mr-2"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                                
<!--                             </li>
                               <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) === 'market' ? 'active' : null }}" href="/admin/market" ><i class="fa fa-fw fa-user-circle"></i>View Markets</a>
                                
                            </li>
 -->                           
                            <li class="nav-divider">
                                Settings
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fas fa-key"></i> Change Password </a>
                                
                            </li>
                            <li class="nav-item">
                                
                                 <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fas fa-power-off"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
 
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>


<div class="dashboard-wrapper">
            <div class="">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Market Management </h3>
                                <p class="pageheader-text">Special admin theme with Simple UI style for monitoring or administration web applications.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Market Management </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!--<div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 m-b-30">-->
                        <!--    <a href="/admin/add-category" class="btn btn-primary btn-lg float-right" id='trigger'><i class="fa fa-plus"></i> Add Category</a>-->
                            
                        <!--</div>-->
                        
                    </div>
                   @include('flash_messages')
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">All Markets <span class="float-right"></span>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Market Name</th>
                                                    <th>Market ype</th>
                                                    <th>User Name</th>
                                                    <th>Market Owner</th>
                                                    <th>Owner Email</th>
                                                    <th>Owner Phone</th>
                                                    <th>Owner Address</th>
                                                    <th>Status</th>
                                                    <th>Notes</th>
                                                    <th>Color</th>
                                                    <th>other</th>
                                                    <th>image</th>
                                                    <th>pdf</th>
                                                    <th>audio</th>
                                                    <th>Create Date</th>
                                                    <th>Update Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($markets as $category)
                                                <tr>
                                            
                                                <td>{{ $category->market_name }}</td>
                                                 <td>{{ $category->market_type }}</td>
                                                <td>{{ $category->user_name }}</td>
                                                <td>{{ $category->market_owner }}</td>
                                                  <td>{{ $category->owner_email }}</td>
                                                  <td>{{ $category->owner_phone }}</td>
                                                  <td>{{ $category->owner_address }}</td>
                                                  <td>{{ $category->status }}</td>
                                                  <td>{{ $category->notes }}</td>
                                                  <td>{{ $category->color }}</td>
                                                  <td>{{ $category->other }}</td>
                                                <td><a  href="/admin/img/{{ $category->img }}" >{{ $category->img }} </a> </td>
                                                <td><a href="/admin/viewpdf/{{$category->id}}">{{ $category->pdf }} </a> </td>
                                                <td><a href="/admin/viewaudio/{{$category->id}}">{{ $category->audio }} </a> </td>
                                                <td>{{ date('F jS, Y h:i:s', strtotime($category->created_at)) }}</td>
                                                  <td>{{ date('F jS, Y h:i:s', strtotime($category->updated_at)) }}</td>
                                                        <td><a class="btn btn-danger" href="/admin/delete-market/{{ $category->id }}">Delete</a></td>  
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end content -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>


</body>
</html>
