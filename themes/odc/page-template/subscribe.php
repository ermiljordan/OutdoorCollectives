<?php
/**
 * Template name: Subscribe
 *
 * @package outdoorCollective
 */

 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="sub-background">
        <div class="sub-text container">
          <h2 class="italic">First<span class="bold">look</span></h2>
          <h3 class="sub-cap"><?php echo CFS()->get('expert_camper'); ?></h3>
          <p class="sub-par"><?php echo CFS()->get('subscribe_par'); ?></p>
          <?php echo do_shortcode('[mc4wp_form id="38"]'); ?> 
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
