<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header();
?>

	<section class="container-fluid slider-area">
		<div class="row">
			<?php echo do_shortcode('[rev_slider alias="slider1"]'); ?>
		</div>
	</section>

	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="row">
				<div class="col-md-6 col-lg-6 p-0 newsletter">
					<h4>NEWS, EVENTS & <br> LATEST COLLECTIONS</h4>
					<p>Be the first to know and connect with us</p>
					<p class="regigter"><a href="">Register</a></p>
				</div>
				<div class="col-md-6 col-lg-6 p-0 ">
					<img src="<?php echo get_template_directory_uri(); ?>/image/photo.jpg">
				</div>
				<div class="col-md-12 p-0 pen welcome" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/pen2.jpg');">
					<h4>Welcome to the world of Parker</h4>
					<a href="#">Discover</a>
				</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 pen newsletter" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/pen.jpg');">
				<h4>NEWS, EVENTS & <br> LATEST COLLECTIONS</h4>
				<p>Match to your personal style and choose from Fountain pen, Parker 5TH TM, Ballpoint pen or Rollerball.</p>
				<p class="regigter"><a href="">Discover more</a></p>
			</div>
		</div>
	</section>


	<section class="container-fluid carosul">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="owl-carousel owl-theme">
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c1.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c2.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c3.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c4.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c5.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c5.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c5.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c5.jpg">
			            </div>
			            <div class="item">
			              <img src="<?php echo get_template_directory_uri(); ?>/image/c5.jpg">
			            </div>
			        </div>

				</div>
			</div>
		</div>
	</section>


<?php

get_footer();
