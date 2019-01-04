<?php
$class = '';
if ( $block["className"] ) {
	$class = ' class="' . $block["className"] . '"';
}
?>
<?php
$anchor_tag = get_field( 'anchor_tag' );
$idAtt      = '';
if ( $anchor_tag ) {
	$idAtt = ' id="' . $anchor_tag . '"';
}
?>
<div<?php echo $idAtt; ?><?php echo $class; ?> style="padding-top: 5em; padding-bottom: 5em; padding-left: 0.5em; padding-right: 0.5em;">
    <div class="grid-container nopadding" style="max-width: 980px;">
        <div class="grid-x">
            <div class="large-3 medium-4 small-12 column-content-pad-right larger-text">
				<?php $title = get_field( 'title' ); ?>
				<?php echo $title; ?>
            </div>
            <div class="large-4 medium-4 small-12 column-left-border" style="line-height: 1.25;">
				<?php $column_1 = get_field( 'column_1' ); ?>
				<?php echo $column_1; ?>
            </div>
            <div class="large-1 show-for-large">
                &nbsp;
            </div>
            <div class="large-4 medium-4 small-12 column-left-border" style="line-height: 1.25;">
				<?php $column_2 = get_field( 'column_2' ); ?>
				<?php echo $column_2; ?>
            </div>
        </div>
    </div>
</div>




