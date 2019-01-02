<?php if ( have_rows( 'slides' ) ) : ?>
	<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php $imageURL = $image['url']; ?>
		<?php $imageALT = $image['alt']; ?>
		<?php if ( $image ) { ?>
			<img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>" />
		<?php } ?>
		<?php $heading = get_sub_field( 'heading' ); ?>
		<?php echo $heading; ?>
		<?php $description = get_sub_field( 'description' ); ?>
		<?php echo $description; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>