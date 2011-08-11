<?php get_header(); ?>

	<div id="page">

		<div class="column span-9 first" id="maincontent">

			<div class="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results for "<?php echo $s ?>"</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>
		
		<div class="clear"></div>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
				<?php
				// Support for "Search Excerpt" plugin
				// http://fucoder.com/code/search-excerpt/
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
				<p class="small">
					<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
					<!-- by <?php the_author() ?> -->
					Published in
					<?php the_category(', ');
						if($post->comment_count > 0) { 
								echo ' &nbsp;|&nbsp; ';
								comments_popup_link('', '1 Comment', '% Comments'); 
						}
					?>
				</p>
				
			</div>
			
			<hr>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

		</div> <!-- /content -->
	</div> <!-- /maincontent-->

	<?php get_sidebar(); ?>

	</div> <!-- /page -->

<?php get_footer(); ?>