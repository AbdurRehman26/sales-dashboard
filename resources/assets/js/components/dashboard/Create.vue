<template>
	<div class="card">
		<h5 class="card-header">Create Message</h5>
		<div class="card-body">
			<form
				class="needs-validation"
				method="POST"
				action="/admin/fcm"
				enctype="multipart/form-data"
			>
				<div class="row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<label for="validationCustom01">Message Heading</label>
						<input
							type="text"
							class="form-control"
							id="validationCustom01"
							name="heading"
							placeholder="Message Heading"
							required
						/>
						<div class="valid-feedback">
							Looks good!
						</div>
					</div>
				</div>
				<br /><br />

				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
					>
						<label for="validationCustom05">Message Content</label>
						<textarea
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

				<br />
				<div class="form-row">
					<div
						class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "
					>
						<button class="btn btn-primary" type="submit">
							Submit form
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>
