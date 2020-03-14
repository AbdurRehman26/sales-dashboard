@extends('layouts.main_layout')@section('body-section')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add New Product </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            {{-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">

                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">User Management</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add User</li>

                                    </ol>
                                </nav>
                            </div> --}}
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
                                <h5 class="card-header">Add Product </h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" action="/admin/product_insert/{{$merchant_id}}" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Product Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Title"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Product Price</label>
                                                <input type="number" class="form-control" id="validationCustom01" name="price" placeholder="Price"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="form-row"> 
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"> 
                                                <label for="validationCustom05">Description</label>
                                                <textarea class="form-control" rows="4" cols="50" name="description"></textarea>
                                               
                                            </div>
                                        </div>
                                        <br>
                                       
                                        <br>
                                         <div class="form-horizontal" style="margin-left: -15px;">
                            <div class="form-group{{ $errors->has('fileUpload') ? ' is-invalid' : '' }}">
                                <label class="control-label col-md-12"><span style="color:red">*</span><strong>Product Images</strong><span style="color:red"> ( *Select image of maximum 2MB. )</span></label>
                             
                                <div class="col-md-12" style="margin-left: -15px;">
                                  <div class="row">
                                      <div class="col-md-8">
                                    <div id="coba" ></div>
                                    @if ($errors->has('fileUpload'))
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fileUpload') }}</strong>
                                      </span>
                                    @endif
                                  </div>
                                  </div>
                                </div>
                            </div>
                        </div>
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
@section('javascript')
<script>
	$("#coba").spartanMultiImagePicker({
        
				fieldName:        'fileUpload[]',
				maxCount:         4,
				rowHeight:        '200px',
				groupClassName:   'col-md-4 col-sm-4 col-xs-6 ',
				maxFileSize:      '2000000',
        
				placeholderImage: {
				    image: '/placeholder.png',
                	width : '100%'
				},
				// dropFileLabel : "Drop Here",
        
				onAddRow:       function(index){
					//console.log(index);
					console.log('add new row');
				},
				onRenderedPreview : function(index){
          
					//console.log(index);
					console.log('preview rendered');
          check++;
          console.log(check);
          $('#category_button').prop('disabled', false); 
				},
				onRemoveRow : function(index){
					//console.log(index);
          console.log('removed');
          check--;
          console.log(check);
          if(check == 0){
            $('#category_button').prop('disabled', true); 
          }
				},
				onExtensionErr : function(index, file){
					console.log(index, file,  'extension err');
					alert('Please only input png or jpg type file')
				},
				onSizeErr : function(index, file){
					console.log(index, file,  'file size too big');
                swal("Warning!", "Image Size Exceeded from 2MB!", "error");
				
				}
			});
</script>
@stop    