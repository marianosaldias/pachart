<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/busqueda" class="active">Búsquedas</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="containerwide">
        <div class="col-sm-8 text-left margin0 pad0 m-t-1">
            <h1 class="margin0">Búsquedas</h1>   
        </div> 
    </div>  
</section>

<section>
    <div class="container" style="width:95%; margin:0 2.5%;">
        <div class="row">
            <div class="col-md-3 col-md-3 col-sm-4 mtop20">
            	<form action="" id="formBusqueda" method="post" name="formBusqueda">
                    <h4 class="grid-title"><i class="fa fa-filter"></i> Filtros</h4>
                    <hr>
                    <h6 class="m-t-1"><b>Categoría:</b></h6>
                    <div class="form-group">
                        <select data-placeholder="Seleccione fuente" class="form-control chosen-select" name="tablename" tabindex="-1" style="width:100%;" required="true">
                            <option value="">Seleccione fuente</option>
                            <option value="collections">Colección</option>
                            <option value="blogs">Blog</option>
                        </select>
                    </div>
                    <h6 class="m-t-2"><b>Artista:</b></h6>
                    <div class="form-group">
                        <select class="form-control chosen-select" tabindex="-1" name="artista" style="width:100%;">
                            <option value="0" selected>Todos los artistas</option>
                            {artist_entries}
                                <option value="{iduser}">{apellido}, {nombre}</option>
                            {/artist_entries}
                        </select>
                    </div>
                    <h6 class="m-t-2"><b>Tipo:</b></h6>
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value=""> Todos
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Dibujo"> Dibujo
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Pintura"> Pintura
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Fotografía"> Fotografía
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Diseño gráfico"> Diseño gráfico
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Grabado"> Grabado
                      </label>
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Escultura"> Escultura
                      </label>                                            
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Diseño de objetos"> Diseño de objetos
                      </label>   
                      <label class="btn btn-sm btn-default" style="margin:3px;">
                        <input type="radio" name="tipo" value="Musica"> Musica
                      </label>                        
                    </div>
                    <h6 class="m-t-2"><b>Etiqueta:</b></h6>
                    <div class="form-group">
                        <select class="form-control chosen-select" tabindex="-1" name="tag" style="width:100%;">
                            <option value="" selected>Todas las etiqueta</option>
                            <option value="andorra">Andorra</option>
                            <option value="madera">Madera</option>
                            <option value="metal">Metal</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="animal">Animal</option>
                            <option value="Monocromía">Monocromía</option>
                            <option value="Cubismo">Cubismo</option>
                            <option value="php">PHP</option>
                            <option value="pintura">Pintura</option>
                            <option value="cuerpo">Cuerpo</option>                            
                            <option value="netherlands">Netherlands</option>
                            <option value="blur">Blur</option>
                        </select>
                    </div>                    
                    <div class="padding"></div>
                    <!--
                    <h6>Año:</h6>
    				<div class="input-group input-daterange width100">
    				    <input type="text" id="fechaVigInicio" name="fechaDesde" class="form-control">
    				    <span class="input-group-addon bg-primary"> HASTA </span>
    				    <input type="text" id="fechaVigFin" name="fechaHasta" class="form-control">
    				</div>
                    -->
                    
                    <button type="submit" class="btn btn-sm btn-outlined btn-primary btn-block m-t-2">
                    Buscar</button>

                    <div class="padding"></div>
                    <!--
                    <h4>By price:</h4>Between
                    <div id="price1">
                        $300
                    </div>to
                    <div id="price2">
                        $800
                    </div>
                    <div class="slider-primary">
                        <div class="slider slider-horizontal" style="width: 152px;">
                            <div class="slider-track">
                                <div class="slider-selection" style="left: 30%; width: 50%;"></div>
                                <div class="slider-handle round" style="left: 30%;"></div>
                                <div class="slider-handle round" style="left: 80%;"></div>
                            </div>
                            <div class="tooltip top hide" style="top: -30px; left: 50.1px;">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner">
                                    300 : 800
                                </div>
                            </div><input class="slider" data-slider-max="1000" data-slider-min="0" data-slider-step="1" data-slider-tooltip="hide" data-slider-value="[300,800]" type="text" value="">
                        </div>
                    </div>
                    -->
            	</form>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 mtop20" id="resultadobusqueda">
                <!-- Resultados de la busqueda -->
                <h4 class="grid-title">Búsquedas</h4>
                <hr>                
                <div class="m-t-2">
                    <div class="alert alert-info">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
                            </div>
                            <div class="media-body">
                                <p>Dale valores a los filtros para comenzar con tus búquedas.</p>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</section>

