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
          <?php echo CFS()->get('expert_camper'); ?>
          <?php echo CFS()->get('subscribe_par'); ?>
          <?php echo do_shortcode('[mc4wp_form id="25"]'); ?> 
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
