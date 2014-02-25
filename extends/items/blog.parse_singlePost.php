<?php
/*
	Variable disponibles 
		$this->singleBlogPost (tableau associatif)
			array(
				['TITLE'] (titre de l'élément)
				['DATETIME']	(date de publication de l'élément)
				['AUTHOR']	(auteur de l'élément)
				['AUTHOR_LINK']	(lien vers l'auteur de l'élément)
				['CATEGORY']	(category de l'élément)
				['CATEGORY_LINK'] (lien vers catégorie de l'élément)
				['CONTENT']	(contenu de l'élément)
				['FULL']	(image taille réelle).
			);
		$this->TT_SBP_comments	(total de commentaire 'int')
		$this->SBP_comments	(tableau associatif de commentaires)
			array(
				['AUTEUR'] (auteur de la publication)
				['CONTENT']	(contenu de la publication)
				['DATETIME']	(date de la publication).
			);
		Items recommandés
		<?php $this->parseNotice();?>
        <?php $this->parseForm();?>
	Mise en pratique plus bas.
*/
		if(count($this->singleBlogPost) > 0)
		{
			$global	=	$this->core->tendoo->time($this->singleBlogPost['DATETIME'],TRUE);
	?>

<div class="post"> 
  <!-- Begin Post Info -->
  <div class="post-info"> 
    <!-- Begin Date -->
    <div class="post-date">
      <span class="day"> <?php echo $global['d'];?> </span>
      <span class="month"> <?php echo $global['month'];?> </span>
      <span class="year"> <?php echo $global['y'];?> </span>
      <time itemprop="datePublished" content="<?php echo  $this->singleBlogPost['DATETIME'];?>" datetime="<?php echo $this->singleBlogPost['DATETIME'];?>" class="date-1"></time>
    </div>
    <!-- End Date --> 
    <!-- Begin Title -->
    <div class="post-title">
      <h1><?php echo $this->singleBlogPost['TITLE'];?></h1>
      <div class="post-meta">
        <span class="comments"> <a href="#"><?php echo $this->TT_SBP_comments;?> commentaire(s)</a> </span>
        <span class="categories"> Par <a href="#"><?php echo $this->singleBlogPost['AUTHOR'];?></a>, dans <a href="<?php echo $this->singleBlogPost['CATEGORY_LINK'];?>"><?php echo $this->singleBlogPost['CATEGORY'];?></a> </span>
      </div>
    </div>
    <!-- End Title --> 
  </div>
  <!-- End Post Info -->
  
  <div class="post-text"> <img style="width:100%;" src="<?php echo $this->singleBlogPost['FULL'];?>" itemprop="image" alt="<?php echo $this->singleBlogPost['TITLE'];?>"> <br>
    <?php echo $this->singleBlogPost['CONTENT'];?> </div>
  <!-- End Text -->
  <span class="tags"> <a href="<?php echo $this->singleBlogPost['CATEGORY_LINK'];?>"><?php echo $this->singleBlogPost['CATEGORY'];?></a> </span>
</div>
<!-- Begin Comments -->

<h3><?php echo $this->TT_SBP_comments;?> Commentaire sur "<?php echo $this->singleBlogPost['TITLE'];?>"</h3>

<!-- Begin Comments -->
<?php
			if($this->TT_SBP_comments > 0)
			{
				$commentID	=	1;
				foreach($this->SBP_comments as $s)
				{
			?>
<div id="comments">
  <ol id="singlecomments" class="commentlist" id="li-comment-<?php echo $commentID;?>">
  <li class="clearfix">
    <div class="user"><img src="http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G" alt="" height="60" width="60" class="avatar"></div>
    <div class="message">
      <div class="info">
        <h3><a href="#"><?php echo $s['AUTHOR'];?></a></h3>
        <span class="date"> <?php echo $this->core->tendoo->time($s['DATETIME']);?> </span>
        <a class="reply-link" href="#">R&eacute;pondre</a> </div>
      <p>
        <?php echo $s['CONTENT'];?>
      </p>
    </div>
    <div class="clear"></div>
  </li>
  </ol>
</div>
<?php
					$commentID++;
				}
			}
			?>
<!-- End Comments --> 

<!-- Begin Form -->
<div class="comment-form">
  <h3>Laisser un commentaire</h3>
  <div class="form-container">
    <?php $this->parseNotice();?>
	<?php $this->parseForm();?>
    <div class="response"></div>
  </div>
</div>
<!-- End Form --> 
<?php
		}
		else if($this->singleBlogPost	===	false)
		{
			?>
<div id="posts-list">
  <pre>Article introuvable disponible</pre>
</div>
<?php
		}




