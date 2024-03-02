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
	<div class="col-lg-10 col-md-12 mx-auto ">

		<div class="container">
			<div class="row g-3 g-lg-5 mb-5">
				<article id="post-<?php the_ID(); ?>" class="col-lg-9 col-md-12 ">
					<?php
					while (have_posts()):
						the_post();
					
						get_template_part('template-parts/single/content', get_post_type());
					
						endwhile; // End of the loop. ?>
					
				</article>
				
				<aside class="col-lg-3 border-start py-5">
					<div class="sticky-sm-top top-15 z-1">
						<?php  dynamic_sidebar( 'article_sidebar' ); ?>	
					</div>
				</aside>
			</div>
		</div>

		<!-- related-post -->
		<div class="container mb-5 ">
			<span class="related-title fs-3 fw-bold">Related Post</span>
			<div class="row">
				<?php get_template_part('template-parts/related-post'); ?>
			</div>
		</div>
		
				
		<!-- comment section -->
		<div class="container mb-5 ">
			<div class="row">
				<?php
				if (comments_open() || get_comments_number()) {
					comments_template();
				}
				?>
			</div>
		</div>

		
	</div>
</main>

<?php
get_footer(); 
?>