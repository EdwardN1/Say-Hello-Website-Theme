<?php $anchor_tag = get_field( 'anchor_tag' ); ?>
<?php
$magAtt = '';
$idAtt = '';
if ( $anchor_tag ) {
	$magAtt = ' data-magellan-target="' . $anchor_tag . '"';
	$idAtt = ' id="'.$anchor_tag.'"';
}
?>
<?php

$image                 = get_field( 'image' );
$imageURL              = $image['url'];
$logo                  = get_field( 'logo' );
$logoURL               = $logo['url'];
$default_heading       = get_field( 'default_heading' );
$default_heading_class = get_field( 'default_heading_class' );
$default_button_class  = get_field( 'default_button_class' );

if ( have_rows( 'heading_values' ) ):
	while ( have_rows( 'heading_values' ) ):
		the_row();
		$now        = strtotime( 'now' );
		$day        = date( 'd', $now );
		$month      = date( 'F', $now );
		$year       = date( 'Y', $now );
		$start_time = $day . ' ' . $month . ' ' . $year . ' ' . get_sub_field( 'start_time' );
		$end_time   = $day . ' ' . $month . ' ' . $year . ' ' . get_sub_field( 'end_time' );

		//error_log( '$start_time = ' . $start_time . ' $end_time = ' . $end_time . ' $now = ' . date( 'd F Y g:i a', $now ) );
		if ( strtotime( $start_time ) < $now ) {
			if ( strtotime( $end_time ) > $now ) {
				$default_heading       = get_sub_field( 'text' );
				$default_heading_class = get_sub_field( 'heading_class' );
				$default_button_class  = get_sub_field( 'button_class' );
			}
		}
	endwhile;
endif;
$description = get_field( 'content' );
$button_text = get_field( 'button_text' );
$button_url  = get_field( 'button_url' );

$desktop_background = get_template_directory_uri() . '/assets/images/homepage-header-large-' . strtolower( $default_heading_class ) . '.png';

?>

    <div<?php echo $idAtt; ?><?php echo $magAtt; ?> class="grid-container nopadding red-spacer">
        <div class="large-12 homepage-header sh-container">
            <div class="sh-background show-for-med-large" style="background-image: url(<?php echo $imageURL; ?>);">
                <div class="sh-background" style="background-image: url(<?php echo $desktop_background; ?>)"></div>

            </div>
            <div class="sh-background hide-for-med-large <?php echo strtolower( $default_heading_class ); ?>-background text-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/mobile-header-mask.png'?>">
            </div>
            <div class="sh-background is-animating">
                <div class="logo text-center">
                    <img src="<?php echo $logoURL; ?>" alt=""/>
                </div>
                <div class="message text-center"><h2
                            class="h1 <?php echo strtolower( $default_heading_class ); ?> underline"><?php echo $default_heading; ?></h2>
                </div>
                <div class="anim-step-two">
                    <div class="description"><?php echo $description; ?></div>
                    <div class="text-center" data-magellan><a
                                class="<?php echo strtolower( $default_button_class ); ?>-scroll-button nav-btn"
                                href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a></div>
                </div>
            </div>
        </div>
    </div>

<?php
/**
 */
