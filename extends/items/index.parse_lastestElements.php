<?php
/*
	Variable disponible :
		$this->lastestElements (tableau associatif)
			array(
				['TITLE']	(titre de l'élément)
				['THUMB']	(aperçu de l'élément)
				['DATETIME'](date de publicaiton de l'élément)
				['LINK']	(lien vers l'élément)
				['CONTENT']	(contenu de l'élément)
				['AUTHOR']	(nom de l'auteur de l'élément)
				['AUTHORLINK']	(lien vers le compte de l'auteur de l'élément)
				['TTCOMMENTS']	(nombre total de commentaire sur l'élément).
			);
		$this->lastestElementsTitle (titre de l'élément).
	Mise en pratique plus bas.
*/
if(count($this->lastestElements) > 0)
		{
		?>
<div class="clear"></div>
<br>
<h4><?php echo $this->lastestElementsTitle;?></h4>
<?php
	foreach($this->lastestElements as $c)
	{
		$date		=	 $this->core->tendoo->time($c['DATETIME'],true);
		$complete	=	 $this->core->tendoo->time($c['DATETIME']);
	
				?>
<div datetime="<?php echo $c['DATETIME'];?>" class="one-fourth" style="height:385px;"> <img style="width:200px" src="<?php echo $c['THUMB'];?>" alt="" class="center"><br>
  <a href="<?php echo $c['LINK'];?>"><h4 class="center"><?php echo word_limiter($c['TITLE'],8);?></h4></a>
  <p style="text-align:justify;height:180px;"><?php echo word_limiter(strip_tags($c['CONTENT']),30);?></p>
</div>
<?php
// echo $c['AUTHORLINK'];
// echo $c['TTCOMMENTS'];
// echo $c['AUTHOR'];
	}
}
?>