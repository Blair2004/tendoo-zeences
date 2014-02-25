<?php
// echo $head affiche l'entête
// echo $module_content affiche le contenu renvoyé par le module
// echo $footer renvoi le pied de la page.
// ci bas un exemple d'une utilisation des différentes variables.
?>
<body>
<!-- Fullscreen backgrounds -->
<div id="thumbs" style="display: none;">
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg1.jpg';?>" rel="1" class="activeslide">1</a>
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg2.jpg';?>" rel="1">2</a>
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg3.jpg';?>" rel="1">3</a>
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg4.jpg';?>" rel="1">4</a>
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg5.jpg';?>" rel="1">5</a>
<a href="<?php echo $this->core->url->main_url().THEMES_DIR.$getTheme['ENCRYPTED_DIR'].'/img/art/bg6.jpg';?>" rel="1">6</a>
</div>

<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrapper">
  <?php echo $head;?> 
  
  <!-- Begin Container -->
  <div id="container">
  <?php echo $module_content ;?>
  </div>
  <!-- End Container -->
  <?php echo $footer;?>
</div>
<!-- End Wrapper --> 
<?php echo $file_2->js_load();?>

</body>