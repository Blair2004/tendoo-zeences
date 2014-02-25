<?php
/*
	Item parent (unique.parse, une colonne).
		Items recommandé
			$this->uniqueContent;
*/
?>
  <!-- Begin Content -->
  <div class="content"> <?php echo $this->uniqueContent;?> </div>
  <!-- End Content --> 
  
  <!-- Begin Sidebar -->
  <div class="sidebar">
    <?php $this->parseWidgets();?>
  </div>
  <!-- End Sidebar -->
  
  <div class="clear"></div>
  <div id="footer">
    <div class="footer-top"></div>
    <!-- Divider -->
    <div class="clear"></div>
  </div>
  <div class="transify" style="background-color: rgb(255, 255, 255); background-image: none; border: 0px none rgb(77, 77, 77); position: absolute; top: 0px; left: 0px; z-index: -1; width: 960px; height: 100%; opacity: 0.9; background-repeat: repeat repeat;"></div>