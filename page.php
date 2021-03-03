<?php get_header(); ?>


<div class="container">
	<section class="columns">
		<div class="column">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">				

				<?php get_template_part( 'templates/loop'); ?>
				
				<div class="divider is-danger"> Hardcode Below</div>

				<div class="container">
				  <div class="notification py-6 has-background-primary has-text-white has-text-centered">
					  <h3 class="has-text-white">This is a container.</h3>
				    <p>This container is <strong class="has-text-white">centered</strong> on desktop and larger viewports.</p>
				  </div>
				</div>				

			</main>

		</div>
    </section>
</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
