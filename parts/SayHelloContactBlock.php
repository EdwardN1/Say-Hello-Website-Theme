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
<?php $telephone_number = get_field( 'telephone_number' ); ?>
<?php $tel_HREF = 'tel:' . preg_replace( "/[^A-Za-z0-9]/", "", $telephone_number ); ?>
<?php $email_address = get_field( 'email_address' ); ?>
<?php $button_label = get_field( 'button_label' ); ?>
<?php $button_link = get_field( 'button_link' ); ?>


<div id="<?php echo $anchor_tag; ?>" class="contact-block grid-container nopadding"<?php echo $magAtt; ?>>
    <div class="titles text-center">
        <h2 class="h2"><?php echo $heading; ?></h2>
        <h3 class="h3 underline short"><?php echo $sub_heading; ?></h3>
    </div>
    <div data-waypoint data-waypoint-offset="bottom-in-view" data-waypoint-direction="down" data-waypoint-class="is-animating">
        <div class="contact-description text-center">
			<?php echo $description; ?>
        </div>
        <div class="contacts text-center">
            <a href="<?php echo $tel_HREF ?>" class="h4"><?php echo $telephone_number; ?></a>
            <a href="mail:<?php echo $email_address; ?>" class="h4"><?php echo $email_address; ?></a>
        </div>
        <div class="buttons text-center" data-magellan>
            <a href="<?php echo $button_link; ?>" class="green-button"><?php echo $button_label; ?></a>
        </div>
    </div>
	<?php if ( have_rows( 'footer_items' ) ) : ?>
        <div class="footer-section text-center">
			<?php while ( have_rows( 'footer_items' ) ) : the_row(); ?>
				<?php $item_text_html = get_sub_field( 'item_text_html' ); ?>
                <span><?php echo $item_text_html; ?></span>
			<?php endwhile; ?>
        </div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>


</div>
