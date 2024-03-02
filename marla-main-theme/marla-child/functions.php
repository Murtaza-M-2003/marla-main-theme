<?php
if (!defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}
// add_action( 'wp_enqueue_scripts', function () {
// 	wp_enqueue_style( 'parent-style', get_theme_file_uri() . '/style.css' );

// });

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('toggle-mode', get_theme_file_uri('/js/darkmode.js'), array(), _S_VERSION, true);
	wp_enqueue_script('transformed', get_theme_file_uri('/js/transformed.js'), array(), _S_VERSION, true);
	wp_enqueue_style('style-child', get_stylesheet_uri());
	//transformed
	// wp_enqueue_script('transformed-mmmmm', get_theme_file_uri('/js/transformed.js'), array(), _S_VERSION, true);

	// wp_enqueue_style( 'sd_style_css', get_theme_file_uri().'/assets/css/styles.css', [], time(), 'all');
}, 99);

require_once('inc/modify_fun.php');


function add_social_links_to_author_profile($contactmethods)
{
	// Add social media links
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['facebook'] = 'Facebook';
	$contactmethods['linkedin'] = 'LinkedIn';
	$contactmethods['github'] = 'Github';
	$contactmethods['instagram'] = 'Instagram';
	$contactmethods['youtube'] = 'Youtube';

	// ... Add other social networks as needed

	// Remove unwanted default contact methods


	return $contactmethods;
}
add_filter('user_contactmethods', 'add_social_links_to_author_profile');


function category_cta_button()
{
	$target_category_slug = 'news';
	$target_category = get_category_by_slug($target_category_slug);

	// Check if the category exists
	if ($target_category) {
		$target_category_url = get_category_link($target_category->term_id);
		echo '<a href="' . esc_url($target_category_url) . '" class="cta-button">Category Button</a>';
	} else {
		echo 'Category not found';
	}
}