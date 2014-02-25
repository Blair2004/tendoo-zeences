<?php
/*
	Variable disponibles 
		$this->pagination_datas (tableau associatif multidimetionnel).
			$this->pagination_datas['innerLink']		(tableau associatif avec les pages disponible et leur status (actif ou non, lorsqu'une des page est ouverte).
				['state']	==	'active' else ???
				['text']	==	'1' || '2' || '3' || ...
	Exemple plus bas.
*/
?>
<div class="page-navi">
	<p>Pages</p>
  <ul>
  <?php
			if(is_array($this->pagination_datas['innerLink']))
			{
				foreach($this->pagination_datas['innerLink'] as $p)
				{
					if($p['state'] == 'active')
					{
					?>
    <li><a href="#" class="current"><?php echo $p['text'];?></a></li>
    <?php
					}
					else
					{
						?>
    <li><a href="<?php echo $p['link'];?>"><?php echo $p['text'];?></a></li>
    <?php
					}
				
				}
			}
			else
			{
				?>
    <li><a href="#">0</a></li>
    <?php
			}
				?>
  </ul>
</div>
