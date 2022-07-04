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

    <!-- BOOTSTRAP-Choosen Autocomplete -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-chosen-master/bootstrap-chosen.css">
    <!-- BOOTSTRAP-Datepicker -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/datepicker/datepicker3.css">  

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pachart.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/header_menu.css">


</head>

<body>

    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button> 
                <a class="navbar-brand" href="http://www.jquery2dotnet.com">
                    <img src="<? echo base_url('assets/images/logo-pachart-header.png');?>" alt="" style="margin-top:-10px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
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
                
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url();?>assets/images/profile-img.jpg" class="img-circle" style="width:20px; height:20px; margin-right:5px;">
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
                                            <img src="<?php echo base_url();?>assets/images/profile-img.jpg" class="img-circle img-responsive">
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
                                            <p>
                                                <a class="btn btn-sm btn-danger btn-block" href="http://localhost/pachart/index.php/loginform/closesection">Cerrar Sesion</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <? 
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
                                                <button id="btnLoginHeader" type="submit" class="btn btn-sm btn-success btn-block" />Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="dividerbtns"></li>
                            <li>
                                <input class="btn btn-sm btn-primary btn-block" id="sign-in-google" type="button" value="Sign In with Google"> 
                                <input class="btn btn-sm btn-primary btn-block" id="sign-in-twitter" type="button" value="Sign In with Twitter">
                            </li>
                            <li class="divider"></li>
                            <li>
                                <p>
                                    <a class="btn btn-sm btn-primary btn-block" href="#">Crear mi cuenta de usuario</a>
                                </p>
                            </li>
                        </ul>
                    </li>
                    <?
                    }
                    ?>
                    <li>
                        <a id="btnSearch" class="btn pad0 margin0"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                                - Seleccionar tema -
                            </option>
                            <option value="musica">
                                Musica
                            </option>
                            <option value="pintura">
                                Pintura
                            </option>
                            <option value="fotografia">
                                Fotografia
                            </option>
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


    <div id="alertMsg" class="container" style="display: none;">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="media">
                <div class="media-left">
                    <i class="fa fa-arrow-circle-o-right fa-fw fa-4x"></i>
                </div>
                <div class="media-body">
                    <h4>¿Ya iniciaste tu tramite? </h4>
                    <p class="margin-0">Seguí el <a href="http://www.mininterior.gov.ar/tramitesyservicios/estado-tramite-dni.php" target="_blank">estado del trámite en linea</a></p>
                </div>
            </div>
        </div>
    </div>
            


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Alta de Arte</h1>

                <div style="color:red">
                    <? echo validation_errors(); ?><? if(isset($error)){print $error;} ?>
                </div>
                <? echo form_open_multipart('upload/file_data'); ?>

                    <input type="hidden" id="art_iduser" name="art_iduser" value="<?= $this->session->userdata('iduser'); ?>">

                    <div class="form-group">
                        <label class="control-label">Título *</label> 
                        <input class="form-control" id="art_title" name="art_title" type="text" value="<?= set_value('art_title'); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Intro *</label> 
                        <textarea class="form-control" id="art_intro" name="art_intro"><?= set_value('art_intro'); ?>
    </textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Descripción *</label> 
                        <textarea class="form-control" id="art_desc" name="art_desc"><?= set_value('art_desc'); ?>
    </textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tags *</label>
                        <select id="art_tags" name="art_tags[]" data-placeholder="Seleccione tags" class="form-control chosen-select" multiple tabindex="-1" style="width:100%;" value="<?= set_value('art_tags'); ?>">
                            <option value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Paraguay">Paraguay</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Imagen *</label>
                        <input class="form-control" id="art_file" name="art_file" type="file">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Picture Title *</label> 
                        <input class="form-control" id="art_descfile" name="art_descfile" type="text" value="<?= set_value('art_descfile'); ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Fecha *</label>
                        <div class="input-group">
                            <input type="text" id="art_date" name="art_date" class="form-control pull-right dateinput" data-inputmask='"mask": "99/99/9999"' data-mask placeholder="dd/mm/aaaa" value="<?= set_value('art_date'); ?>">
                            <div class="input-group-addon bg-primary p-l-2 p-r-2">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <a class="btn btn-warning" href="<?= base_url().'index.php/welcomepic'; ?>">Back</a> 
                        <button class="btn btn-default" type="reset">Borrar</button>
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:20px;">
        <div class="row">    
            <div class="col-lg-12">
                <p class="m-t-1">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php //echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <a id="back-to-top" href="#" class="btn btn-sm btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>assets/images/logo-pachart-header.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">My Account</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Cart</a></li> 
                        <li><a href="#">Profile</a></li> 
                        <li><a href="#">Language</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">Category</h4>
                    <div class="category">
                        <ul class="list-unstyled list-inline">
                          <li><a href="#">men</a></li> 
                          <li><a href="#">women</a></li> 
                          <li><a href="#">boy</a></li> 
                          <li><a href="#">girl</a></li> 
                          <li><a href="#">bag</a></li> 
                          <li><a href="#">teshart</a></li> 
                          <li><a href="#">top</a></li> 
                          <li><a href="#">shos</a></li> 
                          <li><a href="#">glass</a></li> 
                          <li><a href="#">kit</a></li> 
                          <li><a href="#">baby dress</a></li>
                          <li><a href="#">kurti</a><li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <hr>
    
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>assets/images/logo_pachalab_footer.png" alt="">
                    <p>Arte y desarrollo para estas tierras</p>
                </div>
                <div class="col-sm-4">
                    <div class="social-icon">
                        <ul class="list-unstyled list-inline">
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-instagram"></i></a></li> 
                            <li><a class="social" href="#"><i aria-hidden="true" class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>assets/images/logo_pachalab_footer.png" alt="">
                    <p>Copyright © PACHArt 2018<p>
                </div>
            </div>        
        </div>
    </footer>

<!-- jQuery 2.2.3 -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<? echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<? echo base_url('assets/js/pachart.js');?>"></script>

<!-- Autocomplete -->
<script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script>
    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
</script>

<!-- Datepicker -->
<script src="<?php echo base_url();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
<script type="application/javascript">
    $('input.dateinput').datepicker({
        language: "es",
        autoclose: true,
        clearBtn: true,
        orientation: "top",
        dateFormat: "dd-mm-yyyy"
    });
</script>

<!-- InputMask -->
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $("#dateinput").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("[data-mask]").inputmask();
</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
<script>
    $(function () {
        //Add text editor
        $("#art_desc").wysihtml5();
    });
</script>

</body>
</html>