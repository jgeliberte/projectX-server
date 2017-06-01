<div id= "patientId" class="main" onload="loadsTable();">
	<table id="patientRecords" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
	</table>
	<button style="margin: auto; display: block;" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addPatient"><i class="fa fa-user-plus fa-lg"></i> Add Patient
	</button>

	<form class="form-horizontal" role="form">
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
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#basicInfo">
											Basic Information
										</a>
									</h4>
								</div>
								<div id="basicInfo" class="panel-collapse collapse in">
									<div class="panel-body">
										<!-- <form class="form-horizontal" role="form"> -->
										<div class="form-group">
											<label class="labelModal control-label" for="firstName">First Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" 
												id="firstName" placeholder="First Name" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="lastName" >Last Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="lastName" placeholder="Last Name" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="middleName">Middle Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control"
												id="middleName" placeholder="Middle Name" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="gender" >Gender</label>
											<div class="col-sm-9">
												<label class="radio-inline">
													<input type="radio" name="gender" value="Male"> Male
												</label>
												<label class="radio-inline">
													<input type="radio" name="gender" value="Female"> Female
												</label>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="birthdate" >Birthdate</label>
											<div class="col-md-9">

												<div class='input-group date'>
													<input type='text' id="birthdate" class="form-control" required/>
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<!-- </form> -->
									</div>
								</div>
							</div>
						</div>

						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#contactInfo">
											Contact Information
									</a>
									</h4>
								</div>
								<div id="contactInfo" class="panel-collapse collapse">
									<div class="panel-body">
										<!-- <form class="form-horizontal" role="form"> -->
										<div class="form-group">
											<label class="labelModal control-label" for="address">Address</label>
											<div class="col-sm-9">
												<input type="text" id="address" class="form-control" placeholder="ex. #10 sample st. BrangayName CityName Province" required/>
												<div class="addressInputBox pull-left">
													<label class="subLabelAddress" for="houseNumber">House Number</label>
												</div>
												<div class="addressInputBox pull-left">
													<label class="subLabelAddress" for="stName">Street Name</label>
												</div>
												<div class="addressInputBox pull-left">
													<label class="subLabelAddress" for="barangay">Barangay</label>
												</div>
												<div class="addressInputBox pull-left">
													<label class="subLabelAddress" for="city">City</label>
												</div>
												<div class="pull-left">
													<label class="subLabelAddress" for="province">Province</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="email">Email Address</label>
											<div class="col-sm-4">
												<input type="email" class="form-control"
												id="email" placeholder="Email"/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="primary">Primary Number</label>
											<div class="col-sm-4">
												<input type="text" class="form-control"
												id="primary" placeholder="Primary Number" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="labelModal control-label" for="secondary">Secondary Number</label>
											<div class="col-sm-4">
												<input type="text" class="form-control"
												id="secondary" placeholder="SecondaryNumber"/>
											</div>
										</div>
										<!-- </form> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<input type="submit" id="btnAddPatient" type="button" class="btn btn-primary" value="Save"/>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
