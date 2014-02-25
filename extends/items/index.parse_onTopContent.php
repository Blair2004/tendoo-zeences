<?php
/*
	Variable disponible 
		$this->onTopContent (tableau associatif).
			array(
				['THUMB']	(aperçu de l'élément)
				['TITLE']	(titre de l'élément)
				['CONTENT']	(contenu de l'élément)
				['DATETIME'] (date de publication de l'élément)
				['AUTHORLINK']	(lien vers l'adresse de celui qui a publier l'élément)
				['AUTHOR']	(nom de celui qui a publier l'élément)
				['LINK']	(lien vers l'élément).
			);
		$this->onTopContentTitle (titre de l'élément).
	Mise en pratique plus bas.
*/
		if(count($this->onTopContent) > 0)
		{
		?>
            <div class="clear"></div>
            <br>
            <h4><?php echo $this->onTopContentTitle;?></h4>
            <?php
			foreach($this->onTopContent as $c)
				{
				?>
<div datetime="<?php echo $c['DATETIME'];?>" class="one-fourth"> <img style="width:200px" src="<?php echo $c['THUMB'];?>" alt="" class="center"><br>
  <a href="<?php echo $c['LINK'];?>"><h4 class="center"><?php echo word_limiter($c['TITLE'],8);?></h4></a>
  <p style="text-align:justify;height:180px;"><?php echo word_limiter(strip_tags($c['CONTENT']),30);?></p>
</div>
<?php
				}
		}
