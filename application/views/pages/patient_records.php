<div class="main">
	<table id="example" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
		<thead>
			<tr role="row">
				<th class="tableHeader sorting_asc">#</th>
				<th class="tableHeader sorting">First Name</th>
				<th class="tableHeader sorting">Last Name</th>
				<th class="tableHeader sorting">Age</th>
				<th class="tableHeader sorting">Phone Number</th>
			</tr>
		</thead>
	</table>
	<button style="margin: auto; display: block;" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addPatient">Add Patient
	</button>

	<div id="addPatient" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Patient</h4>
				</div>
				<div class="modal-body">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#basicInfo">
										Basic Information
									</a>
								</h4>
							</div>
							<div id="basicInfo" class="panel-collapse collapse in">
								<div class="panel-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label class="labelModal control-label" for="firstName">First Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" 
												id="firstName" placeholder="First Name"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="lastName" >Last Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="lastName" placeholder="Password"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="middleName">Middle Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="middleName" placeholder="Middle Name"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="age" >Age</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="age" placeholder="Age"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="gender" >Gender</label>
											<div class="col-sm-9">
												<label class="radio-inline">
													<input type="radio" name="male" id="male" value="male"> Male
												</label>
												<label class="radio-inline">
													<input type="radio" name="female" id="female" value="female"> Female
												</label>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="age" >BirthDate</label>
											<div class="col-sm-9">
												<div class='input-group date' id='birthdate'>
													<input type='text' class="form-control" />
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#contactInfo">
										Contact Information
									</a>
								</h4>
							</div>
							<div id="contactInfo" class="panel-collapse collapse">
								<div class="panel-body">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label class="labelModal control-label" for="address">Address</label>
											<div class="col-sm-9">
												<div class="pull-left">
													<input type="text" id="houseNumber" class="form-control" />
													<br />
													<label for="houseNumber">House Number</label>
												</div>
												<div class="pull-left">
													<input type="text" id="stName" class="form-control" />
													<br />
													<label for="stName">Street Name</label>
												</div>
												<div class="pull-left">
													<input type="text" id="barangay" class="form-control" />
													<br />
													<label for="barangay">Barangay</label>
												</div>
												<div class="pull-left">
													<input type="text" id="city" class="form-control" />
													<br />
													<label for="city">City</label>
												</div>
												<div class="pull-left">
													<input type="text" id="province" class="form-control" />
													<br />
													<label for="province">Province</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="primary">Primary Number</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="primary" placeholder="Primary Number"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="secondary">Secondary Number</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="secondary" placeholder="SecondaryNumber"/>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- <div id="addPatient" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										Basic Information</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label class="col-sm-3 control-label" for="firstName">First Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" 
													id="firstName" placeholder="First Name"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"
												for="lastName" >Last Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"
													id="lastName" placeholder="Password"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"
												for="middleName">Middle Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"
													id="middleName" placeholder="Middle Name"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"
												for="age" >Age</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"
													id="age" placeholder="Age"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"
												for="gender" >Gender</label>
												<div class="col-sm-9">
													<label class="radio-inline">
														<input type="radio" name="male" id="male" value="male"> Male
													</label>
													<label class="radio-inline">
														<input type="radio" name="female" id="female" value="female"> Female
													</label>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"
												for="age" >BirthDate</label>
												<div class="col-sm-9">
													<div class='input-group date' id='birthdate'>
														<input type='text' class="form-control" />
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
											Contact Information</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
											minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div> -->
</div>
