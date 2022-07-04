<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
	<div class="jumbotron_bar">
		<div class="containerwide">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/blog" class="active">Blog</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="containerwide">
		<div class="text-left">
			<h2>Blog</h2>	
		</div> 
	</div>	
</section>

<div class="container">
	<div class="row">
		<div class="containerblog col-md-8 col-md-offset-2 m-b-2">
			<h1>{title}</h1>
			<h5 class="m-b-2">{fecha} | <b>{nombre} {apellido}</b></h5>

		    <img src="<?= base_url(); ?>img_blog/{blogfile}" class="imageblog m-t-2 m-b-4">

			{text}
			<a href="javascript:history.go(-1)" class="btn linkback m-b-1"><i class="fa fa-angle-left" aria-hidden="true"></i>Volver</a>
		</div>
	</div>
</div>

<?php 
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
            	<input type="hidden" class="form-control" name="idcont" value="{id}">
            	<input type="hidden" class="form-control" name="tipocont" value="blog">
                <input type="hidden" class="form-control" name="subject" value="{title}">

                <div class="form-group">
                    <label class="control-label">Comentarios</label>
                    <textarea class="form-control mbott20" name="comment" rows="3"></textarea> 
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
