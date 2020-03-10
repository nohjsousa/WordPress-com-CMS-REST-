#Para poder Visualizar a página será necessário instalar o servidor local e usar um Framework.
# WordPress-com-CMS "Rest" 

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

Utilizando o Advanced Custom fields no wordPress
	instalar o plugin 
	acessar os campos personalizados e adicionar as partes que iram ser usadas via CMS
	Adicionar no paragrafos e textos <?php the_field('titulo_historia') ?> e depois retira-los deixando-os somente no wordpress

#Repeater Field
<?php IF(have_rows(‘nomedorepeater’)): while(have-rows(‘nomedorepeater’)) : the_row; ?>
The_sub_field(‘nomedocampo’);
<?php endwhile; else : endif ?>

#Pegar Valores de Outras Páginas
<?php
<!--Declaração de vareável -->
<?php $contato = get_page_by_title('contato'); ?> 
<!-- Fim de Declaração de vareável -->

<?php the_field('endereco_header', $contato); ?>
<?php the_field('telefone_header', $contato); ?>

#Terminar de adicionar os outros campos o CMS “contato”
<?php echo date("Y"); ?> (Mostrar o ano que está atualmente nos direitos reservados “footer” )

#Adicionar campos para SEO
<title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">

#Adicionar o Functions.php

// Habilitar Menus
add_theme_support('menus');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'wp_generator' );

#Adicionar o Menu
// Habilitar Menus
add_theme_support('menus');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//para adicionar o menu no head
<?php
	$args = array(
		'menu' => 'principal',
		'container' => false
	);
	wp_nav_menu( $args );
?>

