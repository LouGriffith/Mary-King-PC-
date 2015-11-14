<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="entry-header">
				<?php
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
				<!-- <?php reverie_entry_meta(); ?> -->
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
			</footer>
		</article>
		<?php edit_post_link('Edit this Post'); ?>
		<div class="entry-author panel">
			<div class="row">
				<div class="large-3 columns">
					<?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
				</div>
				<div class="large-9 columns">
					<h4><?php the_author_posts_link(); ?></h4>
					<p class="cover-description"><?php the_author_meta('description'); ?></p>
				</div>
			</div>
		</div>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>