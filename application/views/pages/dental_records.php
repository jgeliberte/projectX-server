<div class="main">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Records</a></li>
		<li><a data-toggle="tab" href="#services">Services</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active tableAlignFromTop">
			<table id="dentalRecords" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
			</table>

			<!-- Add Patient Dental -->
			<form class="form-horizontal" role="form">
				<div id="addDental" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 id="patientName" class="dentalPatientNameFont modal-title">H</h4>
								<div id="gender"></div>
								<div id="primary"></div>
							</div>
							<div class="modal-body">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								<button id="btnAddActivity" type="button" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>

			<!-- Preview Patient Dental Records -->
			<form class="form-horizontal" role="form">
				<div id="previewDental" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 id="patientName2" class="dentalPatientNameFont modal-title">H</h4>
								<div id="gender2"></div>
								<div id="primary2"></div>
							</div>
							<div class="modal-body">
								<table id="dentalActivities" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- Second Tab -->
		<div id="services" class="tab-pane fade tableAlignFromTop">
			<table id="dentalService" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
			</table>
			<button style="margin: auto; display: block;" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addService"><i class="fa fa-medkit fa-lg" aria-hidden="true"></i> Add Service
			</button>

			<!-- Add Dental Service -->
			<form class="form-horizontal" role="form">
				<div id="addService" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Dental Service</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="labelModal control-label" for="serviceCode">Service Code</label>
									<div class="col-md-9">
										<input type="text" class="form-control" 
										id="serviceCode" placeholder="Service Code"/>
									</div>
								</div>
								<div class="form-group">
									<label class="labelModal control-label" for="serviceName">Service Name</label>
									<div class="col-md-9">
										<input type="text" class="form-control" 
										id="serviceName" placeholder="Service Name"/>
									</div>
								</div>
								<div class="form-group">
									<label class="labelModal control-label" for="serviceDesc">Service Desc</label>
									<div class="col-md-9">
										<textarea class="form-control" 
										id="serviceDesc" placeholder="Service Desc"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="labelModal control-label" for="serviceName">Fee</label>
									<div class="col-md-4">
										<div class='input-group pesos'>
											<span class="input-group-addon">
											<i class="fa fa-rub" aria-hidden="true"></i>
											</span>
											<input type="text" class="form-control" 
											id="fee"/>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								<button id="btnAddService" type="button" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
</div>