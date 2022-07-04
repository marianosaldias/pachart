<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-b-2">
			<hr>
			<h1>Blog</h1>
		</div>
		<!--
		<div class="col-md-4">
			<select name="selectType" id="selectType" class="form-control m-t-2"> 
			  <option value="">- Seleccione -</option>
			  <option value="fotografia">fotografia</option>
			  <option value="musica">musica</option>
			  <option value="pintura">pintura</option>
			</select>
		</div>
		-->
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 m-b-2">
	        
	        <div class="table-responsive">
	            <table id="tableBlog"
	                data-toggle="table" data-pagination="true" 
	                data-page-list="[10, 25, 50, 100, ALL]" 
	                data-toolbar="#toolbar" data-toolbar-align="right" 
	                data-classes="table" 
	                data-search="true" data-search-align="left" 
	                data-show-refresh="false">       
	                
	                <thead>
	                    <tr>
	                        <th data-field="nombre" data-sortable="true">Blog</th>
	                    </tr>
	                </thead>

	                <tbody id="resultado">
	                	{blog_entries}
		                	<tr>
		                		<td class="col-lg-12">
		                			<h3>{title}</h3>
		                			<h6>{fecha} | <b>{nombre} {apellido}</b></h6>
			                		<div class="introblog">{text}</div>
			                		<br />
			                		<a href="<?= base_url(); ?>index.php/blog/view/{slug}" class="btn btn-sm btn-success m-l-1">Leer artículo <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		                		</td>
		                	</tr>
	                	{/blog_entries}
	                	
	                </tbody>			

				</table>	
			</div>	

            <div align="center" class="m-t-2">
            	<a href="" class="btn btn-sm btn-outlined btn-primary">Ver todas la publicaciones <i class="fa fa-angle-right m-l-1" aria-hidden="true"></i></a>
            </div>			

		</div>
	</div>
</div>	


