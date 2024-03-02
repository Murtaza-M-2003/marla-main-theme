<?php
/*
Template Name: All Posts
*/
?>

<?php get_header(); ?>

<!-- .page-header -->
<section class=" mb-4" style="background: url('http://localhost/designLab/wp-content/uploads/2024/02/pro-ban.jpg');    background-size: cover;
    background-position: 100% 0%;
    background-repeat: no-repeat;">
    <div class="cat-bg py-5">
        <div class="py-5">
            <div class="page-header container py-5 text-center">
                <h1>
                    <?php
                    wp_title('');
                    ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- .page-header -->

<!-- section1 -->
<main class="port-main-sec py-5 pt-0"
    style="background: linear-gradient(90deg,
    #38b6ff 0%, rgba(26,52,50,1) 100%); height: 312px; border-radius: 20px;margin-top: 70px;margin-bottom: 150px;">
    <section class="container my-3 sec-3">
        <article class="row">
            <div class="col-lg-12">
                <div class="view d-flex justify-content-between align-items-center">
                    <h1 class="sec-head-p text-white mb-0 mt-4" style="font-size: 35px;">Graphic Designing</h1>
                    <a class="port-cta d-flex justify-content-center mt-4" href="" style="color: #fff;">
                        <div class="cta-div px-3 py-2 rounded bg-white fw-semibold"
                            style="width: fit-content; height: fit-content;">
                            VIEW ALL</div>
                    </a>
                </div>
                <div class="swiper position-relative">
                    <swiper-container class="mySwiper " autoplay-delay="2000" autoplay-disable-on-interaction="false" ,
                        navigation='{
    "nextEl": ".custom-swiper-button-next",
    "prevEl": ".custom-swiper-button-prev"
  }' loop="true" freeMode="true" breakpoints='{
          "325": {"slidesPerView": 2, "spaceBetween": 20},
          "640": {"slidesPerView": 2, "spaceBetween": 20},
          "768": {"slidesPerView": 3, "spaceBetween": 10},
          "1024": {"slidesPerView": 5, "spaceBetween": 20} }'>
                        <?php echo do_shortcode('[post_grid template="card" view="slider" category="" image_class="aspect_ration_1 rounded-top overflow-hidden" posts_per_page="6"  class="  mb-3"]'); ?>
                    </swiper-container>
                    <!-- Add your custom navigation buttons -->
                    <div class="custom-swiper-button-prev position-absolute start-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M15.3 4.3h-13l2.8-3c.3-.3.3-.7 0-1-.3-.3-.6-.3-.9 0l-4 4.2-.2.2v.6c0 .1.1.2.2.2l4 4.2c.3.4.6.4.9 0 .3-.3.3-.7 0-1l-2.8-3h13c.2 0 .4-.1.5-.2s.2-.3.2-.5-.1-.4-.2-.5c-.1-.1-.3-.2-.5-.2z">
                            </path>
                        </svg>
                    </div>

                    <div class="custom-swiper-button-next position-absolute end-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M.2 4.5c-.1.1-.2.3-.2.5s.1.4.2.5c.1.1.3.2.5.2h13l-2.8 3c-.3.3-.3.7 0 1 .3.3.6.3.9 0l4-4.2.2-.2V5v-.3c0-.1-.1-.2-.2-.2l-4-4.2c-.3-.4-.6-.4-.9 0-.3.3-.3.7 0 1l2.8 3H.7c-.2 0-.4.1-.5.2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<!-- section1 -->

