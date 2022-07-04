{artist_entries}

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

<div class="containerwide">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div align="center">
				<img src="<?php echo base_url();?>img_artist/{avatar}" class="img-circle avatarProfile">			
			</div>
		</div>	
	</div>	
</div>	
    	
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <!--
            <div style="color:red">
                <? echo validation_errors(); ?><? if(isset($error)){print $error;} ?>
            </div>
        	-->
            <form action="" id="formUpdateProfile" method="post" name="formUpdateProfile">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs m-t-4" id="profileTab" role="tablist">
                  <li class="nav-item active col-xs-3 pad0">
                    <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true"><h6 class="text-center">Datos</h6></a>
                  </li>
                  <li class="nav-item col-xs-3">
                    <a class="nav-link" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="true"><h6 class="text-center">Bio</h6></a>
                  </li>
                  <li class="nav-item col-xs-6 pad0">
                    <a class="nav-link" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false"><h6 class="text-center">Experiencias</h6></a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="data" role="tabpanel" aria-labelledby="bio-tab">
		                <div class="form-group col-xs-6 m-t-3">
		                    <label class="control-label">Nombre *</label> 
		                    <input class="form-control" id="prof_nombre" name="prof_nombre" type="text" value="{nombre}" disabled="">
		                </div>
		                <div class="form-group col-xs-6 m-t-3">
		                    <label class="control-label">Apellido *</label> 
		                    <input type="text" class="form-control" id="prof_apellido" name="prof_apellido" type="text" value="{apellido}" disabled>
		                </div>

		                <div class="form-group col-xs-12">
		                    <label class="control-label">Headline *</label> 
		                    <input class="form-control" id="prof_headline" name="prof_headline" type="text" value="{headline}">
		                </div>

		                <div class="form-group col-xs-6">
		                    <label class="control-label">Fecha de nacimiento</label>
		                    <div class="input-group">
		                        <input type="text" id="prof_fechanac" name="prof_fechanac" class="form-control pull-right dateinput" data-inputmask='"mask": "99/99/9999"' data-mask placeholder="dd/mm/aaaa" value="<?= set_value('prof_fechanac'); ?>">
		                        <div class="input-group-addon bg-primary p-l-2 p-r-2">
		                            <i class="fa fa-calendar"></i>
		                        </div>
		                    </div>
		                    <!-- /.input group -->
		                </div>                    

		                <div class="form-group col-xs-6">
		                    <label class="control-label">Teléfono *</label>
		                    <div class="input-group col-xs-12">
		                        <input type="text" id="prof_tel" name="prof_tel" class="form-control pull-right" data-inputmask='"mask": "(999[9]) 999[9]-999[9]"' data-mask value="{telefono}">
		                    </div>
		                    <!-- /.input group -->
		                </div> 

		                <div class="form-group col-xs-12">
		                	<hr>
		                    <label class="control-label">Tags *</label>
		                    <select id="prof_tagsartist" name="prof_tagsartist[]" data-placeholder="Seleccione tags" class="form-control chosen-select" multiple tabindex="-1" style="width:100%;">
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

		                    <label class="m-t-1">Tus tags anteriores:</label>
		                    <ul class="list-unstyled list-inline m-l-0">    
		                    {tagsartist}
		                        <li class="btn btn-xs btn-default m-r-1 m-l-0">{tagname}</a></li>
		                    {/tagsartist}
		                    </ul> 
		                    <hr>
		                </div>

                    </div>

                    <!-- Bio -->
                    <div class="tab-pane p-t-3" id="bio" role="tabpanel" aria-labelledby="bio-tab">
		                <div class="form-group col-xs-12">
		                    <label class="control-label">Bio *</label> 
		                    <textarea class="form-control" id="prof_bio" name="prof_bio" style="min-height: 350px;">{bio}</textarea>
		                </div>                    	
                    </div>

                    <!-- Resume -->
                    <div class="tab-pane p-t-3" id="resume" role="tabpanel" aria-labelledby="resume-tab">
		                <div class="form-group col-xs-12">
		                    <label class="control-label">Experiencias *</label> 
		                    <textarea class="form-control" id="prof_resume" name="prof_resume" style="min-height: 350px;">{resume}</textarea>
		                </div>                    	
                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="form-group col-xs-12">
                    <a class="btn btn-primary" href="<?= base_url(); ?>index.php/index">Salir sin guardar</a> 
                    <button class="btn btn-success m-l-1" type="submit">Guardar</button>
                </div>
            </form>

	    	<div id="alertMsg" class="col-xs-12 m-t-0" style="display: none;">
			    <div id="alertType" class="alert">
			        <div class="media">
			            <div class="media-left">
			                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
			            </div>
			            <div class="media-body">
			                <p class="margin-0 text-success" id="msgProfileForm"></p>
			            </div>
			        </div>
			    </div>
			</div>
        
        </div>

    </div>
</div>
{/artist_entries}