<footer class="footer">
		<div class="container">
		
		<div class="copyright">
			2015 &copy; sinthesis.eu
		</div>
		</div>
	</footer>
	<!-- open/close -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<?php wp_nav_menu(array(
						'theme_location' => 'footer',
						'fallback_cb' => false,
					)); ?>
			</nav>
		</div>
		<?php wp_footer();?>
	</body>
</html>