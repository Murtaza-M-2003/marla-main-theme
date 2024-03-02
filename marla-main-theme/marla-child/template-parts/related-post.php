<?php
// Custom Related Posts Query
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);
$taxonomy_ids = array();
$the_date = get_the_date();

// Check if categories are available
if ($categories) {
    foreach ($categories as $category) {
        $taxonomy_ids[] = $category->term_id;
    }

    $taxonomy_ids = array_unique($taxonomy_ids);

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post__not_in' => array($current_post_id),
        'category__in' => $taxonomy_ids,
    );

    $related_posts_query = new WP_Query($args);

    $output = '';

    if ($related_posts_query->have_posts()) {
        // $output .= '<div class="related-posts">';
        // $output .= '<h2>Related Posts</h2>';
        // $output .= '<div class="container"><div class="row">';

        while ($related_posts_query->have_posts()) {
            $related_posts_query->the_post();

            $output .= '
                <a class="col-lg-3 col-md-6 col-sm-12 col-12 mb-3" href="' . get_permalink() . '" >
                    <div class="card border-0 overflow-hidden">
                        <div class="post-image aspect_ration_16 rounded overflow-hidden">
                            ' . get_the_post_thumbnail() . '
                        </div>
                        <div class="card-body px-0 bg-transparent">
                            <div class="card-title fs-6 lh-sm fw-bold">' . get_the_title() . '</div>
                            <p class="card-text m-0 fs-6 lh-1"> ' . $the_date . ' </p>
                        </div>
                    </div>
                </a>';
        }

        // $output .= '</div></div></div>';
        wp_reset_postdata();
    } else {
        $output .= '<div class="related-posts">';
        $output .= '<p>No related posts found.</p>';
        $output .= '</div>';
    }

    // Output the variable
    echo $output;
}
?>