<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<title><?php wp_title('|', true, 'right'); ?></title>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="wrapper">

			<div class="sidebar">

				<div class="blog-header">

					<?php if ( get_theme_mod( 'wilson_logo' ) ) : ?>

						<a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'wilson_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>

					<?php else : ?>

						<!-- <h1 class="blog-title">
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h1> -->

						<?php if  ( file_exists( TEMPLATEPATH . '/images/logo.jpg' ) ) { ?>
							<a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo1.png" alt="<?php bloginfo('name'); ?>" /></a>
							<?php } else { ?>
							<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						<? } ?>

						<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>

					<?php endif; ?>

				</div> <!-- /blog-header -->

			<div class="widgets">
				<div class="bioBox widget">
					<?php if  ( file_exists( TEMPLATEPATH . '/images/laise-picture-1.jpg' ) ) { ?>
						<p><img src="<?php bloginfo('template_url'); ?>/images/laise-picture-1.jpg" alt="Laise Moreira" /></p>
						<?php } else { ?>
						<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					<? } ?>
				<p class="bio">Eu sou Laise Sousa Moreira, agronôma e mestre em horticultura irrigada pela Universidade do Estado da Bahia. <br /><a href="#">Leia mais sobre minha história</a></p>
			</div>
		</div>

				<div class="nav-toggle toggle">

					<p>
						<span class="show"><?php _e('Show menu','wilson'); ?></span>
						<span class="hide"><?php _e('Hide menu','wilson'); ?></span>
					</p>

					<div class="bars">

						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>

						<div class="clear"></div>

					</div>

				</div> <!-- /nav-toggle -->

				<div class="blog-menu">

					<ul class="navigation">

						<?php if ( has_nav_menu( 'primary' ) ) {

							wp_nav_menu( array(

								'container' => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'primary',
								'walker' => new wilson_nav_walker

							) ); } else {

							wp_list_pages( array(

								'container' => '',
								'title_li' => ''

							));

						} ?>

					 </ul>

					 <div class="clear"></div>

				</div> <!-- /blog-menu -->

				<div class="mobile-menu">

					 <ul class="navigation">

						<?php if ( has_nav_menu( 'primary' ) ) {

							wp_nav_menu( array(

								'container' => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'primary',
								'walker' => new wilson_nav_walker

							) ); } else {

							wp_list_pages( array(

								'container' => '',
								'title_li' => ''

							));

						} ?>

					 </ul>

				</div> <!-- /mobile-menu -->

				<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

					<div class="widgets" role="complementary">

						<?php dynamic_sidebar( 'sidebar' ); ?>

					</div><!-- /widgets -->

				<?php endif; ?>

			</div> <!-- /sidebar -->
