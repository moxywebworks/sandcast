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

<!--
<section class="hero is-primary is-fullheight">
  
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
          </a>
          <span class="navbar-burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Examples
            </a>
            <a class="navbar-item">
              Documentation
            </a>
            <span class="navbar-item">
              <a class="button is-primary is-inverted">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  
  <div class="hero-body">
    <div class="container has-text-centered">
      <p class="title">
        Title
      </p>
      <p class="subtitle">
        Subtitle
      </p>
    </div>
  </div>

  

  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a>Overview</a>
          </li>
          <li>
            <a>Modifiers</a>
          </li>
          <li>
            <a>Grid</a>
          </li>
          <li>
            <a>Elements</a>
          </li>
          <li>
            <a>Components</a>
          </li>
          <li>
            <a>Layout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>
-->



  <section class="hero is-light is-fullheight">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-centered">
            <div class="column is-5-tablet is-4-desktop is-3-widescreen">
              <form class="box">
                <div class="field has-text-centered">
                  <img src="http://moxy.local:5757/wp-content/uploads/2021/02/moxy-sandcast-wordmark-400x120-1.png" width="167">
                </div>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left">
                    <input class="input is-warning" type="email" placeholder="e.g. alexjohnson@gmail.com" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Password</label>
                  <div class="control has-icons-left">
                    <input class="input" type="password" placeholder="********" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="checkbox">
                    <input type="checkbox" required>
                    Remember me
                  </label>
                </div>
                <div class="field">
                  <button class="button is-success">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
	<div class="container has-text-centered">  
	    <h2 class="title">
	      Primary Hero Now
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
	  
	 <div class="column is-flex is-justify-content-center is-align-items-center is-half-tablet" style="min-height: 300px; background-color: #E56399; ">
	    <h2 class="has-text-white">I'm on GIT HUB</h2>
	 </div>	
</section> 



<div id="demo-bg-static-bg-container" class="demo" style="margin-top: -12px;">
	<section class="cd-section cd-section--bg-fixed">
		<div class="container">
			<div class="">
				<h3 class="has-text-primary-light" data-aos="fade-up">A Winter Scene</h3>
			</div>
		</div>
	</section>
	
	<section class="cd-section">
		<div class="container">
			<div class="" data-aos="fade-up">
				<h3><i class="fas fa-theater-masks"></i> This is scrolling message 1!</h3>
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
	    
	    <i class="fas fa-user"></i> <!-- uses solid style -->
  <i class="far fa-user"></i> <!-- uses regular style -->
  <!--brand icon-->
  <i class="fab fa-github-square"></i> <!-- uses brands style -->
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
				  <div class="py-6 has-background-primary has-text-white has-text-centered">
					  
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
