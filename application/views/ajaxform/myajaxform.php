<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TEMPLATE</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/header_menu.css">
  
</head>

<body>

<header>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> 
            	<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="http://www.jquery2dotnet.com">PACHArt</a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="http://www.jquery2dotnet.com">Home</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://www.jquery2dotnet.com">One more separated link</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!--
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input class="form-control" placeholder="Search" type="text">
                </div><button class="btn btn-default" type="submit">Submit</button>
            </form>
            -->
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    	<img src="<?php echo base_url();?>assets/images/profile-img.jpg" class="img-circle" style="width:20px; height:20px; margin-right:5px;">
                        <strong>
							<? 
                                $nick = $this->session->userdata('nick');
								echo $nick;  
							?>
                        </strong> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="background-color: white; display: none; padding: 15px; min-width: 250px;">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <!--
                                    <div class="col-lg-4">
                                        <img src="dist-palta/img/profile-img.jpg" class="img-circle img-responsive">
                                    </div>
                                    -->
                                    <div class="col-lg-12">
                                        <p class="text-left"><strong>
											<? 
												$logued = $this->session->userdata('username');
												echo $logued;  
											?>
                                        </strong></p>
                                        <p class="text-left small">
                                        	
										<? 
                                            $loguedemail = $this->session->userdata('email');
                                            echo $loguedemail;  
                                        ?>											

                                        </p>
                                        <a class="btn btn-primary btn-block btn-sm" href="#">Actualizar Datos</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a class="btn btn-danger btn-block" href="http://localhost/pachart/index.php/loginform/closesection">Cerrar Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                
                <? 
				// Muestra LoginForm en caso de sesion abierta	
				if ($logued == false) { 
				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingresar <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="padding: 15px; min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="loginformheader" action="http://localhost/pachart/index.php/loginform/loginHeadForm" method="post">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" name="logemail" value="" size="50">
                                        </div>
                                        <div class="form-group">
                                        	<label>Contraseña</label>
                                            <input type="password" name="logpassword" value="" size="50">
                                        </div>
                                        
                                        <p class="text-right"><a href="#">Olvidé mi contraseña</a></p>
                                        
                                        <div class="form-group">
                                        	<button id="btnLoginHeader" type="submit" class="btn btn-success btn-block" />Sign in</button>
                                            <button id="btnLoginHeader" type="reset" class="btn btn-default btn-block" />Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                        	<a class="btn btn-primary btn-block text-center" id="sign-in-google">Sign In with Google</a>
                            <a class="btn btn-primary btn-block text-center" id="sign-in-twitter">Sign In with Twitter</a>
                        </li>
                        <li class="divider"></li>
                        <li><a class="btn btn-default btn-block text-center" href="#">Crear mi cuenta de usuario</a></li>
                        <!--
                        <li class="divider"></li>
                        <li><a class="btn btn-primary btn-block" href="http://localhost/pachart/index.php/loginform">LogIn Form</a></li>
                        -->
                    </ul>
                </li>
                <?
				}
				?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</header>

<div id="alertFormMsg" class="container" style="display: none;">
    <div class="alert alert-success" style="margin: 0 auto;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="media">
            <div class="media-left" style="padding-top: 5px;">
                <i class="fa fa-arrow-circle-o-right fa-fw fa-4x"></i>
            </div>
            <div class="media-body">
                <h4 style="margin-top:10px;">¿Ya iniciaste tu tramite? </h4>
                <p class="margin-0">Seguí el <a href="http://www.mininterior.gov.ar/tramitesyservicios/estado-tramite-dni.php" target="_blank">estado del trámite en linea</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 m-b-2">
			<h1>Carga de News</h1>

			<form id="myajaxform" method="post">
				<h5>Title</h5>
				<input type="text" name="title" size="50" class="form-control" />
				
				<h5>Tipo</h5>
				<select name="tiponews" class="form-control">
					<option value="">- Seleccionar tipo -</option>
					<option value="musica">Musica</option>
					<option value="pintura">Pintura</option>
					<option value="fotografia">Fotografia</option>
				</select>
				
				<h5>Text</h5>
				<textarea name="text" rows="3" class="form-control"></textarea>

				<button type="submit" class="btn btn-primary m-t-2">Guardar</button>
				<button type="reset" class="btn btn-contorno m-t-2">Reset</button>
			</form>

		</div>
	</div>
</div>


<footer class="main-footer" style="padding-bottom: 32px; padding-top: 60px; border-top: 1px solid #cacaca; background:#FFFFFF; margin-left: 0px !important; margin-top:20px;">
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="image-responsive" src="<? echo base_url();?>dist-palta/img/logoMinisterio.png" alt="Ministerio de Producción" style="max-width:250px; width:100%;">
                <br /><br />
                <p class="text-muted small">Los contenidos de Produccion.gob.ar están licenciados bajo <a href="https://creativecommons.org/licenses/by/2.5/ar/">Creative Commons Reconocimiento 2.5 Argentina License</a>
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="nav_menu-3" class="widget_nav_menu">
                    <div class="menu-footer-b-container">
                        <ul id="menu-footer-b" class="menu">
                            <li id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-152"><a href="http:/#">Item I</a>
                            </li>
                            <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><a href="http:/#">Item II</a>
                            </li>
                            <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><a href="http:/#">Item III</a>
                            </li>
                            <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><a href="http:/#">Item IV</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="nav_menu-2" class="widget_nav_menu">
                    <div class="menu-footer-a-container">
                        <ul id="menu-footer-a" class="menu">
                            <li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-150"><a href="http:/#">Item 1</a>
                            </li>
                            <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><a href="http:/#">Item 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Success</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>Success!!! :)</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Error</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>Error!!! :(</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Done</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>That's all!!! ;)</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- jQuery 2.2.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/myajaxform.js"></script>
<script>
$(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});

$(document).ready(function(){
    $(".dropdown").click(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>


</body>
</html>