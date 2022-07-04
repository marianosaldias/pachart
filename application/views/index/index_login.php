<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a class="active">Iniciar sesión</a></li>
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
        <div class="containerblog col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
        	<h1>Iniciá tu sesión</h1>
            <form action="" id="loginForm" method="post" name="loginForm">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="logemail" value="" size="50">
                </div>
                <div class="form-group m-b-2">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="logpassword" value="" size="50">
                </div>
                <div class="form-group m-b-1" align="center">
                    <div class="g-recaptcha" data-sitekey="6LcWp1EUAAAAAKYpotFZ5DPoFPWZZc-ok0kAuYcl"></div>
                </div>

                <div class="form-group">
                    <button id="btnLoginHeader" type="submit" class="btn btn-sm btn-success btn-block m-t-2" />Iniciar sesión</button>
                </div>
            </form>

            <div id="alertLogin" class="m-t-3" style="display: none;">
                <div id="alertType" class="alert alert-success">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <p class="margin-0 text-success" id="msgLogin"></p>
                        </div>
                    </div>
                </div>
            </div> 

            <p class="text-right">
            	<hr>
            	<a class="btn btn-sm btn-warning btn-block m-t-2" href="<?php echo base_url();?>index.php/index/forgotmypassword">Olvidé mi contraseña</a>
            </p>
            <p>
                <a class="btn btn-sm btn-primary btn-block m-t-2" href="<?php echo base_url();?>index.php/index/nuevousuario">Crear mi cuenta de usuario</a>
            </p>            

        </div>

    </div>

</div>
