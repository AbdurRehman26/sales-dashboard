@extends('layouts.main_layout')@section('body-section')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> Product Details</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            
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
                                <h5 class="card-header"> </h5>
                                <div class="card-body">
                                         <div class="slider_box">
                                            <!-- slide & description -->
                                            
                                            <div class="silder_con">
                                              @if(!empty($product_images))
                                              @foreach($product_images as $product_image)
                                                <div class="silder_panel">
                                                  <a href="#" class="silder_panel_item">
                                                    <img src="/uploads/products/{{$product_image->product_image}}">
                                                  </a>
                                               
                                                </div>
                                              @endforeach  
                                            
                                             @endif
                                             
                                            </div>
                                            <!-- contorl nav (created by JS)-->
                                            <div class="silder_nav_mask"></div>
                                            <div class="silder_nav"></div>
                                          </div>

                                             <br>
                                          <div class="card-body " style="padding-left:100px">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <h1  style="float:left"><strong>{{$product->name}}</strong></h1> 
                                              </div>
                                              <div class="col-md-12">

                                                <h6 style="float:left;font-family: none;"><strong>Price : </strong></h6><h6 style="float:left;font-family: sans-serif;"> &nbsp;${{$product->price}}</h6>
                                              </div>
                                              <div class="col-md-12">
                                                  <h6 style="float:left;font-family: none;"><strong>Description : </strong> </h6> &nbsp;
                                                  <p style="float:left;">&nbsp;&nbsp;{{$product->description}}</p>
                                              </div>
                                            

                                            </div>
                                   
                                          </div>
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
@section('javascript')

@stop    