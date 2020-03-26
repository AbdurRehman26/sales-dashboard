<template>
	<div>
		<div>
			<h2>Search and add a pin</h2>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<button
						:disabled="disableButton"
						class="btn btn-success pull-right"
						@click.prevent="createMarket"
					>
						Create Market
					</button>
				</div>
			</div>

			<label>
				<gmap-autocomplete
					default-place="Pakistan"
					@place_changed="setPlace"
				>
				</gmap-autocomplete>
				<button @click="addMarker">Add</button>
			</label>
			<br />
		</div>
		<br />
		<gmap-map
			:center="center"
			:zoom="12"
			:draggable="true"
			style="width:100%;  height: 400px;"
		>
			<gmap-marker
				:key="index"
				v-for="(m, index) in markers"
				:position="m.position"
				:draggable="true"
				@click="mapPositionChanged"
			></gmap-marker>
		</gmap-map>
	</div>
</template>

<script>
import _ from "lodash";

export default {
	name: "GoogleMap",
	data() {
		return {
			center: { lat: 45.508, lng: -73.587 },
			markers: [],
			places: [],
			currentPlace: null,
			disabled: false,
			addressData : {
				lat : '',
				lng : '',
				plz : '',
				owner_address : ''
			}
		};
	},

	mounted() {
		this.geolocate();
	},

	computed: {
		disableButton(){
			return this.disabled || !this.markers.length;
		}
	},

	methods: {
		createMarket() {
			let self = this;
			this.decodeLatLong(this.markers[0]);
		},

		mapPositionChanged(position) {
			console.log(position);
		},
		// receives a place object via the autocomplete component
		setPlace(place) {
			this.currentPlace = place;
		},

		decodeLatLong(location) {
			let self = this;

			self.addressData.lat = this.center.lat
			self.addressData.lng = this.center.lng

			this.$gmapApiPromiseLazy().then(() => {
				// eslint-disable-next-line no-undef
				const geocoder = new google.maps.Geocoder();

				var addresses = [];
				self.disabled = true;
				geocoder.geocode(
					{
						location: {
							lat: location.position.lat,
							lng: location.position.lng
						}
					},
					(results, status) => {

						if (status === "OK") {
							_.forEach(results[0].address_components, record => {
								if (
									record.types.includes("locality") ||
									record.types.includes("route") ||
									record.types.includes("street_name") ||
									record.types.includes("postal_code")
								) {


									if (record.types.includes("street_name") || record.types.includes("route")) {
							
										self.addressData.owner_address = record.short_name; 

									}

									if (record.types.includes("locality")) {
							
										self.addressData.plz = record.short_name; 

									}

									if (record.types.includes("postal_code")) {
									
										self.addressData.plz += ' ' +record.short_name; 

									}
								}
								self.disabled = false;


								setTimeout(function(){

									self.$emit('show-market', self.addressData)

								}, 1000);

							});
						}
					}
				);
			});
		},

		addMarker() {
			if (this.currentPlace) {
				this.markers = [];

				const marker = {
					lat: this.currentPlace.geometry.location.lat(),
					lng: this.currentPlace.geometry.location.lng()
				};
				this.markers.push({ position: marker });
				this.places.push(this.currentPlace);
				this.center = marker;
				this.currentPlace = null;
			}
		},
		geolocate: function() {
			navigator.geolocation.getCurrentPosition(position => {
				this.center = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
			});
		}
	}
};
</script>
