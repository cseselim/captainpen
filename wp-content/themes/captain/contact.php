<?php 
	/*Template Name: Contact */
	get_header();
 ?>

 	<section class="container contact-area">
 		<div class="row">
 			<div class=" col-sm-12 col-md-12 col-lg-12 text-center contact">
 				<h3>- CONTACT US -</h3>
 				<p>If you need to get in touch with us, you can drop by our office during the working hours.</p>
 			</div>
 		</div>
 	</section>

 	<section class="container-fluid map">
 		<div class="row">
 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.739160957368!2d90.38506991445598!3d23.75667924445443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a426199b0d%3A0x6a2c655d06c88ec9!2sFarmgate%2C+Dhaka+1205%2C+Bangladesh!5e0!3m2!1sen!2sus!4v1554702834098!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
 		</div>
 	</section>

 	<section class="container-fluid address-area">
	 	<div class="container">
	 		<div class="row">
	 			<div class=" col-sm-12 col-md-12 col-lg-12 text-center corporate">
	 				<h4>CORPORATE ADDRESS</h4>
	 				<p>C-1/702, G-1/701, G-2/702, 7th Floor, Lotus Corporate Park, W.E.Highway, Goregaon (East), Mumbai – 400 063, (INDIA)</p>
	 			</div>
	 		</div>
	 		<div class="row">
				<div class="col-sm-6 col-md-3 col-lg-3 text-center address">
					<h3>PHONE</h3>
					<p>+91 22 61083100</p>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 text-center address">
					<h3>FAX</h3>
					<p>+91 22 61083199</p>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 text-center address">
					<h3>E-MAIL</h3>
					<p>marketing@cellopens.com<br>Indiaexportsales@cellopens.com</p>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 text-center address">
					<h3>HOURS</h3>
					<p>9.30am - 6.00pm</p>
				</div>
	 		</div>
	 	</div>
	</section>

	<section class="container">
		<div class="row">
			<div class=" col-sm-12 col-md-12 col-lg-12 text-center corporate">
 				<h4>CONTACT FORM</h4>
	 		</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 contact-p">
				<?php echo do_shortcode('[contact-form-7 id="38" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>

 <?php get_footer(); ?>