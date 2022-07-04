    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Alta de Colección</h1>

                <!--
                <div style="color:red">
                    <? echo validation_errors(); ?><? if(isset($error)){print $error;} ?>
                </div>
                -->

                <? echo form_open_multipart('upload/file_data'); ?>

                    <div class="form-group">
                        <label class="control-label">Tipo *</label> 
                        <select id="art_tipoart" name="art_tipoart" data-placeholder="Seleccione tags" class="form-control chosen-select" style="width:100%;" value="<?= set_value('art_tipoart'); ?>">
                            <option value="">- Seleccione tipo de obra -</option>
                            <option value="Dibujo">Dibujo</option>
                            <option value="Pintura">Pintura</option>
                            <option value="Diseño gráfico">Diseño gráfico</option>
                            <option value="Diseño de objetos">Diseño de objetos</option>
                            <option value="Escultura">Escultura</option>
                            <option value="Fotografía">Fotografía</option>
                            <option value="Grabado">Grabado</option>
                        </select>
                        <?php echo form_error('art_tipoart', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Título *</label> 
                        <input class="form-control" id="art_title" name="art_title" type="text" value="<?= set_value('art_title'); ?>">
                        <?php echo form_error('art_title', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Detalles técnicos (materiales, estilos, etc.) *</label> 
                        <textarea class="form-control" id="art_artdetail" name="art_artdetail"><?= set_value('art_artdetail'); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Descripción *</label> 
                        <textarea class="form-control" id="art_desc" name="art_desc"><?= set_value('art_desc'); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tags *</label>
                        <select id="art_tags" name="art_tags[]" data-placeholder="Seleccione tags" class="form-control chosen-select" multiple="multiple" tabindex="-1" style="width:100%;" value="<?= set_value('art_tags'); ?>">
                            <option value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Paraguay">Paraguay</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Imagen *</label>
                        <input class="form-control" id="art_file" name="art_file" type="file">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Año *</label>
                        <div class="input-group">
                            <input type="text" id="art_date" name="art_date" class="form-control pull-right dateinput" data-inputmask='"mask": "9999"' data-mask placeholder="aaaa" value="<?= set_value('art_date'); ?>">
                            <div class="input-group-addon bg-primary p-l-2 p-r-2">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group m-t-3">
                        <a href="javascript:history.go(-1)" class="btn btn-primary">Salir</a>
                        <button class="btn btn-default m-l-1" type="reset">Borrar</button>
                        <button class="btn btn-success m-l-1" type="submit">Guardar obra</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

