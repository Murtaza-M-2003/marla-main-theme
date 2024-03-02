<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marla-mm
 */

get_header();
?>



<main id="primary" class="container site-main">
	<div class="col-lg-12 col-md-12 mx-auto">

		<div class="container">

			<div class="row g-3 g-lg-5">

				<article id="post-<?php the_ID(); ?>" class="col-lg-9 col-md-12 ">

					<section>
						<?php
						while (have_posts()):
							the_post();

							get_template_part('template-parts/single/content-header', get_post_type());


						endwhile; // End of the loop.
						?>
					</section>

					<?php
					while (have_posts()):
						the_post();

						get_template_part('template-parts/single/content', get_post_type());

					endwhile; // End of the loop. ?>

				</article>

				<aside class="col-lg-3 border-start py-5">
					<div class="sticky-sm-top top-15 z-1">
						<?php dynamic_sidebar('article_sidebar'); ?>
					</div>
				</aside>
			</div>
		</div>

	</div>
</main>

<!-- related-post -->
<section class="related py-5">
	<div class="container ">
		<div class="col-lg-12 col-md-12 mx-auto">
			<span class="related-title fs-3 fw-bold">Related Post</span>
			<div class="row">
				<?php get_template_part('template-parts/related-post'); ?>
			</div>
		</div>
	</div>
</section>
<!-- related-post -->

<!-- comment section -->
<div class="container py-5">
	<div class="row">
		<div class="col-lg-12 col-md-12 mx-auto">
			<?php
			if (comments_open() || get_comments_number()) {
				comments_template();
			}
			?>
		</div>
	</div>
</div>
<!-- comment section -->

<?php
get_footer();
?>