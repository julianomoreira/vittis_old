<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<section class="bio widget">		
		<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/laise-picture-1.jpg" alt="Laise Moreira" /></p>
		<p>Eu sou Laise Sousa Moreira, agronôma e mestre em horticultura irrigada pela Universidade do Estado da Bahia. <br /><a href="http://www.vittis.com.br/sobre-laise-moreira/">Leia um pouco mais sobre minha história</a></p>
		</section>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
