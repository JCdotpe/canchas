    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(''); ?>">CANCHAS CLOUD</a>
        </div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<?php
				if($this->ion_auth->logged_in()){
					$roles = $this->ion_auth->get_roles();
					if(!empty($roles)){
			?>
					<?php
						$i = 1;
						foreach ($roles as $role){
							$c = "";
							if($this->uri->segment(1) == $role->url){
								$c = ' class="active"';
							}
					?>
							<li <?php echo $c; ?>>
								<?php echo anchor(base_url().strtolower($role->url),utf8_encode($role->role_name)); ?>
							</li>
					<?php
						}
					}
				}else{			?>


					<li>
						<a href="<?php echo base_url('index.php/auth/login'); ?>">Login</a>
					</li>
			<?php 
				}

			?>
					<li>
						<a target="top" href="<?php echo base_url('media/instructivo.pdf'); ?>">Instructivo</a>
						
					</li>
			</ul>

			<?php 
				if($this->ion_auth->logged_in()){
			?>
 	<ul class="nav navbar-nav navbar-right">
        <li class="glass dropdown">
          <a id="nav-user" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $user->username; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#"><i class="fa fa-gear"></i> Configurar</a></li> -->
            <!-- <li><a href="#"><i class="fa fa-key"></i> Cambiar contraseña</a></li> -->
            <!-- <li class="divider"></li> -->
            <li> <?php echo anchor('auth/logout', 'Salir'); ?></li>
          </ul>
        </li>
      </ul>
			<?php 
				}
			?>      

		</div><!-- /.navbar-collapse -->
      </div>
    </div>



<?php 
	if(isset($fluid)){ 
?>
	<div class="container-fluid main-content">
<?php 
	}else{ 
?>
	<div class="container-fluid main-content">
<?php 
	} 
	
?>