        <footer class="footer row" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
            <div id="inner-footer" class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
						    <div class="navbar-header">
						      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-footer">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
						      	</button>
						    </div>
							<?php 
								wp_nav_menu( array(
									'menu' => 'Footer Links',
									'theme_location' => 'footer-links',
									'depth' => 1,
									'container' => 'div',
									'container_class' => 'collapse navbar-collapse footer-links cf',
									'container_id' => 'navbar-collapse-footer',
									'menu_class' => 'nav navbar-nav',
									'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
									'walker' => new wp_bootstrap_navwalker()
								));
							?>
						</div>
					</nav>

                <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
            </div>
        </footer>
    </div> <!--/ #MainContainer.container -->

    <?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>

</body>
</html>
