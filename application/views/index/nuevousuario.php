<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a class="active">Usuario nuevo</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> 

<div class="container">
    <div class="row">

        <div class="containerblog col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
        	<h1 class="col-xs-12">Crear mi cuenta de usuario</h1>
            <form action="" id="formForNewUser" method="post" name="formForNewUser">
		        
		        <div class="form-group col-md-6">
		            <label class="control-label">Nombre *</label> 
		            <input type="text" class="form-control" id="usernew_name" name="usernew_name" required="true">
		        </div>	
		        <div class="form-group col-md-6">
		            <label class="control-label">Apellido *</label> 
		            <input type="text" class="form-control" id="usernew_surname" name="usernew_surname" required="true">
		        </div>

		        <div class="form-group col-md-8">
		            <label class="control-label">Correo electrónico *</label> 
		            <input type="text" class="form-control" id="usernew_mail" name="usernew_mail" required="true">
		        </div>

		        <div class="form-group col-md-4">
		            <label class="control-label">Teléfono</label> 
		            <input type="text" class="form-control" id="usernew_phone" name="usernew_phone" required="true">
		        </div>

				<div class="form-group col-md-12">
					<label class="control-label">Contraseña *</label> 
					<div class="input-group">
						<input type="password" id="password_input" class="form-control" aria-label="Username" aria-describedby="password_visibility" name="pass_new">
						<span class="input-group-btn">
						<button type="button" class="input-group-addon fa fa-eye fa-3x btn  bg-primary text-white text-center" id="password_visibility" style="padding: 14px 16px 12px; margin-right:4px; background-color: #ddd; width: 100%;"></button>
						</span>
					</div>
				</div>

				<!--
				<div class="form-group col-md-12 m-b-3">
					<label class="control-label">Tags *</label>
					<select id="sol_tagsartist" name="sol_tagsartist[]" data-placeholder="Seleccione tags" class="form-control chosen-select" multiple tabindex="-1" style="width:100%;" required="true">
						<option value=""></option>
						<option value="Pintura">Pintura</option>
						<option value="Dibujo">Dibujo</option>
						<option value="Diseño gráfico">Diseño gráfico</option>
						<option value="Diseño de objetos">Diseño de objetos</option>
						<option value="Escultura">Escultura</option>
						<option value="Arquitectura">Arquitectura</option>
						<option value="Música">Música</option>
						<option value="Grabado">Grabado</option>
						<option value="Fotografía">Fotografía</option>
						<option value="Cine">Cine</option>
					</select>
				</div>		        
				-->

				<div class="form-group col-md-12 m-b-2">
					<label class="control-label">Comentarios</label> 
					<textarea class="form-control" id="usernew_comments" name="usernew_comments" required="true"></textarea>
				</div>

                <div class="form-group col-md-12 m-t-2" align="left">
                    <div class="g-recaptcha" data-sitekey="6LcWp1EUAAAAAKYpotFZ5DPoFPWZZc-ok0kAuYcl"></div>
                </div>

		        <div class="form-group col-md-12 m-t-2">
		            <a class="btn btn-primary" href="<?= base_url(); ?>index.php/index">Salir</a> 
		            <button class="btn btn-success m-l-1" type="submit">Crear mi usuario</button>
		        </div>

		    	<div id="alertMsg" class="col-xs-12 m-t-2" style="display: none;">
				    <div id="alertType" class="alert alert-success">
				        <div class="media">
				            <div class="media-left">
				                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
				            </div>
				            <div class="media-body" id="msgAddUsr">
				                <!-- Message -->
				            </div>
				        </div>
				    </div>
				</div>

			</form>
		</div>	
    </div>
</div>
