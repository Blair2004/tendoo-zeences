<?php
/*
	Variable disponibles
		$this->blogPost	(tableau associatif)
			array(
				['DATETIME'] (date de publication)
				['TITLE']	(titre de l'élément)
				['LINK']	(lien vers l'élément)
				['AUTHOR']	(auteur de l'élément)
				['CATEGORY']	(categorie de l'éllément)
				['CATEGORY_LINK'] (lien vers la catégorie de l'élément)
				['TTCOMMENTS']	(total de commentaires)
				['CONTENT']	(contenu de l'élément)
			)
	Mise en pratique plus bas.
*/
		if(count($this->blogPost) > 0)
		{
		?>
        <?php
			foreach($this->blogPost as $p)
			{
				$global	=	$this->core->tendoo->time($p['DATETIME'],TRUE);
			?>
<div class="post"> 
          
          <!-- Begin Post Info -->
          <div class="post-info"> 
            <!-- Begin Date -->
            <div class="post-date"> <span class="day"><?php echo $global['d'];?></span> <span class="month"><?php echo $global['month'];?></span> <span class="year"><?php echo $global['y'];?></span> </div>
            <!-- End Date --> 
            <!-- Begin Title -->
            <time datetime="<?php echo $p['DATETIME'];?>" class="date-1"> </time>
            <div class="post-title">
              <h1><a href="<?php echo $p['LINK'];?>"><?php echo $p['TITLE'];?></a></h1>
              <div class="post-meta"> <span class="comments"><a href="#"><?php echo $p['TTCOMMENTS'] != '' ? $p['TTCOMMENTS'].'comments' : '';?></a></span> <span class="categories">Par <a href="#"><?php echo $p['AUTHOR'];?></a>, dans <a href="<?php echo $p['CATEGORY_LINK'];?>"><?php echo $p['CATEGORY'];?></a></span> </div>
            </div>
            <!-- End Title --> 
          </div>
          <!-- End Post Info -->
          
          <div class="post-text"> <a href="post.html"><img src="<?php echo $p['THUMB'];?>" alt="<?php echo $p['TITLE'];?>" style="opacity: 0.75;width:100%;"></a> <br>
            <p><?php echo word_limiter(strip_tags($p['CONTENT']),50);?> <a class="more" href="<?php echo $p['LINK'];?>">En savoir plus →</a></p>
          </div>
          <!-- End Text --> 
          <span class="tags"><a href="<?php echo $p['CATEGORY_LINK'];?>"><?php echo $p['CATEGORY'];?></a></span>
        </div>
        <?php
			}
		}
		else if($this->blogPost === FALSE)
		{
			?>
<div id="posts-list">
    <pre>Aucun article disponible</pre>
</div>
<?php
		}

