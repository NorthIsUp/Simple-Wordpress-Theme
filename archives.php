<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="page">

	<div class="column span-9 first" id="maincontent">

		<div class="content">

			<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

			<h2>Archives by Subject:</h2>
				<ul>
					 <?php wp_list_categories(); ?>
				</ul>

	</div> <!-- /content -->
</div> <!-- /maincontent-->

<?php get_sidebar(); ?>

</div> <!-- /page -->

<?php get_footer(); ?>
