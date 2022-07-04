<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{blog_heading}</h1>
		</div>
		<div class="col-md-4">
			<select name="selectType" id="selectType" class="form-control m-t-2"> 
			  <option value="">- Seleccione -</option>
			  <option value="fotografia">fotografia</option>
			  <option value="musica">musica</option>
			  <option value="pintura">pintura</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="resultado">
				{blog_entries}
				    <h3>{title}</h3>
				    <p>{text}</p>
				    <a href="http://localhost/pachart/index.php/blog/view/{slug}" class="btn linktonote m-b-1">View article<i class="fa fa-angle-right" aria-hidden="true"></i></a>
				    <hr>

				    <!--<a><i class="fa fa-angle-right" aria-hidden="true"></i> Ver nota</a>-->
				{/blog_entries}
			</div>

		</div>
	</div>

</div>

<!--
Ahora se carga en el footer!!!
<script src="<?php //echo base_url();?>assets/js/myajaxfilter.js"></script>
-->