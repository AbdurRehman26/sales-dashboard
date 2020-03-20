@extends('layouts.main_layout')@section('body-section')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add New User </h2>
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
                                <h5 class="card-header">Add User </h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="/admin/create_user" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="First name"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Last name"  required>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <label for="validationCustom02">Mobile Number</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="mobile_number" placeholder="Mobile Number"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">    
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                <label for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="email" class="form-control" id="validationCustomUsername" placeholder="Email" name="email" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                <label for="validationCustomUsername">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" id="validationCustomUsername" placeholder="Password" name="password" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please Enter Password
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">Company Name</label>
                                                <input type="text" class="form-control" id="validationCustom03" name="company_name" placeholder="Company Name" >
                                                <div class="invalid-feedback">
                                                    Company Name
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">Company Resale License Number</label>
                                                <input type="text" class="form-control" id="validationCustom04" name="company_resale_license_number" placeholder="Company Resale License Number" >
                                                <div class="invalid-feedback">
                                                    Company Resale License Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">    
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Company Email</label>
                                                <input type="email" class="form-control" id="validationCustom05" placeholder="Company Email" name="company_email" >
                                                <div class="invalid-feedback">
                                                    Company Email
                                                </div>
                                            </div>
                                             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Company Number</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Company Number" name="company_number" >
                                                <div class="invalid-feedback">
                                                    Company Number
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Company Address</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Company Address" name="company_address" >
                                                <div class="invalid-feedback">
                                                    Company Address
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleFormControlTextarea1">More Info</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="more_info" rows="3"></textarea>
                                        </div>
                                        <div class="form-row"> 
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2"> 
                                                <label for="validationCustom05">Company Logo</label>
                                                <input type="file" class="form-control" id="validationCustom05" placeholder="Company Address" name="company_logo" >
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2"> 
                                                <label for="validationCustom05">User Image</label>
                                                <input type="file" class="form-control" id="validationCustom05" placeholder="Company Address" name="user_photo" >
                                            </div>
                                        </div>
                                        <br>
                                         <div class="form-row"> 
                                           <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="user_type" value="0" checked="" class="custom-control-input"><span class="custom-control-label">User</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="user_type" value="1" class="custom-control-input"><span class="custom-control-label">Merchant</span>
                                            </label>
                                        </div>
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