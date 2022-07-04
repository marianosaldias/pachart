<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
	<div class="jumbotron_bar">
		<div class="containerwide">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/coleccion" class="active">Colección</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="containerwide">
		<div class="text-left">
			<h2>Colección</h2>	
		</div> 
	</div>	
</section>

{art_item}

<div class="container">
	<div class="row">
		<div class="containerblog col-md-8 col-md-offset-2">
			<h1>{title}</h1>
			<h5 class="m-b-2">{fechayear} | <b>{nombre} {apellido}</b></h5>

		    <img src="<?= base_url(); ?>img_collections/{fileart}" class="imageblog m-t-2">
		    <p class="m-t-1">{title} ({fechayear}) - {artdetail}</p>

			<hr>
			{text}

			<ul class="list-unstyled list-inline m-t-3 m-l-0">
			{tags}
				<li class="btn btn-sm btn-default m-r-1">{tagname}</li>
			{/tags}
			</ul>			

			<a href="javascript:history.go(-1)" class="btn linkback m-b-1"><i class="fa fa-angle-left" aria-hidden="true"></i>Volver</a>
		</div>
	</div>
</div>

<? 
$logued = $this->session->userdata('logged_in');
if ($logued != false) { 
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-b-2">
        	<hr>
            <h4><b>{title}</b></h4>
            <form id="formComment" method="post" action="">
            	<input type="hidden" class="form-control" name="idsendto" value="{iduser}">
            	<input type="hidden" class="form-control" name="idcont" value="{idart}">
            	<input type="hidden" class="form-control" name="tipocont" value="arte">
                <input type="hidden" class="form-control" name="subject" value="{title}">

                <div class="form-group">
                    <label class="control-label">Comentarios</label>
                    <textarea id="commentForm" name="comment" class="form-control mbott20" rows="3"></textarea> 
                </div>

            	<div align="right">
                    <button type="reset" class="btn btn-sm btn-default">Borrar</button>
                    <button id="sendcomment" type="submit" class="btn btn-sm btn-primary m-l-1">ENVIAR</button>
            	</div>
            </form>

			<div id="alertMsg" class="m-t-3" style="display: none;">
			    <div class="alert alert-success">
			        <div class="media">
			            <div class="media-left">
			                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
			            </div>
			            <div class="media-body">
			                <p class="margin-0 text-success" id="msgComment">Tu comentario de <b>"{title}"</b> ha sido enviado a <b>{nombre}</b>.</p>
			            </div>
			        </div>
			    </div>
			</div>            
        </div>
    </div>
</div>
<?
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<hr>
			<div align="center">
			    <img src="<?php echo base_url();?>/img_artist/{avatar}" class="img-circle avatarProfile m-t-1">
			    <h1>{nombre} {apellido}</h1>
			    <h4>{headline}</h4>
			</div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs m-t-4" id="profileTab" role="tablist">
              <li class="nav-item active col-xs-6">
                <a class="nav-link" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="true"><h5 class="text-center">Bio</h5></a>
              </li>
              <li class="nav-item col-xs-6">
                <a class="nav-link" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false"><h5 class="text-center">Experiencias</h5></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active p-t-3" id="bio" role="tabpanel" aria-labelledby="bio-tab">{bio}</div>
                <div class="tab-pane p-t-3" id="resume" role="tabpanel" aria-labelledby="resume-tab">{resume}</div>
            </div>
		</div>
	</div>
</div>

{/art_item}