<div class="containerwide">
	<div class="row">
		<hr>
		<div class="col-xs-6">
			<h1>Colección</h1>
		</div>
        <div class="col-xs-6" align="right">
            <a href="<?=base_url(); ?>index.php/upload/form" class="btn btn-sm btn-outlined btn-primary m-t-2">Agregar nueva obra</a>
        </div>        
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

                                    <div class="date" style="background: none;">
                                        <button class="btn btn-sm btn-primary btn_edit_col m-r-1" title="Editar" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-pencil fa-1x"></i></button>  
                                        <button class="btn btn-sm btn-danger btn_trash_col" title="Eliminar" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-trash fa-1x"></i></button>
                                    </div>
                               
                                    <div class="data">
                                        <div class="content">
                                            <span class="author"><span class="author"><h6><a href="<?=base_url(); ?>index.php/perfil?id={iduser}">{nombre} {apellido}</h6></a></span></span>
                                            <h5 class="title"><a href="<?= base_url(); ?>index.php/coleccion/view?idart={idart}">{fechayear} - {title}</a></h5>

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

        <div id="alertMsgColProfile" class="col-xs-12 m-t-2" style="display: none;">
            <div id="alertTypeCol">
                <div class="media">
                    <div class="media-left">
                        <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
                    </div>
                    <div class="media-body" id="msgAlertColProf">
                        <!-- Alert content -->
                    </div>
                </div>
            </div>
        </div>        

	</div>	
</div>	


