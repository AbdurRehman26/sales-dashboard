<template>
	<div>
		<div style="margin-top: 75px;" class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Reset Password</div>

						<div class="panel-body">
							<form class="form-horizontal" method="POST">
								<input type="hidden" name="token" />

								<div class="form-group">
									<label
										for="password"
										class="col-md-4 control-label"
										>Password</label
									>

									<div class="col-md-6">
										<input
											v-model="user.password"
											id="password"
											type="password"
											class="form-control"
											name="password"
											required
										/>
									</div>
								</div>

								<div class="form-group">
									<label
										for="password-confirm"
										class="col-md-4 control-label"
										>Confirm Password</label
									>
									<div class="col-md-6">
										<input
											v-model="user.password_confirmation"
											id="password-confirm"
											type="password"
											class="form-control"
											name="password_confirmation"
											required
										/>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button
											@click.prevent="handleUpdate"
											type="submit"
											class="btn btn-primary"
										>
											Reset Password
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { mapGetters } from "vuex";

import Resource from "@/api/resource";
const passwordResource = new Resource("user/change-password");
import { Message } from 'element-ui';

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
		return {};
	}, // End of Component > data
	/*
        |--------------------------------------------------------------------------
        | Component > computed
        |--------------------------------------------------------------------------
        */
	computed: {
		...mapGetters(["user"])
	}, // End of Component > computed
	/*
        |--------------------------------------------------------------------------
        | Component > methods
        |--------------------------------------------------------------------------
        */
	methods: {
		async handleUpdate() {

			this.loading = true;


			const response = await passwordResource.store(this.user);

			this.loading = false;
			

		    Message({
		      message: response.message,
		      type: 'success',
		      duration: 5 * 1000,
		    });

		    let self = this;

		    setTimeout(function(){

		    	self.$router.push('/customer/dashboard');


		    }, 1000);

		}

	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {}, // End of Component > mounted
	watch: {}
}; // End of export default
</script>