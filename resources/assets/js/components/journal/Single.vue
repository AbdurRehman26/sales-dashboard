<template>
	<div>
		<a href="/customer/market" class="btn btn-info mb-5">Back to Listing</a>


				<router-link
					tag="a"
					class="btn btn-success mb-5 pull-right"
					:to="{ name : 'journal.create' , params : { id : $route.params.id }}"
					>Create
				</router-link>
			

		<div class="card">
			<h5 class="card-header">View Journal</h5>
			<div class="card-body">
				<center>
					<spinner v-if="loading"></spinner>
				</center>


				

				<div class="table-responsive">
					<table
						id="example"
						class="table table-striped table-bordered second"
						style="margin-top:30px;width:100%"
					>
						<thead>
							<tr>
								<th>Contact with</th>
								<th>Contact via</th>
								<th>Notes</th>
								<th>Contacted at</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="item in items">
								<td>{{ item.market_name }}</td>
								<td>{{ item.market_type_name }}</td>
								<td>{{ item.market_owner }}</td>
								<td>
									<select
										v-model="item.color"
										class="form-control"
									>
										<option value="Yellow/Contacted"
											>Yellow/Contacted</option
										>
										<option
											value="Blue/Contacted & Sample left"
											>Blue/Contacted & Sample
											left</option
										>
										<option
											value="LimeGreen/Successfully Acquired"
											>LimeGreen/Successfully
											Acquired</option
										>
										<option
											value="DarkGreen/Successfully Acquired & Sample left"
											>DarkGreen/Successfully Acquired &
											Sample left</option
										>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import Resource from "@/api/resource";
const journalResource = new Resource("api/journal");

export default {
	components: {},
	/*
        |--------------------------------------------------------------------------
        | Component > props
        |--------------------------------------------------------------------------
        */
	props: {}, // End of Component > props
	/*
        |--------------------------------------------------------------------------
        | Component > data
        |--------------------------------------------------------------------------
        */
	data() {
		return {
			items: [],
			showCreate: false,
			loading: false,
		};
	}, // End of Component > data
	/*
        |--------------------------------------------------------------------------
        | Component > computed
        |--------------------------------------------------------------------------
        */
	computed: {}, // End of Component > computed
	/*
        |--------------------------------------------------------------------------
        | Component > methods
        |--------------------------------------------------------------------------
        */
	methods: {
		async handleUpdate() {
			const response = await journalResource.update(
				this.item.id,
				this.item
			);
			this.$router.push("/customer/market");
		},

		async getData() {
			this.items = [];

			const response = await journalResource.list({
				market_id: this.$route.params.id,
			});

			this.items = response.data;

			this.isLoading = false;
		},
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {
		this.getData();
	}, // End of Component > mounted
	watch: {},
}; // End of export default
</script>
