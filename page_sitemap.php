<?php

// Template Name: Sitemap

// Remove standard post content output
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_entry_content', 'genesis_page_archive_content' );
add_action( 'genesis_post_content', 'genesis_page_archive_content' );
/**
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 */
function genesis_page_archive_content() { ?>

	<h4><?php _e( 'Pages:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_list_pages( 'title_li=' ); ?>
	</ul>

	<h4><?php _e( 'Categories:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
	</ul>

	<h4><?php _e( 'Authors:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_list_authors( 'exclude_admin=0&optioncount=1' ); ?>
	</ul>

	<h4><?php _e( 'Monthly:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_get_archives( 'type=monthly' ); ?>
	</ul>

	<h4><?php _e( 'Recent Posts:', 'genesis' ); ?></h4>
	<ul>
		<?php wp_get_archives( 'type=postbypost&limit=100' ); ?>
	</ul>

<?php
}

genesis();
