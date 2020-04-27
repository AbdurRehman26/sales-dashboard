<template>
	<div>
		<label class="form-label" for="validationCustom05">{{title}} :</label>
		<input @change="uploadFile" href="#" type="file" />
	</div>
</template>

<script>
import Resource from "@/api/resource";
const marketResource = new Resource("api/market");

export default {
	components: {},
	/*
        |--------------------------------------------------------------------------
        | Component > props
        |--------------------------------------------------------------------------
        */
	props: {
		title : {
			type : String,
			default : 'Image'
		}
	}, // End of Component > props
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
		submitFile() {
			let formData = new FormData();
			let self = this;

			formData.append("file", this.file);

			axios
				.post("/api/file/upload", formData, {
					headers: {
						"Content-Type": "multipart/form-data"
					}
				})
				.then(function(response) {
					self.$emit('response' , response.data)
				})
				.catch(function() {
					console.log("FAILURE!!");
				});
		},
		uploadFile(e) {
			var files = e.target.files || e.dataTransfer.files;
			if (!files.length) return;
			
			this.file = files[0];
			
			this.createImage(files[0]);
		},

		createImage(file) {
			var image = new Image();
			var reader = new FileReader();
			var vm = this;

			reader.onload = e => {
				vm.image = e.target.result;
			};
			this.submitFile()
			reader.readAsDataURL(file);
		},
		removeImage: function(e) {
			this.image = "";
		},
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {
	}, // End of Component > mounted
	watch: {}
}; // End of export default
</script>
