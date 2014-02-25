<html>
	<head>
		<meta charset="utf-8">
        <?php
		// $this->core->tendoo->getDescription(); renvoie la description renvoyées par les modules.
		?>
        <meta name="description" content="<?php echo $this->core->tendoo->getDescription();?>">
		<script>
			var site_url	=	'<?php echo $this->core->url->site_url();?>';
			var base_url	=	'<?php echo $this->core->url->main_url();?>';
		</script>
        <?php
		// $this->core->url->site_url() renvoi l'addresse de base du site additionné de index.php.
		// $this->core->url->main_url() renvoie l'adresse de base du site sans index.php exemple : http://www.unnouveausite.com/
		?>
        <?php
		// $this->core->tendoo->getTitle() affiche le titre de la page, celle renvoyé par les modules.
		?>
		<title><?php echo $this->core->tendoo->getTitle();?></title>
        <?php
		// $this->core->file->css_load() charge tous les fichiers chargé avec la méthode $this->core->file->css_push() ou ..js_push() dans le thème handler.
		?>
		<?php echo $this->core->file->css_load();?>
		<?php echo $this->core->file->js_load();?>        
<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			900,
		content_height:			400,
		auto:					true,
		interval:				3000,
		continuous:				false,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'fade', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload' /* onload/onhover/show */
	});
});

</script>


	</head>
