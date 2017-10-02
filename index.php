<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package adp
 */

get_header(); ?>
<?php /*
 <script type="text/paperscript" canvas="canvas">

var cPathData = 'M61.919,94.937c-0.625,0-1.257-0.188-1.804-0.581l-32.283-23.15c-0.803-0.575-1.283-1.5-1.294-2.487c-0.01-0.988,0.451-1.923,1.242-2.515l40.05-29.984c1.371-1.026,3.314-0.747,4.341,0.625c1.026,1.37,0.747,3.314-0.624,4.341L34.886,68.632L63.73,89.315c1.392,0.998,1.711,2.935,0.713,4.327C63.837,94.486,62.885,94.937,61.919,94.937z';
var cPath = new Path(cPathData);
cPath.fillColor = 'red';


var dPathData = 'M93.589,117.381c-0.481,0-0.966-0.111-1.41-0.339c-1.038-0.53-1.69-1.597-1.69-2.762V23.091c0-1.178,0.666-2.254,1.721-2.777c1.054-0.523,2.314-0.406,3.253,0.306l61.571,46.643c0.783,0.594,1.238,1.523,1.229,2.506c-0.012,0.983-0.487,1.903-1.283,2.479l-61.572,44.547C94.869,117.183,94.23,117.381,93.589,117.381z M96.691,29.33v78.879l53.259-38.532L96.691,29.33z';
var dPath = new Path(dPathData);
dPath.fillColor = 'green';


var drinkPathData = 'M176.971,66.367L97.939,1.536C96.731,0.546,95.151,0,93.491,0c-1.576,0-3.09,0.498-4.265,1.403L4.864,66.383c-1.428,1.1-2.231,2.694-2.205,4.375S3.539,74.007,5,75.062l65.394,47.148c0.071,3.996,0.177,8.006,0.358,11.992c0.19,4.187,1.893,7.357,5.059,9.424c3.896,2.543,8.155,3.108,11.02,3.312c2.284,0.163,4.983,0.329,7.68,0.329c5.147,0,9.374-0.598,13.302-1.881c1.989-0.65,8.043-2.628,8.42-9.44c0.015-0.258,0.031-0.516,0.048-0.772c0.051-0.802,0.104-1.631,0.1-2.5c-0.014-2.767-0.032-5.532-0.051-8.299c-0.005-0.778-0.01-1.57-0.015-2.353l60.537-46.939c1.393-1.08,2.204-2.657,2.228-4.328C179.101,69.084,178.333,67.485,176.971,66.367z M93.01,6.317c0.06-0.047,0.237-0.115,0.48-0.115c0.262,0,0.451,0.078,0.515,0.13l5.499,4.511c0.052,1.22,0.11,2.433,0.178,3.623c0.312,5.519,0.66,11.123,0.997,16.543c0.236,3.812,0.474,7.622,0.699,11.434c0.248,4.174,1.797,7.993,4.604,11.354c2.321,2.779,3.609,5.959,3.826,9.448c0.027,0.435,0.045,0.872,0.069,1.307c-1.158-0.217-1.881-0.807-2.918-1.668c-1.624-1.349-3.849-3.196-7.955-3.196s-6.33,1.848-7.954,3.196c-1.325,1.101-2.125,1.766-3.991,1.766s-2.666-0.665-3.99-1.766c-1.301-1.08-3.004-2.464-5.733-2.979c0.87-2.776,2.301-5.35,4.356-7.753c1.876-2.195,2.955-4.838,3.118-7.644c0.654-11.211,1.485-22.603,2.292-33.639L93.01,6.317z M9.488,70.649l71.027-54.708c-0.677,9.316-1.348,18.81-1.896,28.204c-0.085,1.463-0.638,2.801-1.641,3.974c-4.69,5.485-6.929,11.638-6.844,18.81c0.091,7.616,0.071,15.373,0.052,22.875c-0.008,3.215-0.016,6.431-0.016,9.646v0.035c0.033,2.971,0.054,5.942,0.074,8.913c0.014,2.015,0.028,4.048,0.046,6.09L9.488,70.649z M110.177,132.706c0.003,0.654-0.041,1.343-0.088,2.072c-0.018,0.274-0.034,0.549-0.05,0.824c-0.075,1.358-0.449,2.678-4.153,3.888c-3.287,1.074-6.902,1.575-11.376,1.575c-2.503,0-5.064-0.158-7.239-0.313c-3.506-0.25-5.995-0.965-8.07-2.319c-1.499-0.979-2.151-2.285-2.253-4.512c-0.108-2.378-0.186-4.771-0.25-7.166l0.016,0.011l-0.103-7.722l-0.063-0.046c-0.048-3.573-0.078-7.135-0.101-10.642c-0.021-2.976-0.041-5.949-0.074-8.924c0-3.204,0.008-6.409,0.016-9.613c0.02-7.523,0.039-15.303-0.052-22.965c-0.003-0.285,0.019-0.558,0.024-0.838c1.062,0.241,1.757,0.818,2.744,1.637c1.624,1.35,3.848,3.197,7.954,3.197s6.33-1.848,7.954-3.196c1.325-1.102,2.125-1.766,3.991-1.766c1.867,0,2.666,0.664,3.991,1.766c1.51,1.254,3.561,2.92,7.139,3.15c0.186,6.865,0.102,13.773,0.017,20.514l-0.037,3.01c-0.096,8.214-0.068,16.52-0.021,24.67l-0.009,0.007c-0.002,2.371-0.005,5.279-0.005,7.852l0.062-0.048C110.154,128.774,110.167,130.74,110.177,132.706z M116.273,114.206c-0.029-6.584-0.034-13.23,0.043-19.805l0.037-3.005c0.117-9.338,0.238-18.993-0.354-28.537c-0.301-4.837-2.069-9.224-5.256-13.039c-1.965-2.353-3.003-4.887-3.173-7.746c-0.227-3.816-0.464-7.634-0.7-11.45c-0.295-4.742-0.598-9.622-0.877-14.458l66.436,54.499L116.273,114.206z';
var drinkPath = new Path(drinkPathData);
drinkPath.fillColor = 'yellow';

</script>
 */ ?>



