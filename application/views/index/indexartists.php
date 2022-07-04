<div class="containerwide">
    <div class="row">
        <hr>

        <div class="col-xs-7">
            <h6>Artistas</h6>
            <h2>Recién llegados</h2>        
        </div>
        <div class="col-xs-5" align="right">
            <a href="<?=base_url(); ?>index.php/artistas" class="btn btn-sm btn-outlined btn-primary m-t-3">Ver todos <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                        {artists_entries}
                        <div class="item">
                            <div class="media-body text-left">
                                <div class="example-1 card">
                                    <div class="wrapper" style="background-image: url(<?=base_url().'img_artist/'; ?>{avatar});">
                                   
                                        <div class="data">
                                            <div class="content">
                                                <!--<span class="author"><span class="author"><h5>{nombre} {apellido}</h5></span></span>-->
                                                <h5 class="title"><a href="<?= base_url(); ?>index.php/perfil?id={iduser}">{nombre} {apellido}</a></h5>

                                                <ul class="list-unstyled list-inline m-t-2 m-l-0">        
                                                {tagsartist}
                                                    <li class="pad0"><a href="<?=base_url(); ?>index.php/artistas?tag={tagname}" class="btn btn-xs btn-default m-r-1">{tagname}</a></li>
                                                {/tagsartist}
                                                </ul>                                                

                                                <p class="text">
                                                    {headline}
                                                </p>
                                                <!--<label class="menu-button" for="show-menu-2"><span></span></label>-->
                                            </div>
                                            <input id="show-menu-2" type="checkbox">
                                            <!--
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
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/artists_entries}
                    </div>
                </div>
            </div>
        </div>        

	</div>
</div>	


