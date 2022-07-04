<div class="containerwide">
	<div class="row">
		<hr>
		<div class="col-md-8">
			<h1>Colección</h1>
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

        <div class="col-md-12">

            <div class="large-12 columns">
                <div class="owl-carousel owl-theme" id="resultadoCollections">
                    {collection_entries}
                    <div class="item" data-type="collections" data-iduser="{iduser}" data-idcollection="{idart}" data-titlecol="{title}" data-imagename="{fileart}">
                        <div class="media-body text-left">
                            <div class="example-1 card">
                                <div class="wrapper" style="background-image: url(<?=base_url().'img_collections/'; ?>{fileart});">

                                    <div class="data">
                                        <div class="content">
                                            <span class="author"><span class="author"><h6><a href="<?=base_url(); ?>index.php/perfil?id={iduser}">{nombre} {apellido}</h6></a></span></span>
                                            <h5 class="title"><a href="<?= base_url(); ?>index.php/coleccion/view?idart={idart}">{title}</a></h5>

                                            <ul class="list-unstyled list-inline m-t-2 m-l-0">        
                                            {tags}
                                                <li class="btn btn-xs btn-default m-r-1">{tagname}</li>
                                            {/tags}
                                            </ul>                                                

                                            <p class="text">
                                                {artdetail}
                                            </p>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/collection_entries}
                </div>
            </div>

        </div> 

	</div>	
</div>	


