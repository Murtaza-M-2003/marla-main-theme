<?php
/**
 * Template part for displaying posts
 */

$category = get_the_category()[0];
$cat_link = get_category_link($category);
$cat_name = $category->name;
$post_id = get_the_ID();
$thumbnail_id = get_post_thumbnail_id($post_id);
$thumbnail_html = wp_get_attachment_image($thumbnail_id, 'medium_large');
$title = get_the_title();
$author_name = get_the_author_meta('display_name'); // Get the author's display name
$the_date = get_the_date();
?>

<article id="post-<?php the_ID(); ?>" class="col-lg-12 mb-4">
    <a href="<?php echo esc_url(get_permalink()); ?>" class="cover-item">
        <div class="card cat-card border-0 overflow-hidden">
            <div class="row">
                <div class="col-md-4">
                    <div class="post-image aspect_ration_16">
                        <?php
                        if ($thumbnail_html) {
                            echo $thumbnail_html;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class=" card-body h-100 d-flex flex-column justify-content-center">
                        <p><span class="badge">
                                <?php echo esc_html($cat_name); ?>
                            </span></p>
                        <div class="card-info">
                            <div class="card-title fw-bold">
                                <?php echo esc_html($title); ?>
                            </div>
                            <div class="card-text d-flex gap-2 align-items-center m-0">
                                <?php echo esc_html($the_date); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article><!-- #post-<?php the_ID(); ?> -->

</article><!-- #post-<?php the_ID(); ?> -->