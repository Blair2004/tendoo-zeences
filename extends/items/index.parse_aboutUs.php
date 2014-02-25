<?php
/*
	Variable disponible
		$this->indexAboutUs (string : chaine de caractère)
		$this->indexAboutUsTitle	(titre de l'élément)
	Mise en pratique plus bas.
*/
if(isset($this->indexAboutUs))
{
?>
<div class="intro"><?php echo strip_tags($this->indexAboutUs);?></div>
    <?php
}
