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
$author_name = get_the_author_meta('display_name'); // Get the author's display name
$author_description = get_the_author_meta('description');
$author_id = get_the_author_meta('ID');
$author_link = get_author_posts_url($author_id);
$the_date = get_the_date();
$category = get_the_category()[0];
$cat_link = get_category_link($category);
$cat_name = $category->name;
$post_tags = get_the_tags();
?>

<div class="pb-0 pt-5">
    <header class="container entry-header mb-2 px-0">

        <?php
        if ($post_tags) {
            echo '<div class="post-tags d-flex gap-2">';
            echo '<span class="tags-title"></span>';
            foreach ($post_tags as $tag) {
                echo ' <p><span class="badge"><a href="' . get_tag_link($tag->term_id) . '">' . esc_html($tag->name) . '</a>';
            }
            echo '</div>';
        }

        the_breadcrumb();

        if (is_singular()):
            the_title('<h1 class="entry-title my-2 ">', '</h1>');
        else:
            the_title('<h2 class="entry-title my-2 "><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()):
            ?>

            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <div class="entry-meta d-flex gap-2 align-items-center">
                <p class="mb-0">
                    <span class="fw-semibold">Date :</span>
                    <?php echo $the_date; ?>
                </p>
            </div>
        <?php endif; ?>
    </header>
</div>