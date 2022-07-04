<div class="containerwide">
	<div class="row">
		
		<div class="col-xs-5">
			<h6>Colección</h6>
            <h2>Novedades</h2>			
		</div>
		<div class="col-xs-7" align="right">
            <a href="<?=base_url(); ?>index.php/coleccion" class="btn btn-sm btn-outlined btn-primary m-t-3">Ver toda la coleccion <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

		<div class="clearfix"></div>
        
        <div class="col-md-12">
            <div class="m-t-2">
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">
                        {collection_entries}
                        <div class="item">
                            <div class="media-body text-left">
                                <div class="example-1 card">
                                    <div class="wrapper" style="background-image: url(<?=base_url().'img_collections/'; ?>{fileart});">
                                        <!--
                                        <div class="date">
                                            <span class="day">{fechayear}</span>
                                            <span class="day"></span> 
                                            <span class="month"></span> 
                                            <span class="year"></span>
                                        </div>
                                        -->
                                   
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
                                                <!--<label class="menu-button" for="show-menu-2"><span></span></label>-->
                                            </div>
                                            <input id="show-menu-2" type="checkbox">
                                            <ul class="menu-content">
                                                <li>
                                                    <a class="fa fa-bookmark-o" href="#"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-heart-o" href="#"><span>47</span></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-comment-o" href="#"><span>8</span></a>
                                                </li>
                                            </ul>
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

        <hr class="pad0">
	</div>

</div>	


