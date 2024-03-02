<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marla-mm
 */
$post_id = get_the_ID();
$thumbnail_id = get_post_thumbnail_id($post_id);
$thumbnail_html = wp_get_attachment_image($thumbnail_id, 'full');
$thumbnail = get_the_post_thumbnail();
$author_name = get_the_author_meta('display_name');
$author_description = get_the_author_meta('description');
?>



<div class="featured-image mb-3 rounded overflow-hidden">
	<?php
	// Output the post thumbnail if it exists
	if ($thumbnail_html) {
		// echo '<img width="900" height="500" src="' . esc_url($thumbnail_url) . '" class="attachment-medium_large size-medium_large img-fluid w-100 object-fit-cover rounded my-3" style="aspect-ratio: 16/9;">';
		echo $thumbnail_html;
	}
	?>
</div>

<div class="entry-content">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'marla'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post(get_the_title())
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'marla'),
			'after' => '</div>',
		)
	);
	?>
</div><!-- .entry-content -->


