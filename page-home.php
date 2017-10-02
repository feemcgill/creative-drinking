<?php
/**
 * Template: CD Home
 * @package adp
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php
$attachment_id_intro = get_field('intro_background_photo');
$imgUrl_intro = $attachment_id_intro['sizes']['large'];
//$imgUrl_intro = false;

$attachment_id_clients = get_field('clients_background_photo');
$imgUrl_clients = $attachment_id_clients['sizes']['large'];
//$imgUrl_clients = false;

$attachment_id_events = get_field('events_background_photo');
$imgUrl_events = $attachment_id_events['sizes']['large'];
//$imgUrl_events = false;


?>




<div class="scrawl jam">
	<?php  get_template_part('inc/svg','scrawl'); ?>

</div>

<a href="#" class="badge">
	<div class="burst">
			<?php  get_template_part('inc/svg','burst'); ?>
	</div>
	<div class="info">
		<div class="deets">
		<!--<div class="label">Next Event:</div>-->
			<div class="when"><?php the_field('next_event_date'); ?></div>
			<div class="where"><?php the_field('next_event_location'); ?></div> 
			<!--<<div class="rsvp">RSVP</div>-->
		</div>
	</div>
</a>

<div id="page-wrap">
	<div id="zone-section">


	<?php /*
		<ul class="menu">
			<li><a href="#">About</a></li>
			<li><a href="#">Clients</a></li>
			<li><a href="#">Thirsty?</a></li>
		</ul>
	 */ ?>

	<section id="up-top" class="intro-ani">

		<div class="logo">
			<?php  get_template_part('inc/svg','logo'); ?>
		</div>


			






	</section>

	<section id="one">		
		<div class="intro bigblock" style="background-image:url(<?php echo $imgUrl_intro; ?>);">
			<div class="darkbg-overlay"></div>		
			<div class="lablr"><h2><?php the_field('intro_label'); ?></h2></div>
			<div class="big-content"><?php the_field('intro_content'); ?></div>
		</div>
	</section>


	<section id="two">


	<div class="clients-msg bigblock" style="background-image:url(<?php echo $imgUrl_clients; ?>);">
		<div class="darkbg-overlay"></div>
		<div class="lablr"><h2><?php the_field('clients_label'); ?></h2></div>
		<div class="big-content"><?php the_field('clients_content'); ?></div>


	<div class="logos">


	<?php if(get_field('logos')): ?> 
	<?php while(has_sub_field('logos')): ?>
	<?php 
	$logo_id = get_sub_field('svg');
	$logo_obj = wp_get_attachment_image_src($logo_id['id'], 'full');
	$logo_url = $logo_obj['0'];
	?>
		
		<div class="client-logo inSvg">
			<img class="svg" src="<?php echo $logo_url; ?>">
		</div>	


	<?php endwhile; ?>
	<?php endif; ?>

	</div>

	</div>

	</section>
	<section id="events">
		<div  class="pop-up bigblock" style="background-image:url(<?php echo $imgUrl_events; ?>);">
			<div class="darkbg-overlay"></div>
			<div class="innards">
				<div class="lablr"><h2><?php the_field('events_label'); ?></h2></div>
				<div   class="motto inSvg">
					<?php  get_template_part('inc/svg','motto'); ?>
				</div>
				<div class="form">
					<div class="events-content">
						<?php the_field('events_content'); ?>
					</div>

					<?php 
					echo do_shortcode( '[contact-form-7 id="37" title="CD Contact"]' );
					 ?>
				</div>
			</div>
		</div>
	</section>


	<section id="four">
		<div class="contact">
			<?php the_field('get_in_touch_content'); ?>
			<ul class="socials">
				<?php if (get_field('instagram_url')): ?>
				<li><a href="<?php the_field('instagram_url'); ?>"><?php  get_template_part('inc/socials','instagram'); ?></a></li>
			    <?php endif ?>

				<?php if (get_field('twitter_url')): ?>
				<li><a href="<?php the_field('twitter_url'); ?>"><?php  get_template_part('inc/socials','twitter'); ?></a></li>
				<?php endif ?>	


				<?php if (get_field('facebook_url')): ?>				
				<li><a href="<?php the_field('facebook_url'); ?>"><?php  get_template_part('inc/socials','facebook'); ?></a></li>
				<?php endif ?>
			</ul>
		</div>

	</section>

	</div>
</div>






<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
