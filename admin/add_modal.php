<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<?php
					$username = $_GET['username'];
					echo '  
			<form method="POST" action="add.php?username=' . $username . '">';

					?>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">hotel Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Hotel Area:</label>
						</div>
						<div class="col-sm-10">

							<select name="area" id="">
								<option value="cox bazar">Cox's Bazar</option>
								<option value="dhaka">Dhaka</option>
								<option value="sylhet">Sylhet</option>
								<option value="ctg">Chittagang</option>
							</select>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Area of your town:</label>
						</div>
						<div class="col-sm-10">

							<input type="text" class="form-control" name="townName" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Price:</label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="price" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Long Description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="description" required>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

			</div>
			</form>

		</div>
	</div>
</div>