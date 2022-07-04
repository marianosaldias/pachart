<div class="container">
	<div class="row">
		<hr>
		<div class="col-md-6 m-b-2">
			
			<h1>Blog</h1>
			<h4 class="mtop-10">Ultimas publicaciones</h4>
	        
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
	                        <th data-field="nombre" data-sortable="false">Blog</th>
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
			                		<a href="<?= base_url(); ?>index.php/blog/view/{slug}" class="btn linktonote m-b-1">Leer artículo <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		                		</td>
		                	</tr>
	                	{/blog_entries}
	                	
	                </tbody>			

				</table>	
			</div>	

	        <div align="center" class="m-t-1 m-b-1">
	        	<a href="<?= base_url(); ?>index.php/blog" class="btn btn-sm btn-outlined btn-primary">Ver toda las publicaciones <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	        </div>			

		</div>


