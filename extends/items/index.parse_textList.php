<?php
/*
	Variable disponibles
		$this->listText (tableau associatif)
			array(
				['THUMB']	(aperçu lorsque disponible)
				['LINK']	(lien vers l'élément)
				['CONTENT']	(contenu de l'élément)
				['TITLE']	(titre de l'élément)
			);
		$this->textListTitle	(titre de l'item).
	Mise en pratique plus bas.
*/
if(count($this->listText) > 0)
		{
		?>
<h3><?php echo $this->textListTitle;?></h3>
<div class="toggle">
<?php
	$i	=	0;
			foreach($this->listText as $t)
			{
?>
				<h2 class="trigger"><?php echo $t['TITLE'];?></h2>
                <div class="togglebox">
                  <div>
                    <h4><a href="<?php echo $t['LINK'];?>" class="link-1"><?php echo $t['TITLE'];?></a></h4>
                    <p><img src="<?php echo $t['THUMB'];?>" alt="" style="visibility: visible; opacity: 1;width:100%;"><?php echo word_limiter($t['CONTENT'],100);?></p>
                  </div>
                </div>
                <?php
			}
	?>
</div>
<?php
		}



