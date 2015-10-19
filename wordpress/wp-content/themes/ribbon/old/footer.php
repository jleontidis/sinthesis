</div><!--#page-->
</div><!--.container-->
</div>
	<footer>
		<div class="container">
			<div class="footer-widgets">
			<?php widgetized_footer(); ?>
			</div><!--.footer-widgets-->
		</div><!--.container-->
		<!--start copyrights-->
		<div class="row" id="copyright-note">
		<span><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> Copyright &copy; <?php echo date("Y") ?>.</span>
		<div class="top"> <a href="#top" class="toplink"><?php _e('Back to Top','mythemeshop'); ?> &uarr;</a></div>
		</div>
	<!--end copyrights-->
    </footer><!--footer-->
<?php wp_footer(); ?>
</body>
</html>