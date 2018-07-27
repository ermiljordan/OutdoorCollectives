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
      <section class="hero-banner">
				<div class="logo-sub">
					<div class="logo-banner">
						<img class="logo-circle" src="<?php echo get_template_directory_uri(); ?>/images/outdoorCollectiveMiddle.svg" alt="outdoor collective">
					</div>
					<div class="newsletter">
						<p class="sub-caption"><a href="<?php the_permalink(13); ?>">Sign-up</a> for subscription</p>					
					</div><!--NEWS LETTER-->
				</div><!--Logo banner-->
      </section><!--HERO BANNER--> 
	<section class="about-zypher">
		<div class="about-text container">
			<h2>Zephyr Air Frame Tent</h2>
				<?php echo CFS()->get('zypher_air_frame_cap'); ?>
		</div>
	</section>
	<section class="zypher-tents">
		<div class="tents-text container">
		<h2>Our Tents</h2>
				<ul>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/night-camp.JPG">
						</div>
							<div class="content container">
								<h3>Zephyr II</h3>
									<p>The Zephyr aims to resolve the many traditional challenges faced by campers through an all-in-one solution. Based on the most advanced Air Frame system that exists in the world today</p>
							</div>
					</li>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/night-camp.JPG">
						</div>
							<div class="content container">
								<h3>Zephyr IV</h3>
									<p>The Zephyr aims to resolve the many traditional challenges faced by campers through an all-in-one solution. Based on the most advanced Air Frame system that exists in the world today</p>
							</div>	
					</li>
					<li>
						<div class="thumbnail-tents">
							<img class="tent" src="<?php echo get_template_directory_uri(); ?>/images/ocImages/night-camp.JPG">
						</div>	
							<div class="content container">
								<h3>Zephyr VIII</h3>
									<p>The Zephyr aims to resolve the many traditional challenges faced by campers through an all-in-one solution. Based on the most advanced Air Frame system that exists in the world today</p>
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
