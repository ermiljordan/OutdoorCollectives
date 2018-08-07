<?php
/**
 * Template for front-page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package outdoorCollective
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="mobile-gone">
				<iframe id="ytplayer" type="text/html" position:relative width="1780" height="760"
								src="https://www.youtube.com/embed/bz3pzdPF4VQ?playlist=&version=3&autoplay=1&controls=0&disablekb=1&fs=0&loop=1&modestbranding=1&rel=0&showinfo=0&start=00&color=white&iv_load_policy=3"
								frameborder="0" allowfullscreen>
				</iframe>
			</section>
      <section class="hero-banner">
				<div class="logo-sub container">
					<div class="logo-banner">
						<h1 class="zephyr-tent-cap">Zephyr Air Frame Tent</h1>
					</div>
					<div class="newsletter">
						<?php echo CFS()->get('hero_banner_caption'); ?>	
					</div><!--NEWS LETTER-->
					<div class="subscribe">
					<h3 class="home-subscribe">Subscribe</h3>
						<?php echo CFS()->get('subscribe_box'); ?>
						<?php echo do_shortcode('[mc4wp_form id="25"]'); ?> 
					</div>
				</div><!--Logo banner-->
			</section><!--HERO BANNER--> 
			<section class="mobile-ok">
				<iframe class="mobile-look" id="ytplayer" type="text/html" position:relative width="760" height="760"
								src="https://www.youtube.com/embed/bz3pzdPF4VQ?playlist=&version=3&controls=0&disablekb=1&fs=0&loop=1&modestbranding=1&rel=0&showinfo=0&start=00&color=white&iv_load_policy=3"
								frameborder="0" allowfullscreen>
				</iframe>
			</section>
		<section class="about-zypher">
		<div class="about-text container">
				<?php echo CFS()->get('zephyr_info'); ?>
		</div>
	</section>
	<section class="zypher-tents">
		<div class="tents-text">
		<h2>Our Tents</h2>
				<ul>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/zephyr2.png">
						</div>
							<div id="padding" class="content container">
								<h3 class="zephyr-title">Zephyr II</h3>
								<?php echo CFS()->get ('zephyr_2');?>
							</div>
					</li>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/zephyr4.png">
						</div>
							<div id="padding" class="content container">
								<h3 class="zephyr-title">Zephyr IV</h3>
								<?php echo CFS()->get ('zephyr_4');?>							
							</div>	
					</li>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/zephyr8.png">
						</div>	
							<div id="padding" class="content container">
								<h3 class="zephyr-title">Zephyr VIII</h3>
								<?php echo CFS()->get ('zephyr_8');?>							
							</div>
					</li>
				</ul>
		</div>
	</section>
	<section class="stary-nights">
		<div class="stary-caption container">
			<?php echo CFS()->get( 'stary_captions' ); ?>
		</div>
	</section>
	<section class="adventure">
			<div class="adventure-photos">
				<div class="container">
					<?php echo CFS()->get ('adventure_caption' ); ?>
					<div class="adventure-cap">
					<?php echo CFS()->get ( 'adventure_content' ); ?>
				</div>
			</div>
			</div>
			<div class="right-caption container">
			<?php echo CFS()->get ( 'adventure_content' ); ?>
			</div>
		</div>
	</section>
	</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
