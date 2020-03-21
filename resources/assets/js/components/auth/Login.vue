<template>
	<div>
		<!-- ============================================================== -->
		<!-- login page  -->
		<!-- ============================================================== -->
		<div class="splash-container">
			<div class="card ">
				<div class="card-header text-center">
					<a href="/"><h1>PERLACK</h1></a
					><span class="splash-description"
						>Please enter your user information.</span
					>
				</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<input
								class="form-control form-control-lg"
								id="email"
								type="email"
								v-model="userData.email"
								placeholder="Email"
								autocomplete="off"
								name="email"
								value=""
								required
								autofocus
							/>
							<span class="help-block">
								<strong></strong>
							</span>
						</div>
						<div class="form-group">
							<input
								class="form-control form-control-lg"
								id="password"
								v-model="userData.password"
								type="password"
								placeholder="Password"
								name="password"
								required
							/>
							<span class="help-block">
								<strong>password</strong>
							</span>
						</div>
						<div class="form-group">
							<label class="custom-control custom-checkbox">
								<input
									class="custom-control-input"
									name="remember"
									type="checkbox"
								/><span class="custom-control-label"
									>Remember Me</span
								>
							</label>
						</div>

						<button
							class="btn btn-primary btn-lg btn-block"
							@click.prevent="handleLogin"
						>
							Sign in
						</button>
					</form>
				</div>
				<div class="card-footer bg-white p-0  ">
					<div class="card-footer-item card-footer-item-bordered">
						<a href="" class="footer-link">Signup</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
import { login, logout, getInfo } from "@/api/auth";

export default {
	components: {},
	/*
        |--------------------------------------------------------------------------
        | Component > props
        |--------------------------------------------------------------------------
        */
	props: {
		item: {}
	}, // End of Component > props
	/*
        |--------------------------------------------------------------------------
        | Component > data
        |--------------------------------------------------------------------------
        */
	data() {
		return {
			userData: {
				email: "",
				password: ""
			},
			loading: false,
		};
	}, // End of Component > data
	/*
        |--------------------------------------------------------------------------
        | Component > computed
        |--------------------------------------------------------------------------
        */
	computed: {
	}, // End of Component > computed
	/*
        |--------------------------------------------------------------------------
        | Component > methods
        |--------------------------------------------------------------------------
        */
	methods: {
		handleLogin() {
			this.loading = true;
			this.$store
				.dispatch("user/login", this.userData)
				.then(() => {		
					console.log(1231888888888)
					this.$router.push({ path: "/customer/dashboard" });
					this.loading = false;
				})
				.catch(() => {
					console.log(138884884)
					this.loading = false;
				});
		}
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {} // End of Component > mounted
}; // End of export default
</script>
