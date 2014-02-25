<?php
/*
	Variable disponible
		$this->partners_title (titre de l'élément)
		$this->partners_content (contenu de l'élément).
	Mise en pratique plus bas.
*/
	if(isset($this->partners_content))
	{
	?>
    <div class="container">
        <div class="row">
            <div class="span12">
				<h3><?php echo $this->partners_title;?></h3>
				<p><?php echo $this->partners_content;?></p>
    		</div>
		</div>
	</div>
	<?php
	}
