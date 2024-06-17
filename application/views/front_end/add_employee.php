<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">Back</a>
						<h5>Add New Employee</h5>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('employee/store'); ?>" method="POST">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input type="text" name="first_name" class="form-control">
								<small><?php echo form_error('first_name'); ?></small>
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" class="form-control">
								<small><?php echo form_error('last_name'); ?></small>
							</div>
							<div class="form-group">
								<label for="phone_number">Phone Number</label>
								<input type="number" name="phone_number" class="form-control">
								<small><?php echo form_error('phone_number'); ?></small>
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" name="email" class="form-control">
								<small><?php echo form_error('email'); ?></small>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
    

