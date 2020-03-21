<template>
	<div class="card">
		<h5 class="card-header">Create Message</h5>
		<div class="card-body">
			<form class="needs-validation" enctype="multipart/form-data">
				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01">Market Name</label>
						<input
							v-model="item.market_name"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Market Name"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01">Owner</label>
						<input
							v-model="item.market_owner"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Owner"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01">Owner Email</label>
						<input
							v-model="item.owner_email"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Owner Email"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01">Owner Phone</label>
						<input
							v-model="item.owner_phone"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Owner Phone"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01"
							>Owner Street And Address</label
						>
						<input
							v-model="item.owner_address"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Owner Street And Address"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01"
							>Owner PLZ And Town Name</label
						>
						<input
							v-model="item.plz"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Owner PLZ And Town Name"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01"
							>Contact Person Name</label
						>
						<input
							v-model="item.contact_person_name"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Contact Person Name"
							required
						/>
					</div>
				</div>

				<br />

				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01"
							>Contact Person Phone</label
						>
						<input
							v-model="item.contact_person_phone"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Contact Person Phone"
							required
						/>
					</div>
				</div>

				<br />
				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01"
							>Contact Person Email</label
						>
						<input
							v-model="item.contact_person_email"
							type="text"
							class="form-control"
							name="heading"
							placeholder="Enter Contact Person Email"
							required
						/>
					</div>
				</div>

				<br />

				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
					>
						<label for="validationCustom05">Other</label>
						<textarea
							v-model="item.other"
							rows="4"
							cols="50"
							class="form-control"
							id="validationCustom05"
							placeholder="type content here ..."
							name="content"
						>
						</textarea>
					</div>
				</div>
				<br />

				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
					>
						<label for="validationCustom05">Notes</label>
						<textarea
							v-model="item.notes"
							rows="4"
							cols="50"
							class="form-control"
							id="validationCustom05"
							placeholder="type content here ..."
							name="content"
						>
						</textarea>
					</div>
				</div>
				<br />

				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
					>
						<label class="form-label" for="validationCustom05"
							>Market Type</label
						>
						<select v-model="item.market_type" class="form-control">
							<option value="1">Pharmacy</option>
							<option value="2">Beauty Saloon</option>
							<option value="3">Hair Stylish</option>
							<option value="4">Naturopath</option>
							<option value="5">Bio-Market</option>
							<option value="6">Store Chain</option>
							<option value="7">Other</option>
						</select>
					</div>
				</div>
				<br />

				<br />
				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<button
							@click.prevent="handleCreate"
							class="btn btn-primary"
							type="submit"
						>
							Create
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
import Resource from "@/api/resource";
const marketResource = new Resource("api/market");

import { mapGetters } from "vuex";

import CreateMarket from "@/components/dashboard/Create";

export default {
	components: {
		CreateMarket
	},
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
			item: {
				market_name: "",
				market_owner: "",
				owner_email: "",
				owner_phone: "",
				owner_address: "",
				contact_person_name: "",
				contact_person_phone: "",
				contact_person_email: "",
				other: "",
				notes: "",
				plz: "",
				market_type: 1
			}
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
		refreshItem() {
			this.item = {
				market_name: "",
				market_owner: "",
				owner_email: "",
				owner_phone: "",
				owner_address: "",
				contact_person_name: "",
				contact_person_phone: "",
				contact_person_email: "",
				other: "",
				notes: "",
				plz: "",
				market_type: 1
			};
		},

		async handleCreate() {
			const response = await marketResource.store(this.item);

			this.refreshItem()

			this.isLoading = false;
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
