        <footer>
			<nav class="nav-footer">
                <! -- menu footer -->
				<?php
                    $args = array(
                        'menu' => 'principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
                <! -- FIM menu footer -->
			</nav>
            <!--Mostra o ANO que está atuamente - ?php echo date("Y"); ? -->
			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>
    <!-- Footer WordPress -->
    <?php wp_footer(); ?>
    <!-- Fim do Footer WordPress -->
	</body>
</html>