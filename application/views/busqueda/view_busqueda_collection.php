<h4 class="grid-title">Colección: <b>{results}</b> obras(s) encontrada(s).</h4>
<hr>                
<div class="table-responsive">
    <table id="table"
        data-toggle="table" data-pagination="true" 
        data-toolbar="#toolbar" data-toolbar-align="right" 
        data-classes="table" 
        data-search="true" data-search-align="left" 
        data-show-refresh="false">       

        <!--
        <thead>
            <tr>
                <th data-field="nombre" data-sortable="true">Blog</th>
            </tr>
        </thead>
        -->

        <tbody id="bodyTableResult">
            {results_entries}
                <tr class="col-lg-4 col-sm-6 col-sm-6 pad0">
                    <td class="bordernone">
                        <div class="media-body text-left">
                            <div class="example-1 card">
                                <div class="wrapper" style="background-image: url(<?=base_url();?>img_collections/{fileart});">
                                    <div class="date">
                                        <span class="day">{fechayear}</span>
                                        <!--
                                        <span class="day"></span> 
                                        <span class="month"></span> 
                                        <span class="year"></span>
                                        -->
                                    </div>

                                    <div class="data">
                                        <div class="content">
                                            <a href="<?= base_url();?>index.php/perfil?id={iduser}"><span class="author"><h5>{nombre} {apellido}</h5></span></a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            {/results_entries}
      
        </tbody>
    </table>
</div>