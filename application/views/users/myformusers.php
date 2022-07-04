<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>TEMPLATE</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- BOOTSTRAP -->
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<? echo base_url('bootstrap/css/bootstrap.min.css');?>">

<!-- Font Awesome -->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/icono-arg.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Theme style -->

<!-- ADMIN-LTE dist -->
<link rel="stylesheet" href="<?php echo base_url();?>/dist/css/AdminLTE.css">

<!-- PALTA dist-palta -->
<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/poncho.min.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/palta.css">
<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/palta-adminLTE.css">    
  
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('users'); ?>

<h2>Form de Alta de Usuarios</h2>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username'); ?></small>

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<small><?php echo form_error('password'); ?></small>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<small><?php echo form_error('passconf'); ?></small>

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<small><?php echo form_error('email'); ?></small>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>