@extends('layouts.main_layout')@section('body-section')
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
                                                @foreach($categories as $category)
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
@stop  

@section('javascript')
<script>
    
    var switchStatus = false;
  function status(id,status){

    if ( status==0 ) {
        switchStatus = 1;
        alert(switchStatus);// To verify
        
            $.ajax({
        

            url: '/admin/user_status/' + id + '/' + switchStatus,
            type: 'GET',
                                                
            success: function (response) {

            //console.log(response);
            
            Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'User Activated Successfully!',
            showConfirmButton: false,
            timer: 1000
            });
                
            }
        });
    }
    else {
       switchStatus = 0;
       //alert(switchStatus);
       $.ajax({
        

            url: '/admin/user_status/' + id + '/' + switchStatus,
            type: 'GET',
                                                
            success: function (response) {

            //console.log(response);
            
            Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'User De-Activated Successfully!',
            showConfirmButton: false,
            timer: 1000
            });
                
            }
        });
    }
}

$(document).ready(function() {
   $('#example').DataTable( {
        	dom: '<"top"lBf>rt<"bottom"ip><"clear">',
			
			buttons: [

				{
					extend: 'copyHtml5',
					className: 'green',
					text: '<b class="fa fa-files-o">Copy</b>',
					titleAttr: 'Copy'
				},
				{
					extend: 'excelHtml5',
					className: 'green',
					text: '<b class="fa fa-file-excel-o">Excel</b>',
					titleAttr: 'Excel'
				},
				{
					extend: 'csvHtml5',
					className: 'green',
					text: '<b class="fa fa-file-text-o">CSV</b>',
					titleAttr: 'CSV'
				},
				{
					extend: 'pdfHtml5',
					className: 'green',
					orientation: 'landscape',
					exportOptions: {
						columns: ':visible'
					},
                	pageSize : 'LEGAL',
					text: '<i class="fa fa-file-pdf-o"> PDF</i>',
					titleAttr: 'PDF',
					customize: function (doc) {
						doc.pageMargins = [10,10,10,10];
						doc.defaultStyle.fontSize = 7;
						doc.styles.tableHeader.fontSize = 7;
						doc.styles.title.fontSize = 9;
						// Remove spaces around page title
						doc.content[0].text = doc.content[0].text.trim();
						// Create a footer
						doc['footer']=(function(page, pages) {
							return {
								columns: [
									'This is your left footer column',
									{
										// This is the right column
										alignment: 'right',
										text: ['page ', { text: page.toString() },  ' of ', { text: pages.toString() }]
									}
								],
								margin: [10, 0]
							}
						});
						// Styling the table: create style object
						var objLayout = {};
						// Horizontal line thickness
						objLayout['hLineWidth'] = function(i) { return .5; };
						// Vertikal line thickness
						objLayout['vLineWidth'] = function(i) { return .5; };
						// Horizontal line color
						objLayout['hLineColor'] = function(i) { return '#aaa'; };
						// Vertical line color
						objLayout['vLineColor'] = function(i) { return '#aaa'; };
						// Left padding of the cell
						objLayout['paddingLeft'] = function(i) { return 4; };
						// Right padding of the cell
						objLayout['paddingRight'] = function(i) { return 4; };
						// Inject the object in the document
						doc.content[1].layout = objLayout;
					}
				   
				}



			]
    } );
} );
</script> 
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 
 <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 
 <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
 
 <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
 








@stop      