<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/coleccion" class="active">Colección</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="containerwide">
        <div class="col-sm-8 text-left margin0 pad0 m-t-1">
            <h1 class="margin0">Colección</h1>   
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
        <div class="col-md-12 m-b-2">
            <h4 class="m-t-2">
            	<b>{count}</b> obra(s) encontrada(s).
            </h4>

            <div class="table-responsive">
                <table id="tableColeccion" 
                    data-toggle="table" data-pagination="true" 
                    data-toolbar="#toolbar" data-toolbar-align="right" 
                    data-classes="table" 
                    data-search="true" data-search-align="left" 
                    data-show-refresh="false">       
                    
                    <thead>
                        <tr>
                            <th data-field="nombre" data-sortable="true">Colección</th>
                        </tr>
                    </thead>
                    <tbody>

                    {art_entries}

                        <tr class="col-lg-3 col-md-4 col-sm-6 pad0">
                            
                            <td class="bordernone">
                                <div class="media-body text-left">

                                    
                                    <div class="example-1 card">
                                        <div class="wrapper" style="background-image: url(<?=base_url();?>img_collections/{fileart});">
                                            <!--
                                            <div class="date">
                                                <span class="day"></span>
                                                <span class="day"></span> 
                                                <span class="month"></span> 
                                                <span class="year"></span>
                                            </div>
                                            -->

                                            <div class="data">
                                                <div class="content">
                                                    <a href="<?= base_url();?>index.php/perfil?id={iduser}"><span class="author"><h5>{fechayear} - {nombre} {apellido}</h5></span></a>
                                                    <h5 class="title">
                                                        <a href="<?= base_url(); ?>index.php/coleccion/view?idart={idart}">{title}</a>
                                                    </h5>
                                                    <ul class="list-unstyled list-inline m-l-0">
                                                    {tags}
                                                        <li class="btn btn-xs btn-default m-r-1">{tagname}</li>
                                                    {/tags}
                                                    </ul>
    												<p class="text">
    													{artdetail}
    												</p>

                                                    <!--
                                                    <label class="menu-button" for="show-menu-2"><span></span>
                                                    </label>
                                                	-->
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

    		  		
    		  		{/art_entries}
                        
                    </tbody>
                </table>
            </div>
        </div>
    	
    </div>
</div>


