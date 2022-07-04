<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a class="active">Contacto</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> 

<div class="container">
    <div class="row">

        <div class="containerblog col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
        	<h1 class="col-xs-12">Contacto</h1>
            <form id="formContact" method="post" name="formContact">
		        
		        <div class="form-group col-md-12">
		            <label class="control-label">Nombre y apellido *</label> 
		            <input type="text" class="form-control" id="contact_name" name="contact_name">
		        </div>	

		        <div class="form-group col-md-6">
		            <label class="control-label">Correo electrónico *</label> 
		            <input type="mail" class="form-control" id="contact_mail" name="contact_mail">
		        </div>

		        <div class="form-group col-md-6">
		            <label class="control-label">Teléfono</label> 
		            <input type="mail" class="form-control" id="contact_tel" name="contact_tel">
		        </div>

				<div class="form-group col-md-12 m-b-3">
					<label class="control-label">Comentarios *</label> 
					<textarea class="form-control" id="contact_comments" name="contact_comments"></textarea>
				</div>  

                <div class="form-group col-md-12" align="left">
                	<div id="captchaContainer">
                		<div class="g-recaptcha" data-sitekey="6LcWp1EUAAAAAKYpotFZ5DPoFPWZZc-ok0kAuYcl"></div>
                	</div>
                </div>	
			    <div class="form-group">
			        <!-- The message container for captcha -->
			        <div class="col-xs-8 col-xs-offset-3" id="captchaMessage">
			        </div>
			    </div>                			

		        <div class="form-group col-md-12 m-t-2">
		            <a class="btn btn-primary" href="<?= base_url(); ?>index.php/index">Salir</a> 
		            <button class="btn btn-success m-l-1" type="submit">Enviar</button>
		        </div>

		    	<div id="alertMsg" class="col-md-12 m-t-2" style="display: none;">
				    <div id="alertType" class="alert alert-success">
				        <div class="media">
				            <div class="media-left">
				                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
				            </div>
				            <div class="media-body">
				                <p class="margin-0 text-success" id="msgContact"></p>
				            </div>
				        </div>
				    </div>
				</div>

			</form>
		</div>	
    </div>
</div>
