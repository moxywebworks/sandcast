<?php get_header(); ?>


<section class="hero is-primary">
  <div class="hero-body" id="hero-home">
	<div class="">  
	    <h2 class="title">
	      Primary Hero
	    </p>
	    <h3 class="subtitle">
	      Primary subtitle
	    </p>
	</div>
  </div>
</section>

<section class="columns ">
	<div class="column is-flex is-justify-content-center is-align-items-center is-half-tablet" style="min-height: 300px; background-color: pink; ">
	    <h2 class="">Big News Here</h2>
	 </div>
	  
	 <div class="column is-flex is-justify-content-center is-align-items-center is-half-tablet" style="min-height: 300px; background-color: aqua; ">
	    <h2>Some Other Big News</h2>
	 </div>	
</section> 







<div>
	<section class="cd-section cd-section--bg-fixed">
		<div class="container">
			<div class="">
				<h3 class="has-text-primary-light" data-aos="fade-up">A Winter's Tale</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section">
		<div class="container">
			<div class="" data-aos="fade-up">
				<h3>This is scrolling message 1!</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section cd-section--bg-fixed">
		<div class="container">
			<div class="" data-aos="fade-up">
				<h3 class="has-text-primary-light">This is scrolling message 2!</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section">
		<div class="container">
			<div class="" data-aos="fade-up">
				<h3>This is scrolling message 3!</h3>
			</div>
		</div>
	</section>
</div>










<section class="container" >
	<div class="columns" style=" margin-top: 0; ">
	  <div class="column" style="background-color: pink;">
	    First column
	  </div>
	  <div class="column" style="background-color: yellow;">
	    Second column
	  </div>
	  <div class="column" style="background-color: grey;">
	    Third column
	  </div>
<!--
	  <div class="column" style="background-color: cornsilk;display: flex;justify-content: center;">
	    Fourth column
	  </div>
-->
	</div>	
</section>


<div class="container">

    <section class="columns">
	
	<div class="column is-three-quarters">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">				

				<?php get_template_part( 'templates/loop'); ?>
				
				<div class="divider is-danger"> Hardcode Below</div>

				<div class="container">
				  <div class="notification has-background-primary has-text-white has-text-centered" style="background-color: pink;">
					  
					  <h3 class="has-text-white">This is a container.</h3>
					  
				    <p>This container is <strong class="has-text-white">centered</strong> on desktop and larger viewports.</p>
				  </div>
				</div>				

			</main>

		</div>

	
	 <?php get_sidebar(); ?>
	 


    </section>
</div>

   

<?php get_footer(); ?>
