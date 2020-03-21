<template>
	<div>
		<div class="card">
			<h5 class="card-header">Create Message</h5>
			<div class="card-body">
				<form class="needs-validation" enctype="multipart/form-data">
					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Market Name :
							</label>
							<label for="validationCustom01">{{
								item.market_name
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01">Owner : </label>
							<label for="validationCustom01">{{
								item.market_owner
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Owner Email :
							</label>
							<label for="validationCustom01">{{
								item.owner_email
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Owner Phone :</label
							>
							<label for="validationCustom01"
								>{{ item.owner_phone }} :</label
							>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Owner Street And Address :
							</label>
							<label for="validationCustom01">{{
								item.owner_address
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Owner PLZ And Town Name :
							</label>
							<label for="validationCustom01">{{
								item.plz
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Contact Person Name :</label
							>
							<label for="validationCustom01">{{
								item.contact_person_name
							}}</label>
						</div>
					</div>

					<br />

					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Contact Person Phone :</label
							>
							<label for="validationCustom01">{{
								item.contact_person_phone
							}}</label>
						</div>
					</div>

					<br />
					<div class="row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
						>
							<label for="validationCustom01"
								>Contact Person Email :</label
							>
							<label for="validationCustom01">{{
								item.contact_person_email
							}}</label>
						</div>
					</div>

					<br />

					<div class="form-row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
						>
							<label for="validationCustom05">Other :</label>
							<label for="validationCustom05">{{
								item.other
							}}</label>
						</div>
					</div>
					<br />

					<div class="form-row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
						>
							<label for="validationCustom05">Notes :</label>
							<label for="validationCustom05">{{
								item.notes
							}}</label>
						</div>
					</div>
					<br />

					<div class="form-row md-5">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
						>
							<label class="form-label" for="validationCustom05"
								>Market Type :</label
							>
							<label
								class="form-label"
								for="validationCustom05"
								>{{ item.market_type_name }}</label
							>
						</div>
					</div>

					<div class="form-row">
						<div
							class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-4"
						>
							<upload-file
								@response="imageUploaded($event, 'img')"
							></upload-file>
						</div>

						<div
							class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-4"
						>
							<upload-file
								:title="'Pdf'"
								@response="imageUploaded($event, 'pdf')"
							></upload-file>
						</div>

						<div
							class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-4"
						>
							<label class="form-label" for="validationCustom05">Signature :</label>

							<VueSignaturePad
								class="mb-4"
								height="200px"
								width="400px"
								style="border: 1px solid;"
								ref="signaturePad"
							/>

							<button @click="undo">Undo</button>
							<button @click="save">Save</button>
						</div>
					</div>

					<div class="form-row">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12"
						>
							<button
								:disabled="
									!(
										item.img ||
										item.pdf ||
										item.other ||
										item.audio
									)
								"
								@click.prevent="handleUpdate"
								class="btn btn-primary"
								type="submit"
							>
								Update
							</button>
						</div>
					</div>

					<br />
				</form>
			</div>
		</div>
	</div>
</template>

<script>
import Resource from "@/api/resource";
import UploadFile from "@/components/common/UploadFile";
const marketResource = new Resource("api/market");

import VueSignaturePad from "vue-signature-pad";

export default {
	components: {
		UploadFile,
		VueSignaturePad
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
			item: [],
			showCreate: false
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
		handleUpdate() {},
		undo() {
			this.$refs.signaturePad.undoSignature();
		},
		save() {
			const { isEmpty, data } = this.$refs.signaturePad.saveSignature();
			console.log(isEmpty);
			console.log(data);
		},
		imageUploaded(response, type) {
			this.item.img = null;
			this.item.pdf = null;
			this.item.audio = null;
			this.item.other = null;

			this.item[type] = response.name;
		},

		removeImage: function(e) {},

		async handleUpdate() {
			const response = await marketResource.update(
				this.item.id,
				this.item
			);
			this.$router.push("/customer/market");
		},

		async getData() {
			this.items = [];

			const response = await marketResource.get(this.$route.params.id);

			this.item = response.data;

			this.isLoading = false;
		}
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {
		this.getData();
	}, // End of Component > mounted
	watch: {}
}; // End of export default
</script>