<!-- section2 -->
<main class="port-main-sec py-5 pt-0"
    style="background: linear-gradient(90deg,
    #38b6ff 0%, rgba(26,52,50,1) 100%); height: 312px; border-radius: 20px;margin-top: 150px;margin-bottom: 150px;">
    <section class="container my-3 sec-3">
        <article class="row">
            <div class="col-lg-12">
                <div class="view d-flex justify-content-between align-items-center">
                    <h1 class="sec-head-p text-white mb-0 mt-4" style="font-size: 35px;">Animation</h1>
                    <a class="port-cta d-flex justify-content-center mt-4" href="" style="color: #fff;">
                        <div class="cta-div px-3 py-2 rounded bg-white fw-semibold"
                            style="width: fit-content; height: fit-content;">
                            VIEW ALL</div>
                    </a>
                </div>
                <div class="swiper position-relative">
                    <swiper-container class="mySwiper " autoplay-delay="1500" autoplay-disable-on-interaction="false" ,
                        navigation='{
    "nextEl": ".custom-swiper-button-next",
    "prevEl": ".custom-swiper-button-prev"
  }' loop="true" freeMode="true" breakpoints='{
          "325": {"slidesPerView": 2, "spaceBetween": 20},
          "640": {"slidesPerView": 2, "spaceBetween": 20},
          "768": {"slidesPerView": 3, "spaceBetween": 10},
          "1024": {"slidesPerView": 5, "spaceBetween": 20} }'>
                        <?php echo do_shortcode('[post_grid template="card" view="slider" category="" image_class="aspect_ration_1 rounded-top overflow-hidden" posts_per_page="6"  class="  mb-3"]'); ?>
                    </swiper-container>
                    <!-- Add your custom navigation buttons -->
                    <div class="custom-swiper-button-prev position-absolute start-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M15.3 4.3h-13l2.8-3c.3-.3.3-.7 0-1-.3-.3-.6-.3-.9 0l-4 4.2-.2.2v.6c0 .1.1.2.2.2l4 4.2c.3.4.6.4.9 0 .3-.3.3-.7 0-1l-2.8-3h13c.2 0 .4-.1.5-.2s.2-.3.2-.5-.1-.4-.2-.5c-.1-.1-.3-.2-.5-.2z">
                            </path>
                        </svg>
                    </div>

                    <div class="custom-swiper-button-next position-absolute end-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M.2 4.5c-.1.1-.2.3-.2.5s.1.4.2.5c.1.1.3.2.5.2h13l-2.8 3c-.3.3-.3.7 0 1 .3.3.6.3.9 0l4-4.2.2-.2V5v-.3c0-.1-.1-.2-.2-.2l-4-4.2c-.3-.4-.6-.4-.9 0-.3.3-.3.7 0 1l2.8 3H.7c-.2 0-.4.1-.5.2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<!-- section2 -->

<!-- section3 -->
<main class="port-main-sec py-5 pt-0"
    style="background: linear-gradient(90deg,
    #38b6ff 0%, rgba(26,52,50,1) 100%); height: 312px; border-radius: 20px;margin-top: 150px;margin-bottom: 150px;">
    <section class="container my-3 sec-3">
        <article class="row">
            <div class="col-lg-12">
                <div class="view d-flex justify-content-between align-items-center">
                    <h1 class="sec-head-p text-white mb-0 mt-4" style="font-size: 35px;">Web Designing</h1>
                    <a class="port-cta d-flex justify-content-center mt-4" href="" style="color: #fff;">
                        <div class="cta-div px-3 py-2 rounded bg-white fw-semibold"
                            style="width: fit-content; height: fit-content;">
                            VIEW ALL</div>
                    </a>
                </div>
                <div class="swiper position-relative">
                    <swiper-container class="mySwiper " autoplay-delay="2500" autoplay-disable-on-interaction="false" ,
                        navigation='{
    "nextEl": ".custom-swiper-button-next",
    "prevEl": ".custom-swiper-button-prev"
  }' loop="true" freeMode="true" breakpoints='{
          "325": {"slidesPerView": 2, "spaceBetween": 20},
          "640": {"slidesPerView": 2, "spaceBetween": 20},
          "768": {"slidesPerView": 3, "spaceBetween": 10},
          "1024": {"slidesPerView": 5, "spaceBetween": 20} }'>
                        <?php echo do_shortcode('[post_grid template="card" view="slider" category="" image_class="aspect_ration_1 rounded-top overflow-hidden" posts_per_page="6"  class="  mb-3"]'); ?>
                    </swiper-container>
                    <!-- Add your custom navigation buttons -->
                    <div class="custom-swiper-button-prev position-absolute start-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M15.3 4.3h-13l2.8-3c.3-.3.3-.7 0-1-.3-.3-.6-.3-.9 0l-4 4.2-.2.2v.6c0 .1.1.2.2.2l4 4.2c.3.4.6.4.9 0 .3-.3.3-.7 0-1l-2.8-3h13c.2 0 .4-.1.5-.2s.2-.3.2-.5-.1-.4-.2-.5c-.1-.1-.3-.2-.5-.2z">
                            </path>
                        </svg>
                    </div>

                    <div class="custom-swiper-button-next position-absolute end-0 top-50 z-1 d-inline bg-white rounded-circle"
                        style="padding: 6px 12px;">
                        <svg width="12" height="10" viewBox="0 0 16 10">
                            <path
                                d="M.2 4.5c-.1.1-.2.3-.2.5s.1.4.2.5c.1.1.3.2.5.2h13l-2.8 3c-.3.3-.3.7 0 1 .3.3.6.3.9 0l4-4.2.2-.2V5v-.3c0-.1-.1-.2-.2-.2l-4-4.2c-.3-.4-.6-.4-.9 0-.3.3-.3.7 0 1l2.8 3H.7c-.2 0-.4.1-.5.2z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<!-- section3 -->

<?php get_footer(); ?>