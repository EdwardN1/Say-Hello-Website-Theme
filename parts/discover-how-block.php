<?php $anchor_tag = get_field( 'anchor_tag' ); ?>
<?php $main_heading = get_field( 'main_heading' ); ?>
<?php $sub_heading = get_field( 'sub_heading' ); ?>
<?php $description = get_field( 'description' ); ?>
<?php $callout_description = get_field( 'callout_description' ); ?>
<?php $button_text = get_field( 'button_text' ); ?>
<?php $button_link = get_field( 'button_link' ); ?>
<?php
$magAtt = '';
if ( $anchor_tag ) {
	$magAtt = ' data-magellan-target="' . $anchor_tag . '"';
}
?>

<section id="<?php echo $anchor_tag; ?>"<?php echo $magAtt; ?> class="discover-how grid-container nopadding">
    <div class="grid-x show-for-med-large">
        <div class="large-6 medium-12 small-12 text-center left-column" data-waypoint data-waypoint-offset="25%" data-waypoint-direction="down"
             data-waypoint-class="is-animating">
            <h2 class="h2"><?php echo $main_heading; ?></h2>
            <h3 class="h3 underline"><?php echo $sub_heading; ?></h3>
            <div class="description">
				<?php echo $description; ?>
            </div>
            <div class="btn-link">
                <a href="<?php echo $button_link; ?>" class="green-scroll-button"><?php echo $button_text; ?></a>
            </div>
        </div>
        <div class="large-6 medium-6 small-12 right-column">
            <div class="animated-container" data-waypoint data-waypoint-offset="25%" data-waypoint-direction="down"
                 data-waypoint-class="is-animating">
                <div class="from-bottom-right">
                    <div class="right-fact"><img
                                src="<?php echo get_template_directory_uri() . '/assets/images/fact_circle_right.png'; ?>">
                    </div>
                    <div class="fact-description"><?php echo $callout_description; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hide-for-med-large">
        <div class="text-center">
            <h2 class="h2"><?php echo $main_heading; ?></h2>
            <h3 class="h3 underline"><?php echo $sub_heading; ?></h3>
            <div class="callout-description">
				<?php echo $callout_description; ?>
            </div>
            <div class="description">
				<?php echo $description; ?>
            </div>
            <div>
                <a href="<?php echo $button_link; ?>" class="green-scroll-button"><?php echo $button_text; ?></a>
            </div>
        </div>
    </div>
</section>
