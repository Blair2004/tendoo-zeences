
  <div class="content">
    <h2><?php echo $this->pageTitle;?></h2>
    <p>
      <?php echo $this->contactContent;?>
    </p>
    <br>
    <br>
    <br>
    <?php $this->parseNotice();?>
    <?php $this->parseForm($this->contactHeader['ACTION'],$this->contactHeader['ENCTYPE'],$this->contactHeader['METHOD']);?>
    <br>
  </div>
  <?php 
	if(count($this->contactAddressItems) > 0)
	{
	?>
  <div class="sidebar">
    <h4><?php echo $this->contactTitle;?></h4>
    <p>
      <?php echo $this->contactAddress;?>
    </p>
    <ul class="address-block">
      <?php
		foreach($this->contactAddressItems as $c)
		{
		?>
      <li class="<?php echo $c['TYPE'];?>"><?php echo $c['CONTENT'];?></li>
      <?php
		}
		?>
    </ul>
  </div>
  <?php
	}
	?>
  <div class="clear"></div>
  <div id="footer">
    <div class="footer-top"></div>
    <!-- Divider -->
    <div class="clear"></div>
  </div>
  <div class="transify" style="background-color: rgb(255, 255, 255); background-image: none; border: 0px none rgb(77, 77, 77); position: absolute; top: 0px; left: 0px; z-index: -1; width: 960px; height: 100%; opacity: 0.9; background-repeat: repeat repeat;"></div>