<div class="scrawl jam">
	<?php  get_template_part('inc/svg','scrawl'); ?>
</div>

<div id="zone-section">

	<a href="#" class="badge">
		<div class="burst">
				<?php  get_template_part('inc/svg','burst'); ?>
		</div>
		<div class="info">
			<div class="deets">
			<!--<div class="label">Next Event:</div>-->
				<div class="when">8/8/15</div>
				<div class="where">XIX Studios</div> 
				<!--<<div class="rsvp">RSVP</div>-->
			</div>
		</div>
	</a>

	<ul class="menu">
		<li><a href="#">About</a></li>
		<li><a href="#">Clients</a></li>
		<li><a href="#">Thirsty?</a></li>
	</ul>

<section id="up-top" class="intro-ani">

	<div class="logo">
		<?php  get_template_part('inc/svg','logo'); ?>
	</div>

</section>

<section id="one">		
	<div class="intro bigblock">
		<div class="lablr"><h2>Hello</h2></div>
		<h1>Creative Drinking</h1> <p> Is a Los Angeles based creative studio. We also do events including a not-boring, semi-regular networking meetup. <a>Fuck with us.</a></p>
	</div>
</section>


<section id="two">


<div class="clients-msg bigblock">
	<div class="lablr"><h2>About</h2></div>
	<p>We are a new shop, but we have a lot of fucking experience. Here's a few of our past and present clients:</p>


<div class="logos">


	
	<div class="client-logo inSvg">
		<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/logos/skullcandy.svg">
	</div>	

	
	<div class="client-logo inSvg">
		<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/logos/converse.svg">
	</div>	



	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','coachella'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','olesmoky'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','coachella'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','olesmoky'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','olesmoky'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','coachella'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','coachella'); ?>
	</div>
	<div class="client-logo inSvg">
		<?php  get_template_part('inc/clientlogo','olesmoky'); ?>
	</div>




</div>

</div>

</section>
<section id="three">
	<div class="pop-up bigblock">
		<div class="darkbg-overlay"></div>
		<div class="innards">
			<div class="lablr"><h2>Events</h2></div>
			<div class="motto inSvg">
				<?php  get_template_part('inc/svg','motto'); ?>
			</div>
			<div class="form">
				<h3>I like fun. I want to attend a pop up event.</h3>
				<form id="cd-form" action="#">
					<input class="cd-input" type="text" placeholder="Name" name="name" value="">
					<input class="cd-input" type="email" placeholder="Email" name="email" value="">
					<input class="cd-input" type="text" placeholder="Affiliation" name="affiliation" value="">
					<input class="cd-submit" type="submit" value="Cheers!">
				</form>
			</div>
		</div>
	</div>
</section>


<section id="four">
	<div class="contact">
		<h4>Please Get in touch!</h4>
		<a href="mailto:" class="mail">kimmy@creativedrinkingla.com</a>
		<ul class="socials">
			<li><a href="#"><?php  get_template_part('inc/socials','instagram'); ?></a></li>
			<li><a href="#"><?php  get_template_part('inc/socials','twitter'); ?></a></li>
			<li><a href="#"><?php  get_template_part('inc/socials','facebook'); ?></a></li>
		</ul>
	</div>

</section>

</div>
<?php get_footer(); ?>


	<?php  //get_template_part('inc/home','content'); ?>
