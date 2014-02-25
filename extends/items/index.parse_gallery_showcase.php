<?php
/*
	Variables disponibles
		$this->galleryGroup (tableau associatif)
			array(
				['FULL']	(image en taille réelle)
				['THUMB']	(miniature de l'image)
				['TITLE']	(titre de l'image)
			);
		$this->galleryShowCaseTitle (titre de l'élément).
	Mise en pratique plus bas.
*/
if(count($this->galleryGroup) > 0)
{
?>
<div class="row-1">
    <div class="container">
        <div class="row">
            <article class="span12">
                <h4><?php echo $this->galleryShowCaseTitle;?></h4>
            </article>
            <div class="clear"></div>
            <ul class="portfolio clearfix">
                <?php
			foreach($this->galleryGroup as $g)
			{
		?>
                <li class="box"><a href="<?php echo $g['FULL'];?>" class="magnifier">
                    <div class=""><img alt="<?php echo $g['TITLE'];?>" src="<?php echo $g['THUMB'];?>" style="width:270px;height:192px;visibility: visible; opacity: 1;"></div>
                    </a></li>
                <?php
			}
	   ?>
            </ul>
        </div>
    </div>
</div>
<?php
}
