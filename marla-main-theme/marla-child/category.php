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

	<section class=" mb-4" style="background: url('https://www.gamerzgateway.com/wp-content/uploads/2023/07/header-banner.webp');    background-size: cover;
	background-position: center;
	background-repeat: no-repeat;">
		<div class="cat-bg py-5">
			<div class="py-5">
				<div class="page-header container py-5 text-center">
					<h1>
						<?php
						wp_title('');
						?>
					</h1>
				</div>
			</div>
		</div><!-- .page-header -->
	</section>

	<div class="container">
		<div class="row">

			<?php if (have_posts()): ?>
				<?php
				do_action('pls_cat_before_loop');
				/* Start the Loop */
				while (have_posts()):
					the_post();



					get_template_part('template-parts/category_content', get_post_type());


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