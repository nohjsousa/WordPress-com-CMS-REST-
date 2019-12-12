# WordPress-com-CMS NO 

#Como instalar um templete no WordPress:
	Pastas:
		App;
		Public;
		Wp-content;
		Themes;
			Incluir a pastar com os arquivos do tema;
				Tirar da pasta CSS o arquivo style.css;
				Incluir informações no .css
          /*
          Theme Name: Rest
          Theme URI: http://rest.com
          Author: André Rafael
          Author URI: http://rest.com/
          Description: Tema criado para o restaurante Rest
          Version: 1.0
          */
				Colocar na pasta raiz dos arquivos .html
				Editar arquivo índex.html para .php

#Como incluir foto no painel do tema para aparecer no wordPress
	Incluir arquivo screenshot.png com o tamanho 880x660 na pasta raiz do arquivo.

#Como corrigir o .CSS no href=”css/style.css” apagar o css 
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

#Como Link o HEADER.php e FOOTER.php no INDEX.php
	<?php get-header(); ?> e <?php get-footer(); ?>

#Adicionar o HEAD do wordPress no head.php e no footer.php
	<?php wp_head(); ?>
	<?php wp_footer();?>

#Transformar as páginas em HTML, em templates de páginas
A página índex.php deve estar reservada para conteúdo genérico.
Adicionar o nome Page- na frente de cada template de página para facilitar a organização.
Adicionar no começo dos conteúdos dentro dos arquivos;
<?php //Tamplete Name:Sobre ?>

#Abrir o WordPress e editar as páginas criadas para;
	Modelo: "Nome da própria página"
	
#Adicionar o Loop
	Adicionar o Loop nas páginas e ao index.php
	<?php if (have_posts() ) : while ( have_posts() ) : the_post() ;  ?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php esc_html_e(‘Sorry, no posts matched your criteria. ’); ?></p>
	<?php endif; ?>



