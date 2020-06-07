<template>
	<div>
		<div class="dashboard-main-wrapper">
			<!-- ============================================================== -->
			<!-- navbar -->
			<!-- ============================================================== -->
			<div class="dashboard-header">
				<nav class="navbar navbar-expand-lg bg-white fixed-top">
					<a class="navbar-brand" href="index.html"
						><h1>Elysius Sales</h1></a
					>
					<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div
						class="collapse navbar-collapse "
						id="navbarSupportedContent"
					>
						<ul class="navbar-nav ml-auto navbar-right-top">
							<li class="nav-item dropdown nav-user">
								<a
									class="nav-link nav-user-img"
									href="#"
									id="navbarDropdownMenuLink2"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
									><img
										src="/images/avatar-1.jpg"
										alt=""
										class="user-avatar-md rounded-circle"
								/></a>
								<div
									class="dropdown-menu dropdown-menu-right nav-user-dropdown"
									aria-labelledby="navbarDropdownMenuLink2"
								>
									<div class="nav-user-info">
										<h5
											class="mb-0 text-white nav-user-name"
										>
											John Deo
										</h5>
										<span class="status"></span
										><span class="ml-2">Available</span>
									</div>
									<a class="dropdown-item" href="#"
										><i class="fas fa-user mr-2"></i
										>Account</a
									>
									<a
										class="dropdown-item"
										href="/customer/login"
										tag="a"
										onclick="event.preventDefault(); localStorage.setItem('user', null); localStorage.setItem('token', null)"
									>
										<i class="fas fa-power-off mr-2"></i>
										Logout
									</a>

									<form
										id="logout-form"
										method="POST"
										style="display: none;"
									></form>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- ============================================================== -->
			<!-- end navbar -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- left sidebar -->
			<!-- ============================================================== -->
			<div class="nav-left-sidebar sidebar-dark">
				<div class="menu-list">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="d-xl-none d-lg-none" href="#">Dashboard</a>
						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarNav"
							aria-controls="navbarNav"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav flex-column">
								<li class="nav-divider">
									Menu
								</li>

								<li class="nav-item">
									<a class="nav-link" href="/customer/market"
										><i class="fa fa-fw fa-user-circle"></i
										>View Markets</a
									>
								</li>

								<li class="nav-divider">
									Settings
								</li>
								<!-- <li class="nav-item">

									<router-link class="nav-link" tag="a" :to="{ name : 'change.password' }">
										
										Change Password

									</router-link>	

								</li> -->
								<li class="nav-item">
									<a
										class="nav-link"
										href="#"
										@click.prevent="logOut"
									>
										<i class="fas fa-power-off"></i> Logout
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- end left sidebar -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- wrapper  -->
			<!-- ============================================================== -->

			<!-- ============================================================== -->
			<!-- end wrapper  -->
			<!-- ============================================================== -->
		</div>
	</div>
</template>

<script>
export default {
	methods: {
		logOut() {
			this.$router.push("/customer/login");
		},
	},
};
</script>
