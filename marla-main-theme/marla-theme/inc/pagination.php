<?php

/**
 * Pagination
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Pagination Categories
 */

 if (!function_exists('bootscore_pagination')) :
  function bootscore_pagination($pages = '', $range = 2)
  {
      $showitems = ($range * 2) + 1;
      global $paged;
      // default page to one if not provided
      if (empty($paged)) $paged = 1;
      if ($pages == '') {
          global $wp_query;
          $pages = $wp_query->max_num_pages;

          if (!$pages) {
              $pages = 1;
          }
      }

      if (1 != $pages) {
          echo '<nav aria-label="Page navigation ">';
          echo '<div class="pagination justify-content-between my-4 py-4 border-top">';
          echo '<div class="page-item page-prev">';
          echo ($paged > 1) ? '<a class="page-link bg-success text-white b-0" href="' . get_pagenum_link($paged - 1) . '" aria-label="' . esc_html__('Previous', 'bootscore') . '">Previous</a>' : '<span class="page-link disabled bg-secondary text-white b-0" aria-label="' . esc_html__('Previous', 'bootscore') . '">Previous</span>';
          echo '</div>';
          echo '<div class="inner-item">';

          echo '<div class="page-item d-flex gap-2">';

          for ($i = 1; $i <= $pages; $i++) {
              if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                  echo ($paged == $i) ? '<a class="page-link active bg-success text-white border border-0" href="' . get_pagenum_link($i) . '"><span class="visually-hidden">' . __('Current Page', 'bootscore') . '</span>' . $i . '</a>' : '<a class="page-link text-dark border-light-subtle" href="' . get_pagenum_link($i) . '"><span class="visually-hidden">' . __('Page', 'bootscore') . ' </span>' . $i . '</a>';
              }
          }

          echo '</div>';

          echo '</div>';
          echo '<div class="page-item page-next">';
          echo ($paged < $pages) ? '<a class="page-link bg-success text-white b-0" href="' . get_pagenum_link(($paged === 0 ? 1 : $paged) + 1) . '" aria-label="' . esc_html__('Next', 'bootscore') . '">Next</a>' : '<span class="page-link disabled bg-secondary text-white b-0" aria-label="' . esc_html__('Next', 'bootscore') . '">Next</span>';
          echo '</div>';
          echo '</div>';
          echo '</nav>';
      }
  }

endif;



/**
 * Pagination Single Posts
 */
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
  $code = 'class="page-link"';

  return str_replace('<a href=', '<a ' . $code . ' href=', $output);
}
