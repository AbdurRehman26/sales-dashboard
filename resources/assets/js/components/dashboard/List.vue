<template>
	<div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<a
					v-if="!showCreate && !showMap"
					class="btn btn-success mb-4"
					@click.prevent="showCreate = true"
					>Create</a
				>
				<a
					v-if="showCreate || showMap"
					class="btn btn-info mb-4"
					@click.prevent="
						showCreate = false;
						showMap = false;
					"
					>Back List</a
				>

				<a
					v-if="!showMap"
					class="pull-right btn btn-success mb-4"
					@click.prevent="
						showMap = true;
						showCreate = false;
					"
					>View Map</a
				>
			</div>

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<create-market
					:marketData="marketData"
					v-if="showCreate"
				></create-market>

				<center>
					<spinner v-if="loading"></spinner>
				</center>

				<div v-if="!showCreate && !showMap" class="card">
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
								style="margin-top:30px;width:100%"
							>
								<thead >
									<tr>
										<th>Market Name</th>
										<th>Market ype</th>
										<th>User Name</th>
										<th>Market Owner</th>
										<th>Owner Email</th>
										<th>Owner Phone</th>
										<th>Owner Address</th>
										<th>Notes</th>
										<th>other</th>
										<th>image</th>
										<th>pdf</th>
										<th>audio</th>
										<th>Create Date</th>
										<th>Update Date</th>
										<th>Status</th>
										<th>Action</th>
										<th>View</th>
										<th>Journal</th>
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
										<td>{{ item.notes }}</td>
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
													>DarkGreen/Successfully
													Acquired & Sample
													left</option
												>
											</select>
										</td>

										<td>
											<a
												class="btn btn-success"
												href="#"
												@click.prevent="
													handleUpdate(item)
												"
												>Change</a
											>
										</td>

										<td>
											<router-link
												v-if="
													!(
														item.img ||
														item.pdf ||
														item.other ||
														item.audio
													)
												"
												:to="{
													name: 'market.view',
													params: { id: item.id }
												}"
												class="btn btn-info"
												tag="a"
											>
												View
											</router-link>
										</td>


										<td>
											<router-link
												:to="{
													name: 'journal.view',
													params: { id: item.id }
												}"
												class="btn btn-info"
												tag="a"
											>
												View Journal
											</router-link>
										</td>


									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<market-map
					@show-market="setMarketData"
					v-if="showMap"
				></market-map>
			</div>
		</div>
	</div>
</template>

<script>
import Resource from "@/api/resource";
const marketResource = new Resource("api/market");

import { mapGetters } from "vuex";

import CreateMarket from "@/components/dashboard/Create";
import MarketMap from "@/components/dashboard/MarketMap";

export default {
	components: {
		CreateMarket,
		MarketMap
	},
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
			loading: true,
			marketData: {},
			items: [],
			showMap: false,
			showCreate: false
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
		setMarketData(data) {
			this.marketData = data;
			this.showCreate = true;
			this.showMap = false;
		},
		async handleUpdate(item) {
			this.loading = true;
			const response = await marketResource.update(item.id, item);
			this.loading = false;
			this.getList();
		},
		async getList() {
			this.items = [];

			this.loading = true;
			const response = await marketResource.list();
			this.loading = false;

			this.items = response.data;

			this.isLoading = false;
		},

		initiateDataTable() {
			$("#example").DataTable({
				dom: '<"top"lBf>rt<"bottom"ip><"clear">',

				buttons: [
					{
						extend: "copyHtml5",
						className: "green",
						text: '<b class="fa fa-files-o">Copy</b>',
						titleAttr: "Copy"
					},
					{
						extend: "excelHtml5",
						className: "green",
						text: '<b class="fa fa-file-excel-o">Excel</b>',
						titleAttr: "Excel"
					},
					{
						extend: "csvHtml5",
						className: "green",
						text: '<b class="fa fa-file-text-o">CSV</b>',
						titleAttr: "CSV"
					},
					{
						extend: "pdfHtml5",
						className: "green",
						orientation: "landscape",
						exportOptions: {
							columns: ":visible"
						},
						pageSize: "LEGAL",
						text: '<i class="fa fa-file-pdf-o"> PDF</i>',
						titleAttr: "PDF",
						customize: function(doc) {
							doc.pageMargins = [10, 10, 10, 10];
							doc.defaultStyle.fontSize = 7;
							doc.styles.tableHeader.fontSize = 7;
							doc.styles.title.fontSize = 9;
							// Remove spaces around page title
							doc.content[0].text = doc.content[0].text.trim();
							// Create a footer
							doc["footer"] = function(page, pages) {
								return {
									columns: [
										"This is your left footer column",
										{
											// This is the right column
											alignment: "right",
											text: [
												"page ",
												{ text: page.toString() },
												" of ",
												{ text: pages.toString() }
											]
										}
									],
									margin: [10, 0]
								};
							};
							// Styling the table: create style object
							var objLayout = {};
							// Horizontal line thickness
							objLayout["hLineWidth"] = function(i) {
								return 0.5;
							};
							// Vertikal line thickness
							objLayout["vLineWidth"] = function(i) {
								return 0.5;
							};
							// Horizontal line color
							objLayout["hLineColor"] = function(i) {
								return "#aaa";
							};
							// Vertical line color
							objLayout["vLineColor"] = function(i) {
								return "#aaa";
							};
							// Left padding of the cell
							objLayout["paddingLeft"] = function(i) {
								return 4;
							};
							// Right padding of the cell
							objLayout["paddingRight"] = function(i) {
								return 4;
							};
							// Inject the object in the document
							doc.content[1].layout = objLayout;
						}
					}
				]
			});
		}
	}, // End of Component > methods
	/*
        |--------------------------------------------------------------------------
        | Component > mounted
        |--------------------------------------------------------------------------
        */
	mounted() {
		this.getList();

		let self = this;

		setTimeout(function() {
			self.initiateDataTable();
		}, 2000);
	}, // End of Component > mounted
	watch: {
		showCreate() {
			this.getList();
		}
	}
}; // End of export default
</script>

<style>
.dataTables_empty {
	display: none;
}
</style>
