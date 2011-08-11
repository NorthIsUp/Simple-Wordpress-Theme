<?php get_header(); ?>

<div id="page">

	<div class="column span-9 first" id="maincontent">

		<div class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit', '<p>[ ', ' ]</p>'); ?>

	</div> <!-- /content -->
</div> <!-- /maincontent-->

<?php get_sidebar(); ?>

</div> <!-- /page -->

<?php get_footer(); ?>