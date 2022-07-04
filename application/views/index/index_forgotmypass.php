<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/perfil" class="active">Iniciar Sesión</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> 

<!--
<div class="containerwide">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div align="center">
				<img src="<?php echo base_url();?>img_artist/userforgot.jpg" class="img-circle avatarProfile">			
			</div>
		</div>	
	</div>	
</div>	
-->
    	
<div class="container">
    <div class="row">

        <div class="containerblog col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
            <form action="" id="formForgotPass" method="post" name="formForgotPass">
		        <h1 class="col-xs-12">Olvidé mi contraseña</h1>
		        <div class="form-group col-xs-12 m-b-3">
		            <label class="control-label">Correo electrónico *</label> 
		            <input type="text" class="form-control" id="forgotpass_email" name="forgotpass_email">
		        </div>

                <div class="form-group col-xs-12" align="left">
                    <div class="g-recaptcha" data-sitekey="6LcWp1EUAAAAAKYpotFZ5DPoFPWZZc-ok0kAuYcl"></div>
                </div>			        

		        <div class="form-group col-xs-12 m-t-2">
		            <a class="btn btn-primary" href="<?= base_url(); ?>index.php/index">Salir</a> 
		            <button class="btn btn-success m-l-1" type="submit">Recuperar contraseña</button>
		        </div>

		    	<div id="alertMsg" class="col-xs-12 m-t-2" style="display: none;">
				    <div id="alertType" class="alert alert-success">
				        <div class="media">
				            <div class="media-left">
				                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
				            </div>
				            <div class="media-body">
				                <p class="margin-0 text-success" id="msgForgotPass"></p>
				            </div>
				        </div>
				    </div>
				</div>
			</form>
		</div>	
    </div>
</div>
