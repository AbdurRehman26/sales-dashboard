<template>
	<div>
		<side-bar></side-bar>

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

					<router-view></router-view>
				</div>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
import SideBar from "@/components/navbar/SideBar.vue";

export default {
	components: {
		SideBar
	}
};
</script>
