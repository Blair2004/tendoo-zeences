<?php
// pour parcourir tous les sous controlleur utiliser la méthode $this->core->tendoo->getControllerSubmenu($element,$obj,$ulclass="",$liclass="");
// Lorsque vous ne supportez pas la barre utilisateur, assurez vous que lorsque l'utilisateur est connecté, la bare utilisateur ne cache pas une partie du site avec la condition plus bas. Utiliser la variable $margin pour ajouter de l'espace à la page.
?>
<?php
// NE PAS SUPPRIMER
if($this->core->users_global->isConnected())
{
	$margin	=	'style="margin-top:30px"';
}
else
{
	$margin	=	"";
}
?>
<?php
// Affichie la page utilisateur lorsque vous ne prennez pas la barre utilisateur en charge, afficher celle fournie avec Tendoo.
?>
<?php echo $this->core->users_global->getUserMenu();?>
<?php
// $margin pour ajouter de la marge lorsque la barre utilisateur est affiché.
// Utilisé le tableau suivant pour affiché les éléments du CMS
/*
	$options.
		$options[0]['SITE_NAME'] : renvoie le nom du site
		$options[0]['SITE_LOGO'] : renvoie l'addre du logo
	$this->core->url
		$this->core->url->base_url()	: renvoie l'addresse de base du site exemple http://www.unnouveausite.com/
		$this->core->url->site_url()	: créer une nouvelle adresse en utilisant l'adresse de base. $this->core->url->
			site_url(array('nouvellepage','index')), génèrera un texte similaire à celui-ci (en considérant que le nom de domaine est
			www.unnouveausite.com) : http://www.unnouveausite.com/index.php/nouvellepage/index. Cette méthode prendre ne paramètre un tableau.
	$controllers 	: Contient tous les contrôleurs créer depuis l'espace d'administration. le parcourir pour les afficher comme indiqué plus bas.
		Contient comme clé :
		array(
			['PAGE_CNAME'] (code du contrôleur)
			['PAGE_TITLE'] (titre du contrôleur)
			['PAGE_NAMES'] (nom du contrôleur)
			['PAGE_DESCRIPTION'] (description du contrôleur)
		)
		Lorsque la page ouverte apparait dans le menu et que vous voulez donner a ce menu un style particulier, utilisé la condition suivante 
		$c['PAGE_CNAME'] == $this->core->url->controller() comme mentionné plus bas, ou $c est un élément des contrôleurs chargés.
*/
?>
  <div id="header" <?php echo $margin;?>>
    <div class="logo opacity" style="position: relative; background-image: none; border: none; background-position: initial initial; background-repeat: initial initial;"><a href="<?php echo $this->core->url->main_url();?>"><img src="<?php echo $options[0]['SITE_LOGO'];?>" alt="<?php echo $options[0]['SITE_NAME'];?>"></a><div class="transify" style="background-color: rgba(0, 0, 0, 0); background-image: none; border: 0px none rgb(77, 77, 77); position: absolute; top: 0px; left: 0px; z-index: -1; width: 0px; height: 100%; opacity: 0.9; background-repeat: repeat repeat;"></div></div>
  </div>
  <div class="clear"></div>
  <!-- Begin Menu -->
  <div id="menu" class="menu" style="position: relative; background-image: none; border: none; background-position: initial initial; background-repeat: initial initial;">
    <ul>
	<?php
	if(is_array($controllers))
	{
		foreach($controllers as $c)
		{
	?>
		<li><a href="<?php echo $this->core->url->site_url(array($c['PAGE_CNAME']));?>"><?php echo $c['PAGE_NAMES'];?></a>
			<?php $this->core->tendoo->getControllerSubmenu($c);?>
		</li>
	<?php
		}
	}
	?>
    </ul>
    <br style="clear: left">
  <div class="transify" style="background-color: rgb(255, 255, 255); background-image: none; border: 0px none rgb(77, 77, 77); position: absolute; top: 0px; left: 0px; z-index: -1; width: 960px; height: 100%; opacity: 0.9; background-repeat: repeat repeat;"></div></div>
  <!-- End Menu -->