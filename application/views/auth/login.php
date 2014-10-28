
<div class="col-md-4 col-md-offset-4"> 
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>


  <div class="form-group">
    <label for=""><?php echo lang('login_identity_label', 'identity');?></label>
    <?php echo form_input($identity);?>
  </div>

 <div class="form-group">
    <label for=""><?php echo lang('login_password_label', 'password');?></label>
    <?php echo form_input($password);?>
  </div>
<!-- 
  <p>
    <?php //echo lang('login_remember_label', 'remember');?>
    <?php //echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p> -->


<?php echo form_submit('submit', lang('login_submit_btn'),'style="margin-bottom:30px" class="btn btn-primary pull-right"'); ?>

<?php echo form_close();?>
</div>

<!-- <p><a href="forgot_password"><?php //echo lang('login_forgot_password');?></a></p> -->