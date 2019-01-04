<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */
$contentClass = '';
if ( is_front_page() ) :
	get_header();
	$contentClass = ' grid-container nopadding';
else:
	get_header( 'inner' );
endif;
?>

    <div class="content<?php echo $contentClass; ?>">

        <div class="inner-content">

            <main class="main" role="main">

				<?php
				if ( ! is_front_page() ):
					?>
                    <header class="light-blue-background">
                        <div class="grid-container nopadding" style="max-width: 980px;">
                            <div class="grid-x">
                                <div class="large-2 medium-2 small-2"><img src="<?php echo get_template_directory_uri();?>/assets/images/say_hello_logo_RGB.png"></div>
                                <div class="large-10 medium-10 small-10" style="padding-left: 1em;">
                                    <h1 class="h1 blue"><?php the_title()?></h1>
                                    <a href="/" class="blue-button text-center blue-arrow-right">Return to main site</a>
                                </div>
                            </div>
                        </div>
                    </header>
				<?php
				endif;
				?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

            </main> <!-- end #main -->

			<?php get_sidebar(); ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php
if ( is_front_page() ) :
	get_footer();
else:
	get_footer( 'inner' );
endif;

?>