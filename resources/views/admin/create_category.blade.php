@extends('layouts.main_layout')@section('body-section')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Messages </h2>
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
                                <h5 class="card-header">Create Message </h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="/admin/fcm" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Message Heading</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="heading" placeholder="Message Heading"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                          
                                        </div>
                                     <br><br>
                                     
                                        <div class="form-row"> 
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"> 
                                                <label for="validationCustom05">Message Content</label>
                                                <textarea rows="4" cols="50"  class="form-control" id="validationCustom05" placeholder="type content here ..." name="content" > </textarea >
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