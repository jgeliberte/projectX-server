<div class="panel panel-primary content-center">
  <nav class="headerBar panel-heading navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
      <span class="navbar-brand" href="#">Dental Management System</span>
      </div>
      <div class="pull-right">
        <div class="btn-group headerVerticalCenter">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user fa-lg"></i> <?php echo $this->session->userdata('username') ?>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="../../v1/logout">Log out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>