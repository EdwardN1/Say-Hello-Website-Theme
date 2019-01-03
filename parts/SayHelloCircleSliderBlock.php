<?php $anchor_tag = get_field( 'anchor_tag' ); ?>
<?php
$magAtt = '';
if ( $anchor_tag ) {
$magAtt = ' data-magellan-target="' . $anchor_tag . '"';
}
?>

<div class="events-slider grid-container nopadding"><div class="line"></div>
	<?php if ( have_rows( 'slides' ) ) : ?>
        <div id="<?php echo $anchor_tag;?>" class="slider-container" <?php echo $magAtt;?>>
            <div data-slick-slider data-slick='{"slidesToShow":3.5, "slidesToScroll":3, "infinite":false, "initialSlide":3, "responsive": [{"breakpoint": 915,"settings": {"slidesToShow": 2.5, "slidesToScroll": 2}}, {"breakpoint": 550, "settings": {"slidesToShow": 1.1, "slidesToScroll": 1}}]}'>
				<?php
				$padTop = ' style="padding-top:7em;"';
				while ( have_rows( 'slides' ) ) : the_row();
					?>
                    <div class="sContainer">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php $imageURL = $image['url']; ?>
						<?php $imageALT = $image['alt']; ?>
						<?php if ( $image ) { ?>
                            <img src="<?php echo $imageURL; ?>"
                                 alt="<?php echo $imageALT; ?>"/>
						<?php } ?>
                        <div class="text-center">
							<?php $heading = get_sub_field( 'heading' ); ?>
                            <h3 class="h2"><?php echo $heading; ?></h3>
							<?php $description = get_sub_field( 'description' ); ?>
                            <div><?php echo $description; ?></div>
                        </div>
                    </div>
					<?php
					if ( $padTop == '' ) {
						$padTop = ' style="padding-top:7em;"';
					} else {
						$padTop = '';
					}
					?>
				<?php endwhile; ?>
            </div>
        </div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</div>

