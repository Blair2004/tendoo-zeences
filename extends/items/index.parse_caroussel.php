<?php
/*
	Variables disponibles
		$this->carousselElement (tableau associatif)
			array(
				['IMAGE']	(image de l'élément)
				['TITLE']	(Titre de l'élément)
				['CONTENT']	(contenu de l'élément)
			);
	Mise en pratique plus bas.
*/
if(count($this->carousselElement) > 0)
{
?>
<div id="showcase" class="showcase"> 
    <?php
            foreach($this->carousselElement as $c)
            {
                // <?php echo $c['TITLE'];
                // <?php echo word_limiter(strip_tags($c['CONTENT']),20);
        ?>  
      <!-- Each child div in #showcase represents a slide -->
      <div class="showcase-slide" style="height:385px;"> 
        <!-- Put the slide content in a div with the class .showcase-content. -->
        <div class="showcase-content"> <img src="<?php echo $c['IMAGE'];?>" alt="<?php echo $c['TITLE'];?>" style="width:100%;"> </div>
        <div class="showcase-caption">
				<strong><?php echo $c['TITLE'];?></strong><br><?php echo word_limiter(strip_tags($c['CONTENT']),15);?>
		</div>
      </div>
	  <?php
            }
        ?>
</div>
<!-- slider -->
<?php
}
