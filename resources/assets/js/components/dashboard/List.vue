<template>
	<div>
		<div class="row">

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<a v-if="!showCreate" class="btn btn-success mb-4" @click.prevent="showCreate = true">Create</a>
			<a v-if="showCreate" class="btn btn-info mb-4" @click.prevent="showCreate = false">Back List</a>

			</div>
			
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				
				<create-market v-if="showCreate"></create-market>


				<div v-if="!showCreate" class="card">
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
									<tr v-for="item in items">
										<td>{{ item.market_name }}</td>
										<td>{{ item.market_type_name }}</td>
										<td>{{ item.market_owner }}</td>
										<td>
											{{ item.market_owner }}
										</td>
										<td>{{ item.owner_email }}</td>
										<td>{{ item.owner_phone }}</td>
										<td>
											{{ item.owner_address }}
										</td>
										<td>{{ item.status }}</td>
										<td>{{ item.notes }}</td>
										<td>{{ item.color }}</td>
										<td>{{ item.other }}</td>
										<td>
											<a href="/admin/img/123">"img" </a>
										</td>
										<td>
											<a href="/admin/viewpdf/123">
												"pdf"
											</a>
										</td>
										<td>
											<a href="/admin/viewaudio/123"
												>"audio"
											</a>
										</td>
										<td>{{ item.formatted_created_at }}</td>
										<td>{{ item.formatted_created_at }}</td>
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
</template>

<script>
import Resource from "@/api/resource";
const marketResource = new Resource("api/market");

import { mapGetters } from "vuex";


import CreateMarket from "@/components/dashboard/Create"

export default {
	components: {
		CreateMarket
	},
	/*
        |--------------------------------------------------------------------------
        | Component > props
        |--------------------------------------------------------------------------
        */
	props: {
		item: {},
		showCreate: false
	}, // End of Component > props
	/*
        |--------------------------------------------------------------------------
        | Component > data
        |--------------------------------------------------------------------------
        */
	data() {
		return {
			items: []
		};
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
		async getList() {
			const response = await marketResource.list();

			this.items = response.data;

			this.isLoading = false;
		}
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {
		this.getList();
	} // End of Component > mounted
}; // End of export default
</script>
