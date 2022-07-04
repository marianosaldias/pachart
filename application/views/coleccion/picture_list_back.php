<div class="container">
	<div class="row">
		<h1>List of Pictures</h1>


	  
	  <? if(count($picture_list)) { ?>

			<? foreach ($picture_list as $pic): ?>

				<div class="col-md-8 col-md-offset-2">

					<h2><?=$pic->title;?></h2>
					<p><?=$pic->intro;?></p>

					<h4>La Obra</h4>
					<?=$pic->text;?>

					<img src="<?=base_url().'img_collections/'.$pic->userfile;?>" width="500">

				</div>
				<div class="clearfix"></div>

			<? endforeach ?>
		  
		  <a href="<?=base_url().'index.php/upload/form';?>" class="btn btn-primary">Upload image</a>
	  <? 
		} else 
		{ 
	  ?>
	    <h4>No Pictures have been uploaded!.</h4>
	    <p>
	    <a href="<?=base_url().'index.php/upload/form';?>" class="btn btn-primary">Upload your first image</a></p>            
	  <? } ?>

	</div>
</div>