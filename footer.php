			<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

				<div id="inner-footer" class="wrap">

					<?php /* Uncomment this and the 'Footer Links' menu registration in functions.php to use. 
					Or delete it if you're not using it.

					<nav role="navigation">
						wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'platetheme' ),   // nav name
    					'menu_class' => 'nav footer-nav',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'plate_footer_links_fallback'  // fallback function
						)); 
					</nav> 

					*/ ?>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

	

		<?php // all js scripts are loaded in library/functions.php ?>
		<?php wp_footer(); ?>

		<script>
			document.addEventListener('DOMContentLoaded', () => {
				
				// Get all "navbar-burger" elements
				const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

				// Check if there are any navbar burgers
				if ($navbarBurgers.length > 0) {

					// Add a click event on each of them
					$navbarBurgers.forEach( el => {
						el.addEventListener('click', () => {

						// Get the target from the "data-target" attribute
						const target = el.dataset.target;
						const $target = document.getElementById(target);

						// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
						el.classList.toggle('is-active');
						$target.classList.toggle('is-active');
						});
					});
				}
			});
		</script>

	</body>

</html> <!-- This is the end. My only friend. -->
