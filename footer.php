        <footer>
			<nav class="nav-footer">
				<ul>
				    <li class="current_page_item"><a href="/">Menu</a></li>
					<li><a href="/testewp.local/sobre">Sobre</a></li>
					<li><a href="/testewp.local/contato">Contato</a></li>
				</ul>
			</nav>
            <!--Mostra o ANO que está atuamente - ?php echo date("Y"); ? -->
			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>
    <!-- Footer WordPress -->
    <?php wp_footer(); ?>
    <!-- Fim do Footer WordPress -->
	</body>
</html>