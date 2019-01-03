<?php $anchor_tag = get_field( 'anchor_tag' ); ?>
<?php
$magAtt = '';
if ( $anchor_tag ) {
	$magAtt = ' data-magellan-target="' . $anchor_tag . '"';
}
?>
<?php $heading = get_field( 'heading' ); ?>
<?php $sub_heading = get_field( 'sub_heading' ); ?>
<?php $description = get_field( 'description' ); ?>


<section id="<?php echo $anchor_tag; ?>"<?php echo $magAtt; ?> class="events-header grid-container nopadding">
    <div class="titles text-center">
        <h2 class="h2"><?php echo $heading; ?></h2>
        <h3 class="h3 purple short underline"><?php echo $sub_heading; ?></h3>
    </div>
    <div class="description-container" data-waypoint data-waypoint-offset="50%"
         data-waypoint-direction="down"
         data-waypoint-class="is-animating">
        <div class="description">
			<?php echo $description; ?>
        </div>
    </div>

	<?php if ( have_rows( 'buttons' ) ) : ?>
        <div class="buttons text-center" data-waypoint data-waypoint-offset="50%"
             data-waypoint-direction="down"
             data-waypoint-class="is-animating" data-magellan>
			<?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
				<?php $text = get_sub_field( 'text' ); ?>
				<?php $link = get_sub_field( 'link' ); ?>
				<?php $animation = get_sub_field( 'animation' ); ?>
				<?php
				$btnClass = '';
				if ( $animation == 'Slide In Left' ) {
					$btnClass = ' slide-btn-in-left';
				}
				if ( $animation == 'Slide In Right' ) {
					$btnClass = ' slide-btn-in-right';
				}
				?>
                <a href="<?php echo $link; ?>" class="purple-button<?php echo $btnClass; ?>"><?php echo $text; ?></a>
			<?php endwhile; ?>
        </div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>

</section>