<?php
/**
 * Template part for displaying loop posts
 */

$category = get_the_category()[0];
$cat_link = get_category_link($category);
$cat_name = $category->name;
$post_id = get_the_ID();
$thumbnail_id = get_post_thumbnail_id($post_id);
$thumbnail_html = wp_get_attachment_image($thumbnail_id, 'medium_large');
$title = get_the_title();
$author_name = get_the_author_meta('display_name'); // Get the author's display name
$author_link = get_author_posts_url(get_the_author_meta('ID'));
?>


<article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 col-12 mb-4 <?php post_class(); ?>">

    <div class="card bg-body-tertiary border-0 mb-3">
        <div class="card-body">
            <a class="card-text m-0 text-dark d-block lh-1" href="<?php echo esc_html($cat_link); ?>">
                <?php echo esc_html($cat_name); ?>
            </a>
        </div>
    </div>

</article>