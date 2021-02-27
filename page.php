<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
				
				
				    <h1 class="title">
				        Bulma
				      </h1>
				
				      <p class="subtitle">
				        Modern CSS framework based on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">Flexbox</a>
				      </p>
				
				      <div class="field">
				        <div class="control">
				          <input class="input" type="text" placeholder="Input">
				        </div>
				      </div>
				
				      <div class="field">
				        <p class="control">
				          <span class="select">
				            <select>
				              <option>Select dropdown</option>
				            </select>
				          </span>
				        </p>
				      </div>
				
				      <div class="buttons">
				        <a class="button is-primary">Primary</a>
				        <a class="button is-link">Link</a>
				      </div>
				
				
				
				

				<?php // Edit the loop in /templates/loop. Or roll your own. ?>
				<?php get_template_part( 'templates/loop'); ?>

			</main>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
