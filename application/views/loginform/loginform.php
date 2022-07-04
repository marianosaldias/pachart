<div class="container">
	<div class="row">
		<div class="col-md-12">

			<?php //echo validation_errors(); ?>

			<?php echo form_open('loginform'); ?>

			<h5>E-mail</h5>
			<input type="text" name="logemail" value="<?php echo set_value('logemail'); ?>" size="50" />
			<?php echo form_error('logemail'); ?></small>

			<h5>Password</h5>
			<input type="text" name="logpassword" value="<?php echo set_value('logpassword'); ?>" size="50" />
			<small><?php echo form_error('logpassword'); ?></small>

			<div><input type="submit" value="Submit" /></div>

		</div>
	</div>
</div>


