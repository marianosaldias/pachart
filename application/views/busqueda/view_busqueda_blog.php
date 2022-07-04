<h4 class="grid-title">Blog: <b>{results}</b> nota(s) encontrada(s).</h4>
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

        <tbody>
            {results_entries}
                <tr>
                    <td>
                        <div class="col-xs-12">
                            <h2>{title}</h2>
                            <h6 class="m-b-2">{fecha}. {tiponews} | <b>{nombre} {apellido}</b></h6>
                        </div>

                        <div class="col-md-5 m-b-1">
                            <img src="<?= base_url(); ?>img_blog/{blogfile}" alt="" class="imageblog">
                        </div>

                        <div class="col-md-7 introblog pad0">
                            <div class=" m-l-2">
                                {text}

                                <a href="<?= base_url(); ?>index.php/blog/view/{slug}" class="btn linktonote m-b-1">Leer artículo<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                <ul class="list-unstyled list-inline m-t-2">        
                                {tags}
                                    <li><a href="http://localhost/pachart/index.php/blog?id={tagname}" class="btn btn-sm btn-default">{tagname}</a></li>

                                {/tags}
                                </ul>             
                            </div>               
                        </div>
                        <div class="col-xs-12">
                            <hr>
                        </div>
                    </td>
                </tr>
            {/results_entries}
        </tbody>
    </table>
</div>
