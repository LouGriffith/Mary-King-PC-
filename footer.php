		</div><!-- Row End -->
	</div><!-- Container End -->
	
	<div id="footer">
		<footer class="full-width footer" role="contentinfo">
			<div class="row">
				<div class="small-5 medium-2 columns footer-logo">
	        		<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><i class="icon-logo"><span><?php bloginfo( 'name' ); ?><span></i></a></h2>
				</div>

				<div class="small-12 medium-10 columns">
					<?php
					    $args = array(
							'numberposts' => 1,
					      	'post_type' => 'location',
					    );
					    
					    $location = new WP_Query( $args );
					    if( $location->have_posts() ) {
					      	while( $location->have_posts() ) {
					        	$location->the_post();
					        ?>
					        <?php if(get_field('legal_copy')) { ?>
					        	<small class="legal"><?php the_field('legal_copy'); ?></small>
					        <? } ?>

					        <?php
					      }
					    }
					    else {
					      echo '';
					    }
					  ?>
				</div>

			</div>

			<div class="row">
				<div class="medium-2 columns">
					
				</div>

				<div class="small-12 medium-10 columns">
					<p class="copyright"><span class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.</span><span class="handcrafted">  <?php _e('Handcrafted by','lou'); ?> <a href="http://lougriffith.com" rel="nofollow" title="Lou">Lou</a>.</span></p>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>

	<script>
		(function($) {
			$(document).foundation();
		})(jQuery);
	</script>
		
	</body>
</html>