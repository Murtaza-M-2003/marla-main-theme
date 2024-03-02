<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marla-mm
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if (is_author()) {
		get_template_part('template-parts/author-meta', get_post_type());
	}
	?>
	<div class="container">
		<div class="row">

			<?php if (have_posts()): ?>
				<?php
				do_action('pls_cat_before_loop');
				/* Start the Loop */
				while (have_posts()):
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */


					// if (is_home() || is_front_page()) {
					// 	// This is the main index page
					// 	get_template_part('template-parts/content', get_post_type());
					// } elseif (is_author()) {
					// 	// This is the author page
					// 	get_template_part('template-parts/content', get_post_type());
					// } else {
					// 	// This is not the main index page or author page
					// 	get_template_part('template-parts/category_content', get_post_type());
					// }
			
					get_template_part('template-parts/content', get_post_type());


				endwhile;
				do_action('pls_cat_after_loop');

				bootscore_pagination();

			else:
				?>



				<div class="py-5 text-center">
					<p>
						<?php esc_html_e('No content found. Please try again with some different keywords.', 'marla-mm'); ?>
					</p>
					<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<label class="w-100">
							<span class="screen-reader-text">
								<?php echo _x('Search for:', 'label', 'your-theme-text-domain'); ?>
							</span>
							<input type="search" class="search-field w-100 p-2 "
								placeholder="<?php echo esc_attr_x('Hit enter to search or ESC to close', 'placeholder', 'your-theme-text-domain'); ?>"
								value="<?php echo get_search_query(); ?>" name="s" />
						</label>
					</form>
				</div>
			<?php endif; ?>
		</div>
	</div>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();