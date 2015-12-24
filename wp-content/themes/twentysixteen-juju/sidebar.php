<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<section class="bio widget">
			<?php if  ( file_exists( TEMPLATEPATH . '/images/laise-picture-1.jpg' ) ) { ?>
				<p><img src="<?php bloginfo('template_url'); ?>/images/laise-picture-1.jpg" alt="Laise Moreira" /></p>
				<?php } else { ?>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<? } ?>
		<p>Eu sou Laise Sousa Moreira, agronôma e mestre em horticultura irrigada pela Universidade do Estado da Bahia. <br /><a href="#">Leia um pouco mais sobre minha história</a></p>
		</section>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
