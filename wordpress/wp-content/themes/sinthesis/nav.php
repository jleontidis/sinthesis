			<nav class="nav nav-pills container">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							id="trigger-overlay">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php wp_nav_menu(array(
						'theme_location' => 'header',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => false,
					)); ?>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
			
