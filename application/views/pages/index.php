<!-- Login CSS -->
<link rel="stylesheet" href="css/dms/login.css">

<!-- Login JS -->
<script type="text/javascript" src="js/dms/login.js"></script>

<div class="container-fluid">
	<div class="row centralize-top"></div>
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<div class="panel panel-primary content-center">
			    <div class="panel-heading">Login User!</div>
			    <div class="panel-body">
			    <form id="login-form" action="#">
				    <div class="form-group">
				    	<label for="username">Username</label>
			    		<input id="username" class="form-control" type="text" placeholder="E.g JuanDelaCruz" required>
				    	<label for="password">Password</label>
			    		<input id="password" class="form-control" type="password" placeholder="••••••••••••" required>
			    		<a href="" data-toggle="modal" data-target="#register-modal">Don't have an account?</a>
			    		<input type="button" id="confirm-btn" class="btn btn-primary form-control" value="Confirm">
			    	</div>	
			    </form>
			    </div>
			</div>
		</div>
		<div class="col-xs-4 centralize-bottom"></div>
	</div>
	<div class="row"></div>
</div>

<!-- Modal content-->
<div id="register-modal" class="modal fade modal-centralize" role="dialog">
	<div class="modal-dialog centralize-top">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Registration</h4>
			</div>
			<div class="modal-body">
			<form id="registration-form" action="#">
				<div class="row form-group">
					<div class="col-xs-6">
						<label for="register-username">Username</label>
						<input id="register-username" class="form-control" type="text" placeholder="E.g JuanDelaCruz" required>
					</div>
					<div class="col-xs-6">
						<label for="register-password">Password</label>
						<input id="register-password" class="form-control" type="password" placeholder="••••••••••" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-xs-6">
						<label for="register-firstname">First name</label>
						<input id="register-firstname" class="form-control" type="text" placeholder="E.g Juan" required>
					</div>
					<div class="col-xs-6">
					<label for="register-lastname">Last name</label>
						<input id="register-lastname" class="form-control" type="text" placeholder="E.g Dela Cruz" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-xs-6">
						<label for="register-middlename">Middle name</label>
						<input id="register-middlename" class="form-control" type="text" placeholder="E.g Domingo" required>
					</div>
					<div class="col-xs-3">
						<label for="register-prefix">Prefix</label>
						<input id="register-prefix" class="form-control" type="text" placeholder="E.g Mrs./Mr." required>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="button" id="register-btn" class="btn btn-success" value="Register"></input>
			</div>
			</form>
		</div>
	</div>
</div>