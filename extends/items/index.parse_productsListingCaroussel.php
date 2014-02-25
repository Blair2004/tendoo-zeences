<?php
/*
	variable disponible
		$this->productListingCaroussel (tableau associatif)
			array(
				['IMAGE']	(image de l'element)
				['TITLE']	(titre de l'élement)
				['PRICE']	(prix de l'élément)
				['CONTENT']	(contenu de l'élément)	
			)
	Mise en pratique plus bas.
*/
		if(count($this->productListingCaroussel) > 0)
		{
				?>
<div class="camera_wrap camera_magenta_skin" id="camera_wrap_2" style="margin:30px 0px;float:none;">
 <?php
	foreach($this->productListingCaroussel as $c)
	{
?>
    <div data-thumb="<?php echo $c['IMAGE'];?>" data-src="<?php echo $c['IMAGE'];?>">
        <div class="camera_caption fadeFromBottom"><?php echo $c['TITLE'];?><br /><em><?php echo word_limiter(strip_tags($c['CONTENT']),20);?> - <?php echo $c['PRICE'];?></em> </div>
    </div>
    <?php
	}
			?>
</div>
<script>

    jQuery(function(){
      jQuery('#camera_wrap_2').camera({
        height: '400px',
        loader: 'bar',
        pagination: false,
        thumbnails: false
      });
    });
  
</script>
<!-- slider -->
<?php
}