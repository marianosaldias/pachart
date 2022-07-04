		<div class="col-md-6 m-b-2">
			<h1>Eventos</h1>
			<h4 class="mtop-10">Próximos eventos</h4>
	        
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
	                        <th data-field="nombre" data-sortable="false">Eventos</th>
	                    </tr>
	                </thead>

	                <tbody id="resultado">
	                	{events_entries}
		                	<tr>
		                		<td class="col-lg-12">
		                			<h3>{title}</h3>
		                			<h6>Desde {fecha_inicio} a {fecha_fin}</b></h6>
			                		<div class="introblog"><p>{text}</p></div>
			                		<p><b>{organizador}</b></p>
			                		<br />
			                		<a href="<?= base_url(); ?>index.php/eventos/view/{slug}" class="btn linktonote m-b-1">Ver evento <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		                		</td>
		                	</tr>
	                	{/events_entries}
	                	
	                </tbody>			

				</table>	
			</div>	

	        <div align="center" class="m-t-1 m-b-1">
	        	<a href="<?=base_url().'index.php/eventos'; ?>" class="btn btn-sm btn-outlined btn-primary">Ver calendario de eventos <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	        </div>			

		</div>
	</div>
</div>	


