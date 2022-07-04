<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/perfil" class="active">Perfil</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> 

{artist_entries}
<div class="containerwide">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div align="center">
				<img src="<?php echo base_url();?>img_artist/{avatar}" class="img-circle avatarProfile">			
			</div>
		</div>	
	</div>	
</div>	
{/artist_entries}

    	
<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        	<h1 class="col-xs-12">Cambiar mi contraseña</h1>		
            <form action="" id="formChange" method="post" name="formChange">
		        <div class="form-group col-md-12">
		            <label class="control-label">Contraseña actual *</label> 
		            <input type="password" class="form-control" name="pass_actual">
		        </div>

				<div class="form-group col-md-12">
					<label class="control-label">Contraseña nueva *</label> 
					<div class="input-group">
						<input type="password" id="password_input" class="form-control" aria-label="Username" aria-describedby="password_visibility" name="pass_new">
						<span class="input-group-btn">
						<button type="button" class="input-group-addon fa fa-eye fa-3x btn bg-primary text-white text-center" id="password_visibility" style="padding: 14px 16px 12px; margin-right:4px; background-color: #ddd; width: 100%;"></button>
						</span>
					</div>
				</div>
		        
		        <div class="form-group col-xs-12 m-t-1">
		            <a class="btn btn-primary" href="<?= base_url(); ?>index.php/index">Salir</a> 
		            <button class="btn btn-default m-l-1" type="reset">Borrar</button>
		            <button class="btn btn-success m-l-1" type="submit">Cambiar</button>
		        </div>
			</form>

	    	<div id="alertMsg" class="col-xs-12 m-t-0" style="display: none;">
			    <div id="alertType" class="alert">
			        <div class="media">
			            <div class="media-left">
			                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
			            </div>
			            <div class="media-body">
			                <p class="margin-0 text-success" id="msgChangePass"></p>
			            </div>
			        </div>
			    </div>
			</div>

		</div>	
    </div>
</div>
