@extends('layouts.main_layout')@section('body-section')
 
  <div class="dashboard-wrapper">
            <div class="influence-profile">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">User Profile </h3>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin/dashboard" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item " ><a href="/admin/users">Manage Users</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                    <img src="/uploads/user/images/{{$user->user_photo}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                    <h2 class="font-24 mb-0">{{$user->first_name}} {{$user->last_name}}</h2>
                                        @if( $user->user_type == 0 )
                                        <p>User</p>
                                        @elseif($user->user_type == 1)
                                        <p>Merchant</p>

                                        @endif
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{$user->email}}</li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>{{$user->mobile_number}}</li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    {{-- <h3 class="font-16">Rating</h3>
                                    <h1 class="mb-0">4.8</h1> --}}
                                    <div class="rating-star">
                                     
                                    </div>
                                </div>
                               
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    
            
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">Details</a>
                                    </li>
                                    @if($user->user_type == 1)
                                     <li class="nav-item">
                                        <a class="nav-link " id="products-review-tab" data-toggle="pill" href="#products-review" role="tab" aria-controls="products-review" aria-selected="false">Products</a>
                                    </li>
                                    @endif
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                   
                                   
                                    <div class="tab-pane fade show active" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                        <div class="card">
                                            <h5 class="card-header">Complete Details</h5>
                                            <div class="card-body">
                                                <div class="review-block">
                                                   
                                                    {{-- <div class="rating-star mb-4">
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">First Name</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->first_name}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Last Name</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->last_name}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Email</span>
                                                        </div>
                                                          <div class="col-md-5">
                                                            <span class="text-dark font-weight-bold">{{$user->email}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Phone Number</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->mobile_number}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Name</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->company_name}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Resale License Number</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->company_resale_license_number}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Email</span>
                                                        </div>
                                                          <div class="col-md-5">
                                                            <span class="text-dark font-weight-bold">{{$user->company_email}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Number</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->company_number}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Address</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->company_address}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Extra Info</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">{{$user->more}} </span>
                                                        </div>
                                                        
                                                    </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="text-dark font-weight-bold">Company Logo</span>
                                                        </div>
                                                          <div class="col-md-4">
                                                            {{-- <span class="text-dark font-weight-bold">{{$user->more}} </span> --}}
                                                             <div class="user-avatar text-center d-block">
                                                                <img src="/uploads/company/images/{{$user->company_logo}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          
                                          
                                            
                                        </div>
                                       
                                    </div>

                                    <div class="tab-pane fade show active" id="products-review" role="tabpanel" aria-labelledby="products-review-tab">
                                        <div class="card">
                                            <h5 class="card-header">Merchant Products</h5>
                                             
                                            <div class="card-body">
                                                <div class="row">
                                                        <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 m-b-30">
                                                            <a href="/admin/add_product/{{$user->id}}" class="btn btn-primary btn-lg float-right" id='trigger'><i class="fa fa-plus"></i> Add Product</a>
                                                            
                                                        </div>
                                                        
                                             </div>
                                                <div class="review-block">
                                     
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          @foreach($products as $product)
                                                <tr>
                                                    @foreach($product_images as $product_image)
                                                        @if($product->id == $product_image->product_id)

                                                            <td><img alt="Claire Connors" src="/uploads/products/{{ $product_image->product_image }}" class="avatar mr-3"></td>
                                                            @break;
                                                        @endif  
                                                    @endforeach
                                                <td>{{ $product->name }}</td>
                            
                                                  <td><div class="dropdown">
                                                    <a class="" href="#" role="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="/admin/edit-product/{{ $product->id }}">Edit</a>
                                                    <a class="dropdown-item" href="/admin/product_details/{{ $product->id }}">Details</a>
                                                  {{-- <a class="dropdown-item" href="/admin/delete-category/{{ $product->id }}">Delete</a> --}}
                                                        {{-- <a class="dropdown-item" href="#">Share</a> --}}
                                                    </div>
                                                </div></td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                             
                                                  
                                                </div>
                                            </div>
                                          
                                          
                                            
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end content -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        @stop