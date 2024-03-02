<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marla-mm
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'marla-mm'); ?>
		</a>
		<header class="navbar bg-body z-5 d-block py-2 z-3 pt-lg-2 pb-lg-\\-0 drop-shadow">
			<div class="container d-block">
				<div class="row w-100 align-items-center">
					<div class="col-lg-2 col-md-4 col-sm-4 col-4 order-lg-1 order-md-2 order-sm-2 order-2 d-flex justify-content-center ">
						<?php the_custom_logo(); ?>
					</div>
					<div class="col-lg-8 col-md-4 col-sm-4 col-4 order-lg-2 order-md-1 order-sm-1 order-1 d-flex justify-content-lg-center justify-content-md-start">
						<div class="desktop d-none d-sm-none d-md-none d-lg-block">
							<nav class="navbar navbar-expand-lg pt-2 pb-0 justify-content-center">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'container' => false,
										'menu_class' => '',
										'menu_id' => 'primary-menu',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav position-relative gap-4 justify-content-center m-0 %2$s">%3$s</ul>',

									)
								);
								?>
							</nav>
						</div>
						<div class="off-c d-lg-none">
							<button class="btn" type="button" data-bs-toggle="offcanvas"
								data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
									class="bi bi-list" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
										d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
									</path>
								</svg>
							</button>
							<div class="offcanvas offcanvas-start bg-black w-75" data-bs-scroll="true" tabindex="-1"
								id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"
								data-bs-theme="dark">
								<div class="offcanvas-header justify-content-between">

									<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
										aria-label="Close"></button>
								</div>
								<div class="offcanvas-body">
									<nav class="navbar navbar-expand-lg ">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'container' => false,
												'menu_class' => '',
												'menu_id' => 'primary-menu',
												'fallback_cb' => '__return_false',
												'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav justify-content-center m-0 %2$s">%3$s</ul>',
												'depth' => 2,
												'walker' => new bootstrap_5_wp_nav_menu_walker()
											)
										);
										?>
									</nav>
									<!-- <div
										class="toggle-button mb-0 d-flex d-xl-none d-lg-none d-md-flex d-sm-flex sd-flex">
										<input type="checkbox" class="checkbox" id="checkbox">
										<label for="checkbox" class="checkbox-label">
											<i class="fas fa-sun z-3">
												<svg version="1.0" width="25px" height="25px"
													viewBox="0 0 150.000000 150.000000"
													preserveAspectRatio="xMidYMid meet">
													<g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)"
														fill="#f39c12" stroke="none">
														<path
															d="M471 986 c-7 -8 -11 -34 -9 -58 3 -42 4 -43 38 -43 34 0 35 1 38 43 2 24 -2 50 -9 58 -15 18 -43 18 -58 0z">
														</path>
														<path
															d="M147 852 c-24 -26 -21 -36 18 -71 37 -32 58 -32 75 0 8 14 4 26 -21 54 -35 40 -49 43 -72 17z">
														</path>
														<path
															d="M781 835 c-32 -37 -32 -58 0 -75 14 -8 26 -4 54 21 40 35 43 49 17 72 -26 24 -36 21 -71 -18z">
														</path>
														<path
															d="M407 776 c-94 -35 -164 -110 -188 -201 -26 -96 13 -231 84 -291 64 -54 106 -69 197 -69 68 0 93 5 126 22 63 34 97 66 129 125 27 47 30 63 30 138 0 75 -3 91 -30 138 -52 95 -130 143 -240 149 -44 2 -84 -2 -108 -11z">
														</path>
														<path
															d="M12 528 c-34 -34 -2 -71 60 -66 42 3 43 4 43 38 0 34 -1 35 -45 38 -26 2 -50 -2 -58 -10z">
														</path>
														<path
															d="M884 526 c-3 -8 -4 -25 -2 -38 3 -20 8 -23 52 -23 56 0 80 21 60 53 -15 23 -102 30 -110 8z">
														</path>
														<path
															d="M162 215 c-39 -36 -39 -55 2 -79 14 -9 23 -4 52 27 28 30 33 41 25 56 -18 33 -40 32 -79 -4z">
														</path>
														<path
															d="M770 230 c-23 -23 -18 -40 25 -80 20 -19 30 -22 42 -14 35 22 39 42 13 69 -40 43 -57 48 -80 25z">
														</path>
														<path
															d="M464 107 c-10 -28 1 -90 19 -101 31 -20 52 4 52 60 0 48 -1 49 -33 52 -21 2 -34 -2 -38 -11z">
														</path>
													</g>
												</svg>
											</i>
											<i class="fas fa-moon z-3">
												<svg version="1.0" width="25px" height="25px"
													viewBox="0 0 150.000000 150.000000"
													preserveAspectRatio="xMidYMid meet">
													<g transform="translate(50.000000,120.000000) scale(0.100000,-0.100000)"
														fill="#fff" stroke="none">
														<path
															d="M310 849 c-78 -43 -126 -93 -168 -178 -35 -71 -37 -80 -37 -171 0 -91 2 -100 37 -172 45 -91 103 -147 196 -191 61 -29 76 -32 162 -32 85 0 102 3 160 31 36 17 80 44 99 60 34 28 91 				100 91 114 0 5 -17 4 -37 -1 -95 -22 -210 1 -304 62 -65 41 -134 133 -156 208 -22 74 -21 186 1 246 10 25 16 48 14 50 -2 2 -28 -10 -58 -26z">
														</path>
													</g>
												</svg>
											</i>
											<span class="ball"></span>
										</label>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<div
						class="col-lg-2 col-md-4 col-sm-4 col-4 order-lg-3 order-md-3 order-sm-3 order-3 d-flex justify-content-lg-end justify-content-md-end justify-content-sm-end justify-content-end align-items-center">
						<!-- <div class="toggle-button mb-0 d-flex d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
							<input type="checkbox" class="checkbox" id="checkbox">
							<label for="checkbox" class="checkbox-label">
								<i class="fas fa-sun z-3">
									<svg version="1.0" width="25px" height="25px" viewBox="0 0 150.000000 150.000000"
										preserveAspectRatio="xMidYMid meet">
										<g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)"
											fill="#f39c12" stroke="none">
											<path
												d="M471 986 c-7 -8 -11 -34 -9 -58 3 -42 4 -43 38 -43 34 0 35 1 38 43 2 24 -2 50 -9 58 -15 18 -43 18 -58 0z">
											</path>
											<path
												d="M147 852 c-24 -26 -21 -36 18 -71 37 -32 58 -32 75 0 8 14 4 26 -21 54 -35 40 -49 43 -72 17z">
											</path>
											<path
												d="M781 835 c-32 -37 -32 -58 0 -75 14 -8 26 -4 54 21 40 35 43 49 17 72 -26 24 -36 21 -71 -18z">
											</path>
											<path
												d="M407 776 c-94 -35 -164 -110 -188 -201 -26 -96 13 -231 84 -291 64 -54 106 -69 197 -69 68 0 93 5 126 22 63 34 97 66 129 125 27 47 30 63 30 138 0 75 -3 91 -30 138 -52 95 -130 143 -240 149 -44 2 -84 -2 -108 -11z">
											</path>
											<path
												d="M12 528 c-34 -34 -2 -71 60 -66 42 3 43 4 43 38 0 34 -1 35 -45 38 -26 2 -50 -2 -58 -10z">
											</path>
											<path
												d="M884 526 c-3 -8 -4 -25 -2 -38 3 -20 8 -23 52 -23 56 0 80 21 60 53 -15 23 -102 30 -110 8z">
											</path>
											<path
												d="M162 215 c-39 -36 -39 -55 2 -79 14 -9 23 -4 52 27 28 30 33 41 25 56 -18 33 -40 32 -79 -4z">
											</path>
											<path
												d="M770 230 c-23 -23 -18 -40 25 -80 20 -19 30 -22 42 -14 35 22 39 42 13 69 -40 43 -57 48 -80 25z">
											</path>
											<path
												d="M464 107 c-10 -28 1 -90 19 -101 31 -20 52 4 52 60 0 48 -1 49 -33 52 -21 2 -34 -2 -38 -11z">
											</path>
										</g>
									</svg>
								</i>
								<i class="fas fa-moon z-3">
									<svg version="1.0" width="25px" height="25px" viewBox="0 0 150.000000 150.000000"
										preserveAspectRatio="xMidYMid meet">
										<g transform="translate(50.000000,120.000000) scale(0.100000,-0.100000)"
											fill="#fff" stroke="none">
											<path
												d="M310 849 c-78 -43 -126 -93 -168 -178 -35 -71 -37 -80 -37 -171 0 -91 2 -100 37 -172 45 -91 103 -147 196 -191 61 -29 76 -32 162 -32 85 0 102 3 160 31 36 17 80 44 99 60 34 28 91 				100 91 114 0 5 -17 4 -37 -1 -95 -22 -210 1 -304 62 -65 41 -134 133 -156 208 -22 74 -21 186 1 246 10 25 16 48 14 50 -2 2 -28 -10 -58 -26z">
											</path>
										</g>
									</svg>
								</i>
								<span class="ball"></span>
							</label>
						</div> -->
						<div class="search-icon">
							<button class="btn py-0" type="button" data-bs-toggle="offcanvas"
								data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
								<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-search" fill="none"
									height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
									stroke-width="2" viewBox="0 0 24 24" width="24">
									<circle cx="11" cy="11" r="8"></circle>
									<line x1="21" x2="16.65" y1="21" y2="16.65"></line>
								</svg>
							</button>
							<div class="offcanvas offcanvas-top bg-black" tabindex="-1" id="offcanvasTop"
								aria-labelledby="offcanvasTopLabel" data-bs-theme="dark">
								<div class="offcanvas-header justify-content-end">
									<button type="button" class="btn-close " data-bs-dismiss="offcanvas"
										aria-label="Close"></button>
								</div>
								<div class="offcanvas-body container ">
									<div class="fs-2">Search</div>
									<form role="search" method="get" class="search-form"
										action="<?php echo esc_url(home_url('/')); ?>">
										<label class="w-100">
											<span class="screen-reader-text">
												<?php echo _x('Search for:', 'label', 'your-theme-text-domain'); ?>
											</span>
											<input type="search" class="search-field w-100 p-2 bg-white text-dark"
												placeholder="<?php echo esc_attr_x('Hit enter to search or ESC to close', 'placeholder', 'your-theme-text-domain'); ?>"
												value="<?php echo get_search_query(); ?>" name="s" />
										</label>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>



		<!-- logo: order-md-2 order-lg-1 order-sm-2 order-2 -->
		<!-- search:  order-lg-3 order-md-3 order-sm-3 order-3 -->
		<!-- menu:  order-md-1 order-lg-2 order-sm-1 order-1 -->