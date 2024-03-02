<?php
/*
Template Name: Contact Us Template
*/

?>

<?php get_header(); ?>

<!-- .page-header -->
<section class=" mb-4" style="background: url('http://localhost/designLab/wp-content/uploads/2024/02/con-ban.jpg');    background-size: cover;
    background-position: 100% 35%;
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

<!-- contact section1 -->
<main class="py-5 my-5">
    <section class="container">
        <article class="row">
            <div class="col-lg-6 ps-lg-5 d-flex flex-column justify-content-center">
                <div class="hero-con d-flex flex-column">
                    <h6 class="mb-1" style="font-size: 22px;"><span class="for-h6">Contact</span></h6>
                    <h1 class="sec-head text-black mb-0 py-3" style="font-size: 40px;">Please Get in
                        Touch</h1>
                    <div class="divider d-flex gap-2 py-3"></div>
                    <?php echo do_shortcode('[contact-form-7 id="072e0b0" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="map w-100">
                    <iframe class="rounded-4 overflow-hidden"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4019.8670359909597!2d-2.8828017721644255!3d53.19584071365501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487add5a4282de2d%3A0x902f5ca958328e00!2sCity%20Place%2C%20Queens%20Rd%2C%20Chester%20CH1%203BQ!5e0!3m2!1sen!2suk!4v1700661608102!5m2!1sen!2suk"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" data-rocket-lazyload="fitvidscompatible"
                        data-lazy-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4019.8670359909597!2d-2.8828017721644255!3d53.19584071365501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487add5a4282de2d%3A0x902f5ca958328e00!2sCity%20Place%2C%20Queens%20Rd%2C%20Chester%20CH1%203BQ!5e0!3m2!1sen!2suk!4v1700661608102!5m2!1sen!2suk"
                        data-ll-status="loaded" class="entered lazyloaded"></iframe>
                </div>
            </div>
        </article>
    </section>
</main>
<!-- contact section1 -->

<!-- contact section2 -->
<main class="">
    <section class="py-5 mt-5" style="background-color: #37b3fb;">
        <div class="container">
            <div class="row data py-5">
                <div class="col-lg-4 my-3">
                    <div class="contact-detail data-name d-flex align-items-center justify-content-center gap-3 bg-white rounded-4 h-100"
                        style="padding: 85px 10px;">
                        <div class="cont-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="65" fill="#38b6ff"
                                class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path fill="#38b6ff"
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                        </div>
                        <div class="cont-con">
                            <h4>ADDRESS :</h4>
                            <p class="mb-0">123 Ave, Lorem City, site Country, The World</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="contact-detail data-name d-flex align-items-center justify-content-center gap-3 bg-white rounded-4 h-100"
                        style="padding: 85px 10px;">
                        <div class="cont-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="65" fill="#38b6ff"
                                class="bi bi-phone" viewBox="0 0 16 16">
                                <path fill="#38b6ff"
                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                        </div>
                        <div class="cont-con">
                            <h4>PHONE :</h4>
                            <p class="mb-0">(001) 123456789 - 234567891 <br> info@phloxbusiness.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="contact-detail data-name d-flex align-items-center justify-content-center gap-3 bg-white rounded-4 h-100"
                        style="padding: 85px 10px;">
                        <div class="cont-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="65" fill="#38b6ff"
                                class="bi bi-stopwatch" viewBox="0 0 16 16">
                                <path fill="#38b6ff"
                                    d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z" />
                                <path fill="#38b6ff"
                                    d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3" />
                            </svg>
                        </div>
                        <div class="cont-con">
                            <h4>WORKING HOURS :</h4>
                            <p class="mb-0">Monday - Friday 09.00 - 23.00 <br> Sunday 09.00 - 16.00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- contact section2 -->



<?php get_footer(); ?>