<?php
/*
	Variable dispoible
		$this->productListingDevise (devise choisie)
		$this->productView (tableau associatif)
			array(
				['DATETIME']	(date de publication de l'élément)
				['TITLE']	(titre de l'élément)
				['LINK']	(lien vers l'élément)
				['PRICE']	(prix de l'élement)
				['FULL']	(taille réelle image)
				['THUMB']	(miniature image)
				['CATEGORY_LINK']	(lien de la categorie du produit)
				['CATEGORY']	(texte du lien)
				['ADD_TEXT']	(texte d'ajout au panier)
				['ADD_LINK']	(lien du texte)
				['REMOVE_TEXT']	(lien de retrait d'une element du parnier)
				['REMOVE_LINK'] (lien du texte)
				['LOGIN_TEXT']	(texte lorsque la connexion est obligatoire)
				['LOGIN_LINK']	(lien du texte)
			);
	Mise en pratique plus bas.
*/
		if(count($this->productView) > 0)
		{
		?>
        <div id="posts-list">
        	<?php
			foreach($this->productView as $p)
			{
				$global	=	$this->core->tendoo->time($p['DATETIME'],TRUE);
			?>
            <article class="format-standard">
                
                <div class="feature-image">
                    <a href="<?php echo $p['FULL'];?>" data-rel="prettyPhoto"><img src="<?php echo $p['THUMB'];?>" alt="<?php echo $p['TITLE'];?>" /></a>
                </div>
                
                <h1><a href="<?php echo $p['LINK'];?>" class="post-heading"><?php echo $p['TITLE'];?></a></h1>
                <div class="meta">
                	<?php
					if(is_numeric($p['PRICE']))
					{
					?>
                	<span>Prix : <?php echo $this->productListingDevise;?> <?php echo $p['PRICE'];?></span> - 
                    <?php
					}
					else
					{
						?>
                	<span><?php echo $p['PRICE'];?></span>
                        <?php
					}
					?>
                    <span class="entry-date"><?php echo $this->core->tendoo->time($p['DATETIME']);?></span>
                    dans <span class="categories"><a href="<?php echo $p['CATEGORY_LINK'];?>"><?php echo $p['CATEGORY'];?></a></span>
                </div>
                <div class="excerpt"><?php echo word_limiter(strip_tags($p['CONTENT']),50);?>
                </div>
                <a href="<?php echo $p['LINK'];?>" class="read-more"><?php echo $p['LINK_TEXT'];?></a>
                <?php
				if($p['ADD_LINK'] != '#')
				{
				?>
                <a href="<?php echo $p['ADD_LINK'];?>" class="read-more"><?php echo $p['ADD_TEXT'];?></a>
                <?php
				}
				if($p['REMOVE_LINK'] != '#')
				{
				?>
                <a href="<?php echo $p['REMOVE_LINK'];?>" class="read-more"><?php echo $p['REMOVE_TEXT'];?></a>
                <?php
				}
				if($p['LOGIN_LINK'] != '#')
				{
				?>
                <a href="<?php echo $p['LOGIN_LINK'];?>" class="read-more"><?php echo $p['LOGIN_TEXT'];?></a>
                <?php
				}
				?>
            </article>
                <?php
			}
				?>
        </div>
        <?php
		}
		else if($this->blogPost === FALSE)
		{
			?>
		<div id="posts-list">
        	<pre>Aucun article disponible</pre>
        </div>
            <?php
		}
	
	