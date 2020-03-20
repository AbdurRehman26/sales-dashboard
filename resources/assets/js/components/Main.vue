<template>
	<div>
		<div class="dashboard-wrapper">
			<div class="">
				<div class="container-fluid dashboard-content">
					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
						>
							<div class="page-header">
								<h3 class="mb-2">Market Management</h3>
								<p class="pageheader-text">
									Special admin theme with Simple UI style for
									monitoring or administration web
									applications.
								</p>
								<div class="page-breadcrumb">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a
													href="#"
													class="breadcrumb-link"
													>Dashboard</a
												>
											</li>
											<li
												class="breadcrumb-item active"
												aria-current="page"
											>
												Market Management
											</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="row"></div>
					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
						>
							<div class="card">
								<div class="card-header">
									<h4 class="mb-0">
										All Markets
										<span class="float-right"></span>
									</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table
											id="example"
											class="table table-striped table-bordered second"
											style="width:100%"
										>
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
												<tr>
													<td>{{ "market_name" }}</td>
													<td>{{ "market_type" }}</td>
													<td>{{ "user_name" }}</td>
													<td>
														{{ "market_owner" }}
													</td>
													<td>{{ "owner_email" }}</td>
													<td>{{ "owner_phone" }}</td>
													<td>
														{{ "owner_address" }}
													</td>
													<td>{{ "status" }}</td>
													<td>{{ "notes" }}</td>
													<td>{{ "color" }}</td>
													<td>{{ "other" }}</td>
													<td>
														<a href="/admin/img/123"
															>{{ "img" }}
														</a>
													</td>
													<td>
														<a
															href="/admin/viewpdf/123"
															>{{ "pdf" }}
														</a>
													</td>
													<td>
														<a
															href="/admin/viewaudio/123"
															>{{ "audio" }}
														</a>
													</td>
													<td>{{ "123" }}</td>
													<td>{{ "123" }}</td>
													<td>
														<a
															class="btn btn-danger"
															href="/admin/delete-market/12312"
															>Delete</a
														>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
