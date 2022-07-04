<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PACHArt .:. PACHALab .:. ideaspacha.com</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">

    <!-- Table Bootstrap -->
    <link href="<?php echo base_url();?>plugins/bootstrap-table/bootstrap-table.css" rel="stylesheet">

	<!-- BOOTSTRAP-Datepicker -->
	<link rel="stylesheet" href="<?php echo base_url();?>plugins/datepicker/datepicker3.css">

	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>plugins/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>plugins/owlcarousel/assets/owl.theme.default.css">

	<!-- BOOTSTRAP-Choosen Autocomplete -->
	<link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-chosen-master/bootstrap-chosen.css">

    <!-- formvalidation -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/formvalidation/css/formValidation.min.css">

	<!-- Summernote - WYSIWYG -->	
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pachart.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/header_menu.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/carousel_mogo.css">

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>    

</head>

<body>

<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button> 
            <a class="navbar-brand" href="<?php echo base_url();?>index.php/index">
                <img src="<? echo base_url('assets/images/logo-pachart-header.png');?>" alt="" style="margin-top:-10px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--
                <li>
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Artistas <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas">Todos los artistas</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=dibujo">Dibujo</a>
                        </li>                        
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=pintura">Pintura</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=grabado">Grabado</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=fotografía">Fotografía</a>
                        </li>                                                                        
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=escultura">Escultura</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=diseño gráfico">Diseño Gráfico</a>
                        </li>
                        <!--
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=diseño de indumentaria">Diseño de Indumentaria</a>
                        </li>
                        -->
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=diseño de objetos">Diseño de objetos</a>
                        </li>
                        <!--
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/artistas?tag=sonido y video">Sonido y Video</a>
                        </li>
                        -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Colección <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion">Toda la colección</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=dibujo">Dibujo</a>
                        </li>   
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=pintura">Pintura</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=grabado">Grabado</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=fotografía">Fotografía</a>
                        </li>                                                                        
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=escultura">Escultura</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=diseño gráfico">Diseño Gráfico</a>
                        </li>
                        <!--
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=diseño de indumentaria">Diseño de Indumentaria</a>
                        </li>
                        -->
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=diseño de objetos">Diseño de objetos</a>
                        </li>
                        <li class="divider"></li>
                        <!--
                        <li>
                            <a href="<?php echo base_url();?>index.php/coleccion?tag=sonido y video">Sonido y Video</a>
                        </li>
                        -->
                    </ul>
                </li>                
                <li>
                    <a href="<?php echo base_url();?>index.php/blog">Blog</a>
                </li> 
                <li>
                    <a href="<?php echo base_url();?>index.php/eventos">Eventos</a>
                </li>                 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">PACHArt <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">PACHArt</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Terminos y condiciones</a>
                        </li>   
                        <li>
                            <a href="#">Política</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/index/contacto">Contacto</a>
                        </li>                         
                    </ul>
                </li>                    
                </li>                                

            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <? 
                $logued = $this->session->userdata('logged_in');
                if ($logued != false) { 
                ?>
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <!--<span class="label label-success">4</span>-->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Últimos mensajes</li>
                        <li>
                            <ul class="menu">

                            	{inbox_lastentries}
                                <li>
                                    <a href="#" style="cursor: default;">
                                        <div class="pull-left">
                                            <i class="fa fa-arrow-circle-o-right fa-2x" style="color:#999999;"></i>
                                        </div>
                                        <h4>
                                        {subject}
                                        <small><i class="fa fa-clock-o"></i> {fechamessage}</small>
                                        </h4>
                                        <p class="txtcoment">{comment}</p>
                                    </a>
                                </li>
                                {/inbox_lastentries}
                            </ul>
                        </li>
                        <li class="footer margin0 pad0"><a href="<?php echo base_url();?>index.php/inbox">BUZÓN DE ENTRADA</a>
                        </li>
                    </ul>
                </li>
                <?
                }
                ?>                  

                <? 
                $logued = $this->session->userdata('logged_in');
                if ($logued != false) { 
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <? 
                                $avatar = $this->session->userdata('avatar');
                        ?>
                        <img src="<?php echo base_url();?>img_artist/<?= $avatar; ?>" class="img-circle" style="width:20px; height:20px; margin-right:5px;">
                            <? 
                                $nick = $this->session->userdata('nick');
                                echo $nick;  
                            ?>
                        <b class="caret"></b>
                    </a>                        

                    <ul class="dropdown-menu" style="padding: 15px; min-width: 250px;">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <? 
                                                $avatarmenu = $this->session->userdata('avatar');
                                        ?>                                        
                                        <img src="<?php echo base_url();?>/img_artist/<?= $avatarmenu; ?>" class="img-circle img-responsive m-b-1">
                                    </div>
                                    <div class="col-xs-8">
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
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a class="btn btn-primary btn-block btn-sm m-t-1" href="<?php echo base_url();?>index.php/perfil/misdatos">Mi perfil</a>
                                    </p>
                                    <p>
                                        <a class="btn btn-sm btn-success btn-block m-t-1 width100" href="<?php echo base_url();?>index.php/perfil?id=<?= $this->session->userdata('iduser'); ?>">Mis contenidos</a>
                                    </p>
                                </div>
                            </div>
                        </li>                        
                        <li class="divider"></li>
                        <li>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a class="btn btn-primary btn-block btn-sm m-t-1" href="<?php echo base_url();?>index.php/perfil/cambiarpass">Cambiar contraseña</a>
                                    </p>
                                    <p>
                                        <a class="btn btn-sm btn-danger btn-block" href="<?php echo base_url();?>index.php/loginform/closesection">Cerrar Sesion</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <?
                }
                ?>                

                <? 
                $logued = $this->session->userdata('logged_in');
                if ($logued == false) { 
                ?>
                <li>
                    <a href="<?php echo base_url();?>index.php/loginform">Iniciar sesión</a>
                </li>                 
                <?
                }
                ?>
                <li>
                    <a href="<?php echo base_url();?>index.php/busqueda" class="btn margin0"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li>                 
            </ul>
        </div>
    </nav>

    <div id="searchForm" class="container m-t-5 searchform">
        <div class="row">
            <h3 class="margin0">
                Busqueda
                <div class="pull-right">
                    <button id="closeHeaderSearchForm" class="btn btn-sm text-muted" type="reset"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>         
            </h3>
            <div class="clearfix"></div>
            <hr>
            <form>
                <div class="form-group">
                    <select class="form-control" name="tiponews">
                        <option value="">
                            - Seleccionar tipo -
                        </option>
                        <option value="musica">
                            Colección
                        </option>
                        <option value="pintura">
                            Blog
                        </option>
                        <option value="fotografia">
                            Eventos
                        </option>
                    </select>
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="tiponews">
                        <option value="">
                            - Seleccionar temática -
                        </option>
                        <option value="Arquitectura">Arquitectura</option>
                        <option value="Dibujo">Dibujo</option>
                        <option value="Pintura">Pintura</option>
                        <option value="Grabado">Grabado</option>
                        <option value="Diseño de indumentaria">Diseño de indumentaria</option>
                        <option value="Diseño gráfico">Diseño gráfico</option>
                        <option value="Diseño de objetos">Diseño de objetos</option>
                        <option value="Fotografía">Fotografía</option>
                        <option value="Escultura">Escultura</option>
                    </select>
                </div>
             
                <div class="input-group">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" style="height:54px;" placeholder="Artista">
                        <span class="glyphicon glyphicon-search fa-2x form-control-feedback" style="padding: 9px 0px 2px 0px; margin-right: 8px;" aria-hidden="true"></span>
                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-default" type="reset"><i class="fa fa-times" aria-hidden="true"></i></button>
                        <button class="btn btn-primary btn-success" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div>
            </form>        
        </div>
    </div>              
</header>
