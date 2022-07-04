<div class="container">
	<div class="row">
		<div class="col-md-12 m-b-2">

			<?php //echo validation_errors(); ?>

			<?php echo form_open('form'); ?>

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

		</div>
	</div>
</div>


