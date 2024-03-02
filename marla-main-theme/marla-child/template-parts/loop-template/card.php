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
$author_name = get_the_author_meta('display_name');

$column_class = (isset($args['class'])) ? $args['class'] : '';
$img_class = (isset($args['image_class'])) ? $args['image_class'] : '';

$html_view = (isset($args['view'])) ? $args['view'] : '';
?>



<?php switch ($html_view) {
    case 'archive': ?>
        <article id="post-<?php the_ID(); ?>" class="<?php echo $column_class ?>">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="d-block card-link h-100">
                <div class="card card-grid border-0 overflow-hidden h-100">
                    <div class="post-image <?php echo $img_class ?>">
                        <?php
                        if ($thumbnail_html) {
                            echo $thumbnail_html;
                        }
                        ?>
                    </div>
                    <div class="card-img-overlay">
                        <span class="badge">
                            <?php echo esc_html($cat_name); ?>
                        </span>
                    </div>

                    <div class="card-body">
                        <div class="card-title lh-sm fw-bold">
                            <?php echo esc_html($title); ?>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        <?php
        break;

    case 'slider': ?>
        <swiper-slide>

            <a href="<?php echo esc_url(get_permalink()); ?>" class="d-block card-link h-100">
                <div class="card mt-3 border-0 rounded-4 overflow-hidden" style="min-height: 343px;">
                    <div class="post-image <?php echo $img_class ?>">
                        <?php
                        if ($thumbnail_html) {
                            echo $thumbnail_html;
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white">
                            <p class="mb-0"><?php echo esc_html($title); ?></p>
                        </h5>
                        <p class="card-text text-white">
                            <?php echo esc_html($cat_name); ?>
                        </p>
                    </div>
                </div>
            </a>

        </swiper-slide>

        <?php
        break;
} ?>