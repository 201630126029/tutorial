<?php get_header(); ?>
	<div id="container">

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="entry">
					<?php the_content(); ?>
					
					<?php link_pages('<strong>Pages:</strong>', '', 'number'); ?>
					<?php edit_post_link('Edit', '', ''); ?>
					
				</div>
			</div>
		<?php endwhile; ?>
		<?php else : ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php _e('Not Found'); ?></h2>
			</div>
		<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
</div>
</body>

</html>