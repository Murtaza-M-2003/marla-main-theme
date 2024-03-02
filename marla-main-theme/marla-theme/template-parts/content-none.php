<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marla-mm
 */

?>



<section class="no-results not-found text-center py-5">
	
	<div class="page-header ">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'marla-mm' ); ?></h1>
</div><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'marla-mm' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'marla-mm' ); ?></p>
			<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    			<label class="w-100">
    			    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'your-theme-text-domain'); ?></span>
    			    <input type="search" class="search-field w-100 p-2 " placeholder="<?php echo esc_attr_x('Hit enter to search or ESC to close', 'placeholder', 'your-theme-text-domain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    			</label>
    		</form>
			<?php
		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'marla-mm' ); ?></p>
			<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    			<label class="w-100">
    			    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'your-theme-text-domain'); ?></span>
    			    <input type="search" class="search-field w-100 p-2 " placeholder="<?php echo esc_attr_x('Hit enter to search or ESC to close', 'placeholder', 'your-theme-text-domain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    			</label>
    		</form>
			
			<?php
			

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
