<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'custom_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => 'Custom Types', /* This is the Title of the Group */
			'singular_name' => 'Custom Post', /* This is the individual type */
			'all_items' => 'All Custom Posts', /* the all items menu item */
			'add_new' => 'Add New', /* The add new menu item */
			'add_new_item' => 'Add New Custom Type', /* Add New Display Title */
			'edit' => 'Edit', /* Edit Dialog */
			'edit_item' => 'Edit Post Types', /* Edit Display Title */
			'new_item' => 'New Post Type', /* New Display Title */
			'view_item' => 'View Post Type', /* View Display Title */
			'search_items' => 'Search Post Type', /* Search Custom Type Title */ 
			'not_found' =>  'Nothing found in the Database.', /* This displays if there are no entries yet */ 
			'not_found_in_trash' => 'Nothing found in Trash', /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => 'This is the example custom post type', /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'custom_type' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'custom_type' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'custom_cat', 
		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => 'Custom Categories', /* name of the custom taxonomy */
				'singular_name' => 'Custom Category', /* single taxonomy name */
				'search_items' =>  'Search Custom Categories', /* search title for taxomony */
				'all_items' => 'All Custom Categories', /* all title for taxonomies */
				'parent_item' => 'Parent Custom Category', /* parent title for taxonomy */
				'parent_item_colon' => 'Parent Custom Category:', /* parent taxonomy title */
				'edit_item' => 'Edit Custom Category', /* edit custom taxonomy title */
				'update_item' => 'Update Custom Category', /* update title for taxonomy */
				'add_new_item' => 'Add New Custom Category', /* add new title for taxonomy */
				'new_item_name' => 'New Custom Category Name' /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'custom-slug' ),
		)
	);
	
	// now let's add custom tags (these act like categories)
	register_taxonomy( 'custom_tag', 
		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => 'Custom Tags', /* name of the custom taxonomy */
				'singular_name' => 'Custom Tag', /* single taxonomy name */
				'search_items' =>  'Search Custom Tags', /* search title for taxomony */
				'all_items' => 'All Custom Tags', /* all title for taxonomies */
				'parent_item' => 'Parent Custom Tag', /* parent title for taxonomy */
				'parent_item_colon' => 'Parent Custom Tag:', /* parent taxonomy title */
				'edit_item' => 'Edit Custom Tag', /* edit custom taxonomy title */
				'update_item' => 'Update Custom Tag', /* update title for taxonomy */
				'add_new_item' => 'Add New Custom Tag', /* add new title for taxonomy */
				'new_item_name' => 'New Custom Tag Name' /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);
	
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/
	

?>
