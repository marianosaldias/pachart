<section class="jumbotron jumboarticle" style="background-image:url(<?php echo base_url();?>assets/images/backjumboblog.jpg); margin-top:-20px; min-height:180px;">
    <div class="jumbotron_bar">
        <div class="containerwide">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="<?php echo base_url();?>index.php/index">Inico</a></li>
                        <li><a href="<?php echo base_url();?>index.php/inbox" class="active">Buzón de mensajes</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="containerwide">
        <div class="col-sm-12 text-left margin0 pad0 m-t-1">
            <h2 class="margin0">Buzón de mensajes</h2>   
        </div> 
    </div>  
</section>

<!-- Main content -->
<section class="containerwide m-t-2">
    <div class="row">
        <div class="col-lg-12 m-b-2 containerblog">
            <div id="inbox" class="panel panel-default">
                <div class="panel-heading text-left">
                    <h3 class="pull-left">Bandeja de entrada</h3>
                    <div class="pull-right">
                        <button id="btnRedactar" class="btn btn-success btn-sm m-t-1">Nuevo mensaje</button>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /.box-header -->
                <div class="panel-body no-padding">
                    <div class="table-responsive">

                    <table id="tableInbox" 
                        data-toggle="table" data-pagination="true" 
                        data-toolbar="#toolbar" data-toolbar-align="right" 
                        data-classes="table table-hover table-striped" 
                        data-search="true" data-search-align="left" 
                        data-show-refresh="false">       

                            <thead>
                            	<tr>
                                	<th class="col-xs-2" width="20%" data-field="from" data-sortable="true">De</th>
                                    <th class="col-xs-3" data-field="subject" data-sortable="true">Asunto</th>
                                    <th class="col-xs-5">Mensaje</th>
                                    <th class="col-xs-2 text-right" data-field="fecha" data-sortable="true">Fecha</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	{inbox_entries}
                                
                                <tr data-idmessage="{idmessage}" data-iduserfrom="{iduserfrom}" data-idcontent="{idcontent}" data-tipocontent="{tipocontent}">
                                	<td class="bordernone" data-prop="nombre">{nombre} {apellido}</td>
                                    <td class="bordernone" data-prop="submit"><span class="txtcoment">{subject}</span></td>
                                    <td class="bordernone" data-prop="comment" id="rowinbox"><span class="txtcoment">{comment}</span></td>
                                    <td class="bordernone text-right" data-prop="fecha">{fechamessage}</td>
                                    <td class="bordernone"><button class="btn btn-xs btn-info btn-table-hidden" name="{idmessage}">Leer</button></td>
                                </tr>
                            	
                                {/inbox_entries}
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /. box -->
            </div>          
            
            <div id="readMsg" class="panel panel-default" style="display: none;">
                <div class="panel-heading bg-aqua text-white text-left">
                    <h3 id="readSubmit"></h3>
            
                    <div class="box-tools pull-right" style="margin-top: -45px;">
                    	<button id="btnCloseReadMsg" class="btn btn-sm text-white" data-toggle="tooltip" title="Cerrar"><i class="fa fa-close"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="panel-body no-padding">
                    <div class="mailbox-read-info">
                        <!--<h3 id="readSubmit"></h3>-->
                        <div class="hidden" id="idmsg"></div>
                        <h5>De: <span id="readNombre"></span>
                        	<span class="mailbox-read-time pull-right" id="readFecha"></span>
                        </h5>
                    </div>
                    <!-- /.mailbox-read-info -->
                    <div class="mailbox-controls bg-gray-light pull-left m-t-1 m-b-1" style="width:100%;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Borrar">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Responder">
                                <i class="fa fa-reply"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <!--
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Imprimir">
                            <i class="fa fa-print"></i>
                        </button>
                        -->
                    </div>
                    <!-- /.mailbox-controls -->
                    <div class="clearfix"></div>
                    <div class="mailbox-read-message" id="readMessage">
                    	<!--contenido del mensaje -->
                    </div>
                    <!-- /.mailbox-read-message -->
                </div>
                <!-- /.box-body -->
                <!-- /.box-footer -->
                <div class="panel-footer">
                    <div class="pull-right">
                        <button id="btnResponderMsg" type="button" class="btn btn-sm btn-info">Responder</button>
                    </div>
                    <button id="borrarMsg" type="button" class="btn btn-sm btn-danger">Borrar</button>
                </div>
                <!-- /.box-footer -->
            </div>

            <div id="writeMsg" class="panel panel-default" style="display: none;">
                <div class="panel-heading bg-success text-white text-left">
                    <h3>Responder mensaje</h3>
                    <div class="box-tools pull-right" style="margin-top: -45px;">
                        <button class="btn btn-sm text-white" data-toggle="tooltip" id="btnCloseWriteMsg" title="Cerrar"><i class="fa fa-close"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <form action="" id="formComment" method="post" name="formComment">
                    <div class="panel-body">
                        <input class="form-control" id="writeIdUserTo" name="idsendto" type="hidden" value=""> 
                        <input class="form-control" id="writeIdContent" name="idcont" type="hidden" value=""> 
                        <input class="form-control" id="writeTipoContent" name="tipocont" type="hidden" value="">
                        <div class="form-group">
                            <label class="control-label">Para</label> 
                            <input class="form-control" id="writeNombre" value="">
                        </div>
                        <div class="form-group m-b-2">
                            <label class="control-label">Asunto</label> 
                            <input class="form-control" id="writeSubmit" name="subject" value="">
                        </div>
                        <div class="form-group m-t-1">
                            <textarea class="form-control" id="compose-textarea" name="comment" style="height: 300px"></textarea>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="panel-footer">
                        <div class="pull-right">
                            <!--<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>-->
                            <button class="btn btn-sm btn-success" type="submit">Enviar</button>
                        </div>
                        <button class="btn btn-sm btn-default" id="btnDesechaMsg" type="reset">Desechar</button>
                    </div>
                </form>
            </div><!-- /.box-footer -->

            <div id="writeNewMsg" class="panel panel-default" style="display: none;">
                <div class="panel-heading bg-success text-white text-left">
                    <h3>Nuevo mensaje</h3>
                    <div class="box-tools pull-right" style="margin-top: -45px;">
                        <button class="btn btn-sm text-white" data-toggle="tooltip" id="btnCloseWriteNewMsg" title="Cerrar"><i class="fa fa-close"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <form action="" id="formMessage" method="post" name="formMessage">
                    <div class="panel-body">
                        <input class="form-control" id="writeMsgIdContent" name="idcont" type="hidden" value="0"> 
                        <input class="form-control" id="writeMsgTipoContent" name="tipocont" type="hidden" value="chat">
                        <div class="form-group">
                            <label class="control-label">Para</label> 
                            <div class="form-group">
                                <select class="form-control chosen-select" tabindex="-1" style="width:100%;" id="writeMsgIdUserTo" name="idsendto" placeholder="Seleccione destinatario">
                                    <option value="0" selected="selected">Seleccione opcion</option>
                                    {artist_entries}
                                        <option value="{iduser}">{apellido}, {nombre}</option>
                                    {/artist_entries}
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-b-2">
                            <label class="control-label">Asunto</label> 
                            <input class="form-control" id="writeMsgSubmit" name="subject" value="">
                        </div>
                        <div class="form-group m-t-1">
                            <textarea class="form-control" id="compose-msg-textarea" name="comment" style="min-height: 300px;"></textarea>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="panel-footer">
                        <div class="pull-right">
                            <!--<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>-->
                            <button class="btn btn-sm btn-success" type="submit">Enviar</button>
                        </div>
                        <button class="btn btn-sm btn-default" id="btnDesechaNewMsg" type="reset">Desechar</button>
                    </div>
                </form>
            </div><!-- /.box-footer -->

            <!-- Alert -->
            <div class="m-t-3" id="alertMsg" style="display: none;">
                <div class="alert alert-success">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-arrow-circle-o-right fa-fw fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <p class="margin-0 text-success" id="msgComment"></p>
                        </div>
                    </div>
                </div>
            </div><!-- /. box -->

          
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>