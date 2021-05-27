<?php
/*
 Template Name: Page Demo :: Sidebar
 * 
 * This is a starter page template for 
 * when you need a sidebar in the main.
 * 
*/
?>

<?php get_header(); ?> 

<!-- Start Hero Carousel -->
<section class="hero is-medium has-carousel">
	<div id="carousel" class="hero-carousel">
		<div class="item-1 slide is-flex is-justify-content-center is-align-items-center">
			<h1 class="is-primary">We've been patiently waiting...</h1>
		</div>
		<div class="item-2 slide is-flex is-justify-content-center is-align-items-center">
			<h1 class="has-text-white">making plans...</h1>
		</div>
		<div class="item-3 slide is-flex is-justify-content-center is-align-items-center">
			<h1 class="has-text-white">to return to our stage!</h1>
			<h1>Hello, World</h1>
		</div>
	</div>
	<div class="hero-head"></div>
	<div class="hero-body"></div>
	<div class="hero-foot"></div>
</section>
<!-- End Hero Carousel -->
    
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
	<div class="container has-text-centered">  
	    <h2 class="title has-text-primary-light" style=" border: 3px solid green;">
	      Primary Hero Full Height
	    </p>
	    <h3 class="subtitle">
	      Primary subtitle
	    </p>
	</div>
  </div>
</section>

<section id="two-cols">
	<div class="columns is-marginless">
		<div class="column is-flex is-justify-content-center is-align-items-center is-half-tablet" style="min-height: 300px; background-color: pink; ">
		    <h2 class="" data-aos="fade-right"><i class="fas fa-dog"></i> Big News Here</h2>
		 </div>
		  
		 <div class="column is-flex is-justify-content-center is-align-items-center is-half-tablet" style="min-height: 300px; background-color: #E56399; ">
		    <h2 class="has-text-white" data-aos="fade-left">I'm on GIT HUB</h2>
		 </div>	
	</div> 
</section>


<div id="demo-bg-static-bg-container" class="demo">
	<section class="cd-section cd-section--bg-fixed">
		<div class="container has-text-centered">
			<div class="column">
				<h3 class="has-text-primary-light" data-aos="fade-up">A Winter Scene</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section">
		<div class="container has-text-centered">
			<div class="column">
				<div class="" data-aos="fade-up">
					<h3><i class="fas fa-theater-masks"></i> This is scrolling message 1!</h3>
				</div>
			</div>
		</div>
	</section>
	
	<section class="cd-section cd-section--bg-fixed">
		<div class="container has-text-centered">
			<div class="column" data-aos="fade-up">
				<h3 class="has-text-primary-light">This is scrolling message 2!</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section">
		<div class="container has-text-centered">
			<div class="column" data-aos="fade-up">
				<h3>This is scrolling message 3!</h3>
			</div>
		</div>
	</section>
</div>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolor doloribus esse ex expedita minus officiis voluptas. At consequuntur debitis dignissimos eum sed voluptas. Amet assumenda cupiditate earum molestias placeat.
            </div>
        </div>
    </div>
</section>



<section class="section">
	<div class="container">
		<div class="columns is-marginless is-centered">
			<div class="column has-hover-background-light">
				First column
			</div>
			<div class="column has-hover-background-light">
				Second column
			</div>
			<div class="column has-hover-background-light">
				Third column
			</div>
		</div>	
	</div>
</section>



<section class = "section">
         <div class = "container">
            <span class = "title">
               Column Layout
            </span><br><br>
            <div class = "columns">
               <div class = "column">
                  <p class = "has-text-black has-background-info">First column</p>
               </div>
               
               <div class = "column">
                  <p class = "has-text-black has-background-info">Second column</p>
               </div>
               
               <div class = "column">
                  <p class = "has-text-black has-background-info">Third column</p>
               </div>
               
               <div class = "column">
                  <p class = "has-text-black has-background-info">Fourth column</p>
               </div>
               
            </div>
         </div>
      </section>


<!-- This snippet is very temporarily borrowed from the Maestro, Mr. Andy Clark, so I can finally begin to learn SVG! -->

<svg viewBox="0 0 740 640" x="0" y="0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="condensed">
<title>Our designs deliver</title>
<g fill="pink" fill-rule="evenodd">
<text class="text-brand" stroke-linecap="round" fill-rule="evenodd" font-size="240" font-weight="500">
<tspan x="10" y="215">OUR</tspan>
<tspan x="10" y="395">DESIGNS</tspan>
<tspan x="10" y="575">DELIVER</tspan>
</text>
<text class="text-fill" font-size="48" font-weight="500" letter-spacing="1">
<tspan x="10" y="635">WE KNOW OUR STUFF AND WE&#8217;RE FUN TO WORK WITH. WE&#8217;RE STUFF &amp; NONSENSE</tspan>
</text>
</g>
</svg>




<div class="section">

    <div class="columns p-b-lg">
		<div class="column is-offset-2 is-8">
			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">	
				<div class="container is-clearfix">			
					<?php get_template_part("templates/loop"); ?>
				
				
					<div class="divider is-danger is-clearfix"> Hardcode Below</div>

				
					<div class="py-6 has-background-primary has-text-white has-text-centered">
						<h3 class="has-text-white">This is a container.</h3>
					<p>This container is <strong class="has-text-white">centered</strong> on desktop and larger viewports.</p>
					</div>

				</div>
							

			</main>

		</div>

	
	 <?php
// get_sidebar();
?>
	 


   

</div>

   

<?php get_footer();
?>
