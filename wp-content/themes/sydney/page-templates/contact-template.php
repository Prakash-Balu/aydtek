<?php

/*

Template Name: Contact Template

*/
	get_header();
?>

<div class="col-sm-12 contact-map-wrapper">
	<div style="width: 100%"><iframe width="100%" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.048397938337!2d79.69152111435704!3d11.404031091897497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a54c3b34027523f%3A0x1eebd6847f68fbcc!2sAYD+Technologies!5e0!3m2!1sen!2sin!4v1522498303209" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
<div class="col-sm-12 contact-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form" action="" method="post">
				<fieldset>
					<legend class="text-center">GET IN TOUCH</legend>
		
					<!-- Name input-->
					<div class="form-group form-element">
					<label class="col-md-3 control-label" for="name">Name</label>
					<div class="col-md-9">
						<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
					</div>
					</div>
			
					<!-- Email input-->
					<div class="form-group form-element">
					<label class="col-md-3 control-label" for="email">Your E-mail</label>
					<div class="col-md-9">
						<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
					</div>
					</div>
			
					<!-- Message body -->
					<div class="form-group form-element">
					<label class="col-md-3 control-label" for="message">Your message</label>
					<div class="col-md-9">
						<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
					</div>
					</div>
			
					<!-- Form actions -->
					<div class="form-group">
					<div class="col-md-12 text-right form-btn">
						<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>
					</div>
				</fieldset>
				</form>
			</div>
			<div class="col-md-6">
				<ul class="contact-icons list-unstyled">
					<li><i class="fa fa-map-marker fa-2x"></i>
						<p>15, Vengan Street, Chidambaram 608001, Tamilnadu, INDIA</p>
					</li>

					<li><i class="fa fa-phone fa-2x"></i>
						<p>+91-7010996265</p>
					</li>

					<li><i class="fa fa-envelope fa-2x"></i>
						<p>support@aydtek.cf</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>

