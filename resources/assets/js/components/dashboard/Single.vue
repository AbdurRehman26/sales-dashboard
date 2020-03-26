<template>
	<div>

		<a href="/customer/market" class="btn btn-info mb-5">Back to Listing</a>

		<div class="card">
			<h5 class="card-header">View Market</h5>
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
							class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mb-3"
						>
							<upload-file
								@response="imageUploaded($event, 'img')"
							></upload-file>
						</div>

						<div
							class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mb-3"
						>
							<upload-file
								:title="'Pdf'"
								@response="imageUploaded($event, 'pdf')"
							></upload-file>
						</div>

						<div
							class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mb-3"
						>
							<upload-file
								:title="'Audio'"
								@response="imageUploaded($event, 'audio')"
							></upload-file>
						</div>

						<div
							class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mb-3"
						>
							<label class="form-label" for="validationCustom05"
								>Signature :</label
							>

							<VueSignaturePad
								class="mb-4"
								height="200px"
								width="300px"
								style="border: 1px solid;"
								ref="signaturePad"
							/>

							<button @click.prevent="undo">Undo</button>
							<button @click.prevent="save">Save</button>
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

			let formData = new FormData();
			let self = this;

			formData.append("file", data);

			axios
				.post("/api/file/upload", formData, {
					headers: {
						"Content-Type": "multipart/form-data"
					}
				})
				.then(function(response) {
					self.imageUploaded(response.data, 'other');
				})
				.catch(function(error) {
					console.log(error, 231232)
					console.log("FAILURE!!");
				});
		},
		imageUploaded(response, type) {
			this.item.img = null;
			this.item.pdf = null;
			this.item.audio = null;
			this.item.other = null;

			this.item[type] = response.name;
		
			console.log(response, this.item , 1231232, type)
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
