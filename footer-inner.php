<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer grid-container nopadding" role="contentinfo" style="max-width: 980px;">
					
					<div class="inner-footer grid-x">

                        <div class="large-3 show-for-large"></div>
                        <div class="large-9 medium-12 small-12">
                            <div style="padding-top: 3em; padding-bottom: 2em;">
                            <a href="/" class="blue-button text-center blue-arrow-right">Return to main site</a>
                            </div>
                            <span style="padding-right: 3em;">Charity Number: 1161440</span><span>Designed by Jake Jennings</span>
                        </div>
						
						<!--<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
	    						<?php /*joints_footer_links(); */?>
	    					</nav>
	    				</div>
						
						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">&copy; <?php /*echo date('Y'); */?> <?php /*bloginfo('name'); */?>.</p>
						</div>-->
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->