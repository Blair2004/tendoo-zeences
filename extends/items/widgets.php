<?php
/*
	variable disponible
		$this->ttWidgets (total de widgets) : tableau associatif avec pour clé
			['TITLE']	(Titre)
			['CONTENT']	(contenu)
*/
		if(count($this->ttWidgets) > 0)
		{
			foreach($this->ttWidgets as $w)
			{
		?>
        <div class="sidebar-box">
        <h4><?php echo $w['TITLE'];?></h4>
        <ul class="latest-posts">
          <?php echo $w['CONTENT'];?>
        </ul>
      </div>
        <?php
			}
		}
		?>
        <?php
