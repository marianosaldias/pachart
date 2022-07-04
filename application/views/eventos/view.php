<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
	<div class="jumbotron_bar">
		<div class="containerwide">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Eventos" class="active">Eventos</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="containerwide">
		<div class="text-left">
			<h2>{title}</h2>	
		</div> 
	</div>	
</section>

<div class="container">
	<div class="row">
		<div class="containerblog col-md-8 col-md-offset-2 m-b-2">
			<h5 class="m-b-2">Desde {fecha_inicio} al {fecha_fin}</b></h5>

		    <img src="<?= base_url(); ?>img_eventos/{eventfile}" class="imageblog m-t-2 m-b-4">

			<p>{text}</p>
			<hr>
			{actividades}
			<hr>
			<h4>Contacto</h4>
			<h5>{organizador}</h5>
			<h5>
				<a href="mailto:{email}">{email}</a><br />
				<p class="m-t-1">Tel.: {telefono}</p>
			</h5>
			<hr>
			<a href="javascript:history.go(-1)" class="btn linkback m-b-1"><i class="fa fa-angle-left" aria-hidden="true"></i>Volver</a>
		</div>
	</div>
</div>


