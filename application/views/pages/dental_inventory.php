<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-7" style="margin-right: 1%;">
				<table id="inventory" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
				</table>
			</div>
			<div class="col-sm-4">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#dentalInventory">
									Dental Inventory
								</a>
							</h4>
						</div>
						<div id="dentalInventory" class="panel-collapse collapse in" style="padding-bottom: 10px">
							<div class="panel-body">
								<!-- <form class="form-horizontal" role="form"> -->
								<div class="form-group" style="margin-bottom: 40px">
									<label class="labelModal control-label" for="Name">Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" 
										id="name" placeholder="Name" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="labelModal control-label" for="lastName" >Quantity</label>
									<div class="col-sm-7">
										<input type="number" class="form-control"
										id="dentalQty" required/>
									</div>
								</div>
								<!-- </form> -->
							</div>
							<button style="margin: auto; display: block;" class="btn btn-primary btn-md"><i class="fa fa-user-plus fa-lg"></i> Add</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>