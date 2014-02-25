<?php
	/*
		Item index.parse
		Items conseillés et recommandés
			<?php $this->parseCaroussel();?>
			<?php $this->parseProductListingCaroussel();?>
			<?php $this->parseIndexAboutUs();?>
			<?php $this->parseOnTopContent();?>
			<?php $this->parseLastestElements();?>
			<?php $this->parseFeaturedProducts();?>
			<?php $this->parseGalleryShowCase();?>
			<?php $this->parseTabShowCase();?>
			<?php $this->parseTextList();?>
			<?php $this->parsePartners();?>
	*/
?>
<div class="bg-content">
    <div class="container">
        <div class="row">
            <div class="span12"> 
				<?php $this->parseCaroussel();?>
				<?php $this->parseProductListingCaroussel();?>
				<?php $this->parseIndexAboutUs();?>
			</div>

        </div>
    </div>
    <div id="content" class="content-extra">
        <!-- featured -->
        <?php $this->parseOnTopContent();?>
        <?php $this->parseLastestElements();?>
        <?php $this->parseFeaturedProducts();?>
        <!-- ENDS featured --> 
        <?php $this->parseGalleryShowCase();?>
        <div class="ic"></div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php $this->parseTabShowCase();?>
                    </div>
				</div>
            </div>
		</div>
        <?php $this->parseTextList();?>
		<?php $this->parsePartners();?>
    </div>
</div>