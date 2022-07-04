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
	<link rel="stylesheet" href="<?php echo base_url();?>dist-palta/css/font-awesome.css">

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-12 m-b-2">
			<h2>Carga de News</h2>

			<form id="myajaxform" method="post">
				<h5>Title</h5>
				<input type="text" name="title" size="50" class="form-control" />
				
				<h5>Tipo</h5>
				<select name="tiponews" class="form-control">
					<option value="">- Seleccionar tipo -</option>
					<option value="musica">Musica</option>
					<option value="pintura">Pintura</option>
					<option value="fotografia">Fotografia</option>
				</select>
				
				<h5>Text</h5>
				<textarea name="text" rows="3" class="form-control"></textarea>

				<button type="submit" class="btn btn-primary m-t-2">Guardar</button>
				<button type="reset" class="btn btn-contorno m-t-2">Reset</button>
			</form>

		</div>
	</div>
</div>


<footer class="main-footer" style="padding-bottom: 32px; padding-top: 60px; border-top: 1px solid #cacaca; background:#FFFFFF; margin-left: 0px !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="image-responsive" src="<?php echo base_url();?>dist-palta/img/logoMinisterio.png" alt="Ministerio de Producción">
                <br>
                <p class="text-muted small">Los contenidos de Produccion.gob.ar están licenciados bajo <a href="https://creativecommons.org/licenses/by/2.5/ar/">Creative Commons Reconocimiento 2.5 Argentina License</a>
                </p>
            </div>

        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Success</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>Success!!! :)</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Error</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>Error!!! :(</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Done</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2>That's all!!! ;)</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- jQuery 2.2.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/myajaxform.js"></script>

</body>
</html>