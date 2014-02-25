<?php
/*
	Variables disponible
		$this->currentForm (tableau associatif)
			contient toutes les input, textarea, ou checkbox crées.
		$this->formType (POST ou GET)
		$this->formEnctype (enctype)
		$this->formAction (action)
	Mise en pratique.
*/
		if(count($this->currentForm) > 0)
		{
		?>
        <form class="forms cform" action="<?php echo $this->formAction;?>" method="<?php echo $this->formType;?>" enctype="<?php echo $this->formEnctype;?>">
        	<fieldset>
            	<ol>
        	        	<?php
			foreach($this->currentForm as $c)
			{
				echo $c;
			}
			?>
            	</ol>
            </fieldset>
        </form>
        
        <?php
		}
