<?php
// post grid
function post_grid_shortcode($atts)
{

  extract(shortcode_atts(array(
    'posts_per_page' => 6,
    'post_offset' => 0,
    'category' => '',
    'template' => 'card',
    'class' => '',
    'image_class' => '',
    'view' => 'archive'
  ), $atts));

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'offset' => $post_offset,
    'category_name' => $category,
    'class' => $class,
    'image_class' => $image_class,
    'view' => $view
  );

 
  $posts = new WP_Query($args);
  $i = 0;
  while ($posts->have_posts()) {
    $posts->the_post();

    switch ($template) {
      case 'cover':
        get_template_part('template-parts/loop-template/cover', null, $args);
      break;

      case 'card':
        get_template_part('template-parts/loop-template/card', null, $args);
      break;

      case 'list':
        get_template_part('template-parts/loop-template/list', null, $args);
      break;
    }

    $i++;
  }

  wp_reset_query();

}
add_shortcode('post_grid', 'post_grid_shortcode');


// for archive
// ****************************
// <section class="py-4 mb-2">
//   <div class="container">
//     <div class="row gx-3 ">
//        echo do_shortcode('[post_grid template="cover" image_class="aspect_ratio_4" post_offset="2" posts_per_page="4"  class="col-md-3 mb-3 grid-2"]'); 
//     </div>
//   </div>
// </section>
// ****************************


// for slider
// ****************************
// <section class="py-4 mb-2 bg-black" data-bs-theme="dark">
// 		<div class="container">
// 			<swiper-container class="mySwiper" autoplay-delay="1500" autoplay-disable-on-interaction="false"
// 				navigation="false" loop="true" freeMode="true" breakpoints='{
// 	 "640": {"slidesPerView": 2, "spaceBetween": 10},
// 	 "768": {"slidesPerView": 3, "spaceBetween": 10},
// 	 "1024": {"slidesPerView": 4, "spaceBetween": 10}
// }'>

// 				<?php echo do_shortcode('[post_grid template="list" view="slider" category="design,career" image_class="aspect_ratio_1" posts_per_page="6"  class="  mb-3"]'); 
// 			</swiper-container>
// 			<!-- <div class="d-flex justify-content-between">
// 				<div class="custom-swiper-button-prev z-1 bg-white rounded-circle">prev</div>
// 				<div class="custom-swiper-button-next bg-white rounded-circle">next</div>
// 			</div> -->
// 		</div>
// 	</section>
// ****************************