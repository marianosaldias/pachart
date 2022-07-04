<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/artistas" class="active">Artistas</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="containerwide">
        <div class="col-sm-8 text-left margin0 pad0 m-t-1">
            <h1 class="margin0">Artistas</h1>   
        </div> 
        <!--
        <div class="col-sm-4 margin0 pad0 m-t-1">
            <select name="selectType" id="selectType" class="form-control m-t-2"> 
                <option value="">- Seleccione temática -</option>
                <option value="fotografia">fotografia</option>
                <option value="musica">musica</option>
                <option value="pintura">pintura</option>
            </select>
        </div>        
        -->
    </div>  
</section>

<div class="containerwide">
    <div class="row">
        <div class="col-md-12">
            <h4>
                <b>{count}</b> artista(s) encontrado(s). 
                <!--<a href="<?php echo base_url();?>/index.php/artistas" class="btn btn-sm btn-default"><i class="fa fa-times" aria-hidden="true"></i> {tag}</a>-->
            </h4>             
            
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
        <div class="col-md-12 m-b-2">
            
            <div class="table-responsive">
                <table id="table"
                    data-toggle="table" data-pagination="true" 
                    data-toolbar="#toolbar" data-toolbar-align="right" 
                    data-classes="table" 
                    data-search="true" data-search-align="left" 
                    data-show-refresh="false">       
                    
                    <thead>
                        <tr>
                            <th data-field="nombre" data-sortable="true">Artistas</th>
                        </tr>
                    </thead>

                    <tbody id="resultado">
                        {artist_entries}

                            <tr class="col-lg-3 col-md-4 col-sm-6 pad0">
                                <td class="bordernone">
                                    
                                    <div class="media-body text-left">

                                        <div class="example-1 card">
                                            <div class="wrapper" style="background-image: url(<?=base_url();?>img_artist/{avatar});">

                                                <div class="data">
                                                    <div class="content">
                                                        <!--<span class="author"><h5></h5></span>-->
                                                        <h5 class="title">
                                                            <a href="<?php echo base_url();?>index.php/perfil?id={iduser}">{nombre} {apellido}</a>
                                                        </h5>

                                                        <ul class="list-unstyled list-inline m-l-0">
                                                        {tagsartist}
                                                            <li class="pad0"><a href="<?= base_url();?>index.php/artistas?tag={tagname}" class="btn btn-xs btn-default m-r-1">{tagname}</a></li>
                                                        {/tagsartist}
                                                        </ul>
                                                        
                                                        <p class="text">{headline}</p>

                                                        <!--<label class="menu-button" for="show-menu-2"><span></span></label>-->
                                                    </div>
                                                    <!--
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
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                
                            </tr>


                        {/artist_entries}
                    </tbody>            

                </table>    
            </div>  

        </div>
    </div>
</div>  