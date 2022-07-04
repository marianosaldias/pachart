{artist_entries}
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
    </section>

    <div class="containerwide">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                
                <div align="center">
                    <img src="<?php echo base_url();?>img_artist/{avatar}" class="img-circle avatarProfile">
                    <h1>{nombre} {apellido}</h1>
                    <h4>{headline}</h4>
                    <ul class="list-unstyled list-inline m-t-2">    
                    {tagsartist}
                        <li class="btn btn-sm btn-default m-r-1">{tagname}</a></li>
                    {/tagsartist}
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 m-b-2">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs m-t-4" id="profileTab" role="tablist">
                  <li class="nav-item active col-xs-4">
                    <a class="nav-link" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="true"><h6 class="text-center">Bio</h6></a>
                  </li>
                  <li class="nav-item col-xs-8">
                    <a class="nav-link" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false"><h6 class="text-center">Experiencias</h6></a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active col-xs-12 p-t-3" id="bio" role="tabpanel" aria-labelledby="bio-tab">{bio}</div>
                    <div class="tab-pane col-xs-12 p-t-3" id="resume" role="tabpanel" aria-labelledby="resume-tab">{resume}</div>
                </div>

                
    		</div>

    	</div>

    </div>	

{/artist_entries}
