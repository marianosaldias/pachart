<div class="container">
	<div class="row">
		<hr>
		<div class="col-md-6 col-md-offset-3 m-b-2">
			<div class="row">
				<div class="col-xs-6">
					<h1>Blog</h1>
				</div>
		        <div class="col-xs-6" align="right">
		            <a href="<?=base_url(); ?>index.php/blog/nueva_nota" class="btn btn-sm btn-outlined btn-primary m-t-2">Agregar nueva nota</a>
		        </div>   	
			</div>
		</div>
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

	                <tbody id="resultadoBlogs">
	                	{blog_entries}
		                	<tr data-type="blogs" data-iduser="{iduser}" data-idblog="{id}" data-titleblog="{title}" data-imagenote="{blogfile}">
		                		<td class="col-sm-12">
		                			<h4>{title}</h4>
		                			<h6>{fecha} | <b>{nombre} {apellido}</b></h6>
			                		<div class="introblog">{text}</div>
			                		<br />
                                    <button class="btn btn-sm btn-primary m-r-1 btn_edit_blog"  title="Editar" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-pencil fa-1x"></i></button>
                                    <button class="btn btn-sm btn-danger m-r-1 btn_trash_blog" title="Eliminar" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-trash fa-1x"></i></button>
			                		<a href="<?= base_url(); ?>index.php/blog/view/{slug}" class="btn btn-sm btn-success">Leer artículo <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		                		</td>
		                	</tr>
	                	{/blog_entries}
	                </tbody>			

				</table>	
			</div>	

			<div id="alertMsgBlogProfile" class="col-xs-12 m-t-2" style="display: none;">
				<div id="alertTypeBl">
					<div class="media">
					    <div class="media-left">
					        <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
					    </div>
					    <div class="media-body" id="msgAlertBlProf">
					        <!-- Alert content -->
					    </div>
					</div>
				</div>
			</div>        

		</div>
	</div>
</div>	


