<?php
/*
	Variable disponible
		aucune
	Items recommandés
		<?php $this->parseProductView();?>
		<?php $this->parseSingleProductView();?>
		<?php $this->parseCartList();?>
		<?php $this->parseSingleBlogPost();?>
		<?php $this->parseBlogPost();?>
		<?php echo $this->parseWidgets();?>
		<?php $this->pagination();?>
*/
?>  
  <!-- Begin Blog -->
  <div class="blog"> 
    
    <!-- Begin Posts -->
    <div class="content">
      <?php $this->parseProductView();?>
      <?php $this->parseSingleProductView();?>
      <?php $this->parseCartList();?>
      <?php $this->parseBlogPost();?>
	<?php $this->parseSingleBlogPost();?>
    
      
      <!-- Begin Page Navi -->
      <?php $this->pagination();?>
      <!-- End Page Navi --> 
      
    </div>
    <!-- End Posts --> 
    
    <!-- Begin Sidebar -->
    <div class="sidebar">
      <?php $this->parseWidgets();?>
    </div>
    <!-- End Sidebar --> 
  </div>
  <!-- End Blog -->
  
  <div class="clear"></div>
  <div id="footer">
    <div class="footer-top"></div>
    <!-- Divider -->
    <div class="clear"></div>
  </div>
  <div class="transify" style="background-color: rgb(255, 255, 255); background-image: none; border: 0px none rgb(77, 77, 77); position: absolute; top: 0px; left: 0px; z-index: -1; width: 960px; height: 100%; opacity: 0.9; background-repeat: repeat repeat;"></div>
