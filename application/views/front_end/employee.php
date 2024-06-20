<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add Employee</a>
						<h5>Employee Table</h5>
					</div>
					<div class="card-body">
						<table id="empTable" class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone Number</th>
									<th>Email Address</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Confirm Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach ($employee as $row) : ?>
								<tr>
									<td><?php echo $row->ID ?></td>
									<td><?php echo $row->first_name ?></td>
									<td><?php echo $row->last_name ?></td>
									<td><?php echo $row->phone_number ?></td>
									<td><?php echo $row->email ?></td>
									<td>
										<a href="<?php echo base_url('employee/edit/'.$row->ID) ?>" class="btn btn-success btn-sm">Edit</a>
									</td>
									<td>
										<a href="<?php echo base_url('employee/delete/'.$row->ID) ?>" class="btn btn-danger btn-sm">Delete</a>
									</td>
									<td>
										<button type="submit" value="<?= $row->ID ?>" class="btn btn-danger btn-sm confirm-delete">Confirm Delete</button>
									</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
    

