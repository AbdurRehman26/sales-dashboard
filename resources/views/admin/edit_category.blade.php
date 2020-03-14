@extends('layouts.main_layout')@section('body-section')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Category </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">

                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">User Management</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add User</li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Category </h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="/admin/update-category/{{$category->id}}" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Category Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Category Name" value="{{$category->name}}"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                          
                                        </div>
                                     
                                        <div class="form-row"> 
                                           
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2"> 
                                                <label for="validationCustom05">Category Image</label>
                                                <input type="file" class="form-control" id="validationCustom05" placeholder="" name="icon" >
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2"> 
                                                <div class="user-avatar text-center d-block">
                                                    <img src="/uploads/category/{{$category->icon}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                       
                                        <br>
                                        <div class="form-row">      
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
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
    </div>

@stop