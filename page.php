<?php get_header(); ?>


<div class="section">

    <div class="columns">
		<div class="column">
			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">	
				<div class="container">			
					<?php get_template_part( 'templates/loop'); ?>
				</div>
				
				<div class="divider is-danger"> Hardcode Below</div>

				
				  <!-- <div class="py-6 has-background-primary has-text-white has-text-centered">
					  <h3 class="has-text-white">This is a container.</h3>
				    <p>This container is <strong class="has-text-white">centered</strong> on desktop and larger viewports.</p>
				  </div> -->
							

			</main>

		</div>

	
	 <?php // get_sidebar(); ?>
	 


   

</div>


<?php get_footer(); ?>
