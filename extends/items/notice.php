<?php
/*
	Recupère les notifications et les affiches, à l'aide de $this->core->notice->parse_notice();
*/
		if(strlen($this->core->notice->parse_notice(TRUE)) > 0)
		{
		?>
        <div class="info-box"><?php echo strip_tags($this->core->notice->parse_notice(TRUE));?></div>
        <?php
		}
