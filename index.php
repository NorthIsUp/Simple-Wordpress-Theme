<?php get_header(); ?>
<div class="column span-10 last" id="maincontent">
	<div class="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<div class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<span class="post-time"><?php the_time('F j, Y'); ?></span>
					<?php if(get_the_author() != "adam"): ?>, by <span class="post-author"><?php the_author_posts_link() ?></span><?php endif; ?>
					</span>
				</div>
			</div><!--.post-single-->
		<?php endwhile; else: ?>
			<div class="no-results">
				<p><strong>There has been an error.</strong></p>
				<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
				<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
			</div><!--noResults-->
		<?php endif; ?>

		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>

	</div> <!-- /content -->
</div> <!-- /maincontent-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
