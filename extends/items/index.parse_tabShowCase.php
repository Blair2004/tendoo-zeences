<?php
/*
	Variable disponible
		$this->tabShowCase (tableau associatif)
			array(
				['TITLE']	(titre de l'élément)
				['CONTENT']	(contenu de l'élément).
			)
		$this->tabShowCaseTitle (titre de l'item).
*/
		if(count($this->tabShowCase) > 0)
		{
		?>

<div class="tabbed-content">
  <h3><?php echo $this->tabShowCaseTitle;?></h3>
  <ul class="tabs">
    <?php
			$i	=	1;
			foreach($this->tabShowCase as $s)
			{
				if($i == 1)
				{
				?>
    <li class="active"><a href="#tab<?php echo $i;?>" data-toggle="tab">
      <span><?php echo $s['TITLE'];?></span>
      </a></li>
    <?php
				}
				else
				{
				?>
    <li><a href="#tab<?php echo $i;?>" data-toggle="tab">
      <span><?php echo $s['TITLE'];?></span>
      </a></li>
    <?php
				}
				$i++;
			}
		?>
  </ul>
  <div class="tab_container">
    <?php
			$i	=	1;
			foreach($this->tabShowCase as $s)
			{
				if($i == 1)
				{
				?>
    <div id="tab<?php echo $i;?>" class="tab_content">
      <p>
        <?php echo $s['CONTENT'];?>
      </p>
    </div>
    <?php
				}
				else
				{
				?>
    <div id="tab<?php echo $i;?>" class="tab_content">
      <p>
        <?php echo $s['CONTENT'];?>
      </p>
    </div>
    <?php
				}
				$i++;
			}
		?>
  </div>
</div>
<?php
		}

