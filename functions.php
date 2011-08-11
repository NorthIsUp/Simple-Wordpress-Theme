<?php

/*-----------------------------------------------------------------------------
	Widget Support
-----------------------------------------------------------------------------*/
if ( function_exists('register_sidebar') )
    register_sidebar();

/*-----------------------------------------------------------------------------
	Display Post Template
-----------------------------------------------------------------------------*/
function getPost($post = NULL) {
	include('post.php');
}

/*-----------------------------------------------------------------------------
	Install Options - Not implemented yet
-----------------------------------------------------------------------------
if (!get_option('blueprint_installed')) {

	add_option('blueprint_installed',
						 $current, 
						 'This options simply tells me if K2 has been installed before', 
						 $autoload);

	add_option('blueprint_aboutblurp', 
						 'Enter your about text', 
						 'Allows you to write a small blurp about you and your blog, which will be put on the frontpage', 
						 $autoload);

	add_option('blueprint_columns', 
						 '12', 
						 'The number of columns across the page (default is 12)', 
						 $autoload);

	add_option('blueprint_columns_content',
						 '9', 
						 'Number of columns the content (left side) takes up (default is 9, this and sidebar must add up to total column number)',
							$autoload);

	add_option('blueprint_column_sidebar',
						 '3', 
						'Number of columns the sidebar (right side) takes up (default is 3, this and left column must add up to total column number)',
						$autoload);

	add_option('blueprint_show_author',
						 '0', 
						'Show the author on posts? (Default: no)',
						$autoload);

	add_option('blueprint_show_tagline',
						 '0', 
						'Show the tagline under the site title? (Default: no)',
						$autoload);

}
*/

?>
