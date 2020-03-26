@extends('layouts.main_layout')
@section('body-section')

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

                        <div class="offset-xl-0 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-b-30">
                     

                        <div class="offset-xl-0 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-b-30">

                            <form method="POST" action="{{ url("admin/import") }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="control-label">CSV file to import</label>
                                
                                <input id="file" type="file" class="form-control" name="file" required>

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                             
                            <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

                            </form>

                        </div>
                        </div>
                        


                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-b-15">
                     

                            @if(!empty($users))
							<form method="POST" action="{{ url("market/assign") }}" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
							    <label for="file" class="control-label">Select User</label>
							    
							    <select class="form-control" name="user_id" required>
                                    
                                    @foreach($users as $user)
                                    
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    
                                    @endforeach

                                </select>

							    
							</div>
							 
							<p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

							</form>
                            @endif


                        </div>
                        
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
                                                    <th>Market Owner</th>
                                                    <th>Owner Email</th>
                                                    <th>Owner Phone</th>
                                                    <th>Owner Address</th>
                                                    <th>Status</th>
                                                    <th>Notes</th>
                                                    <th>Color</th>
                                                    <th>other</th>
                                                    <th>Create Date</th>
													<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@if(!empty($markets))
                                                @foreach($markets as $market)
                                                <tr>
                                            
                                                <td>{{ $market->market_name }}</td>
                                                <td>{{ $market->market_type }}</td>
                                                <td>{{ $market->market_owner }}</td>
                                                <td>{{ $market->owner_email }}</td>
                                                <td>{{ $market->owner_phone }}</td>
                                                <td>{{ $market->owner_address }}</td>
                                                <td>{{ $market->status }}</td>
                                                <td>{{ $market->notes }}</td>
                                                <td>{{ $market->color }}</td>
                                                <td>{{ $market->other }}</td>
                                                <td>{{ date('F jS, Y h:i:s', strtotime($market->created_at)) }}</td>

                                                </tr>
                                                @endforeach
                                                @endif
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
@stop  