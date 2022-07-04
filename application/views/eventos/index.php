<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/eventos" class="active">Eventos</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="containerwide">
        <div class="col-sm-8 text-left margin0 pad0 m-t-1">
            <h1 class="margin0">Eventos</h1>   
        </div> 
        <!--
		<div class="col-sm-4 margin0 pad0 m-t-1">
			<select name="selectType" id="selectType" class="form-control m-t-2"> 
				<option value="">- Seleccione temática -</option>
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
		-->
    </div>  
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-b-2 m-t-1">
	        <h4>
	        	<b>{count}</b> evento(s) encontrado(s).
	        </h4>  
	        <div class="table-responsive">
	            <table id="tableEvents"
	                data-toggle="table" data-pagination="true" 
	                data-page-list="[10, 25, 50, 100, ALL]" 
	                data-toolbar="#toolbar" data-toolbar-align="right" 
	                data-classes="table" 
	                data-search="true" data-search-align="left" 
	                data-show-refresh="false">       
	                
	                <thead>
	                    <tr>
	                        <th data-field="nombre" data-sortable="true">Eventos</th>
	                    </tr>
	                </thead>

	                <tbody id="resultado">
	                	{eventos_entries}
		                	<tr>
		                		<td class="col-md-6">
									<h1>{title}</h1>
									<h5 class="m-b-2">Desde {fecha_inicio} al {fecha_fin}</b></h5>

		                			<img src="<?= base_url(); ?>img_eventos/{eventfile}" class="img-responsive m-t-2 m-b-2" style="width:100%; border: 10px solid #cccccc;">

			                		<div class="introblog"><p>{text}</p></div>
			                		
			                		<div class="clearfix"></div>
			                		<a href="<?= base_url(); ?>index.php/eventos/view/{slug}" class="btn linktonote m-b-1">Detalle del evento<i class="fa fa-angle-right" aria-hidden="true"></i></a>

			                		<ul class="list-unstyled list-inline m-t-2">		
			                		{tags}
			                			<li>
			                				<a href="http://localhost/pachart/index.php/blog?id={tagname}" class="btn btn-sm btn-default">{tagname}</a>
			                			</li>

			                		{/tags}
			                		</ul>

		                		</td>
		                	</tr>
	                	{/eventos_entries}
	                	
	                </tbody>			

				</table>	
			</div>	

		</div>
	</div>
</div>	


