<div class="main">
	<div class="container">
		<!-- <div class="row"> -->
		<div style="float: left; width:50%;">
			<table id="inventory" class="table table-striped table-bordered dataTable no-footer" role="grid" width="100%">
			</table>
		</div>
		<div style="float: right; width:38%;">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default" style="padding-bottom: 10px;">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#addInventory">
								Add Inventory
							</a>
						</h4>
					</div>
					<div id="addInventory" class="panel-collapse collapse in">
						<div class="panel-body">
							<form class="form-horizontal" role="form">
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="name">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" 
									id="name" placeholder="Name" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="code" >Code</label>
								<div class="col-sm-10">
									<input type="text" class="form-control"
									id="code" placeholder="Item Code" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="qty">Quantity</label>
								<div class="col-sm-10">
									<input type="number" class="form-control"
									id="qty" placeholder="0" required/>
								</div>
							</div>
							<div class="form-group">
									<label class="control-label col-sm-2" for="price">Price</label>
									<div class="col-sm-10">
										<div class='input-group pesos'>
											<span class="input-group-addon">
												<span>&#8369;</span>
											</span>
											<input type="text" class="form-control" 
											id="price"/>
										</div>
									</div>
								</div>
							</form>
						</div>
						<button id="btnAddInventory" style="margin: auto; display: block;" class="btn btn-primary btn-md"><i class="fa fa-suitcase fa-lg"></i> Add</button>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
	</div>
</div>