<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="entry-header">
				
				<?php if (is_front_page() ) { ?>
						<div class="featured-header">
							<div class="featured-header-image">
								<?php 

									$image = get_field('homepage_image');

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endif; ?>
							</div>
							
							<div class="featured-copy">
								<h1 class="entry-title headline">
									<?php the_field('homepage_headline'); ?>
								</h1>
								<p class="subline">
									<?php the_field('homepage_subline'); ?>
								</p>
							</div>
						</div>

				
				<?php } else {

					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) { ?>
					<div class="featured-header">
						<div class="featured-header-image">
							<?php the_post_thumbnail('fd-featured'); ?>
						</div>

						<h1 class="entry-title featured-title"><?php the_title(); ?></h1>
					</div>

					
					<?php } else {?>

						<h1 class="entry-title no-featured-image"><?php the_title(); ?></h1>

					<?php } ?>

				<?php } ?>

				<!-- <?php reverie_entry_meta(); ?> -->
			</header>
			<div class="entry-content">
				<?php the_content(); ?>

				<?php if (is_front_page() ) { ?>
				
				<div class="row home-columns">
					<div class="small-12 large-4 columns">

						<div class="column-image">
							<?php 

								$image = get_field('column_icon');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>

						<div class="column-content">

							<h3 class="column-headline">
								<?php the_field('column_headline'); ?>
							</h3>

							<p class="column-text">
								<?php the_field('column_text'); ?>
							</p>
						</div>

					</div>
					<!-- /end column -->

					<div class="small-12 large-4 columns">

						<div class="column-image">
							<?php 

								$image = get_field('homepage_column_icon_2');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>

						<div class="column-content">

							<h3 class="column-headline">
								<?php the_field('homepage_column_headline_2'); ?>
							</h3>

							<p class="column-text">
								<?php the_field('homepage_column_text_2'); ?>
							</p>
						</div>

					</div>
					<!-- /end column -->

					<div class="small-12 large-4 columns">

						<div class="column-image">
							<?php 

								$image = get_field('homepage_column_icon_3');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>

						<div class="column-content">

							<h3 class="column-headline">
								<?php the_field('homepage_column_headline_3'); ?>
							</h3>

							<p class="column-text">
								<?php the_field('homepage_column_text_3'); ?>
							</p>
						</div>

					</div>
					<!-- /end column -->
					</div>

				<?php } ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>
