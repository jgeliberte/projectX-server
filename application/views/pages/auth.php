<!-- Login CSS -->
<link rel="stylesheet" href="css/dms/login.css">

<!-- Login JS -->
<script type="text/javascript" src="js/dms/auth.js"></script>

<div class="container-fluid">
	<div class="row centralize-top"></div>
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<div class="panel panel-primary content-center">
			    <div class="panel-heading">Authentication</div>
			    <div class="panel-body">
			    <form id="login-form" action="#">
				    <div class="form-group">
				    <div class="row">
				    	<div class="col-xs-12 form-group">
					    	<label for="auth-code">Authentication Code</label>
				    		<input id="auth-code" class="form-control" type="text" required>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-xs-12 form-group">
				    		<input type="button" id="confirm-btn" class="btn btn-primary form-control" value="Confirm">
				    	</div>
				    </div>
			    	</div>	
			    </form>
			    </div>
			</div>
		</div>
		<div class="col-xs-4 centralize-bottom"></div>
	</div>
	<div class="row"></div>
</div>

<!-- Auth modal -->
<div id="auth-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
	      <div class="row">
	      	<div class="col-xs-12 form-group">
	      		<input type="text" id="gen-code" class="form-control">
	        </div>
	      </div>
      </div>
    </div>

  </div>
</div>