<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgrafo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	

	<!-- CSS Font Awesome v4.6.3 -->
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

	<!-- CSS FANCYBOX -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dgrafo' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">

			<div class="topo_menu_mobile hidden-lg hidden-md visible-sm">
				<div class="logo_mobile">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="btn-sistema">
									<a href="#" style="padding: 10px 10em;"> Área Restrita </a>
								</div>
							</div>
							<div class="col-xs-12">
								<?php									
									if ( is_front_page() || is_home() ) : ?>
										<h1 class="site-title">											
												<?php the_custom_logo(); ?>
										</h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
											<?php the_custom_logo(); ?></a>
										</p>
									<?php
									endif;
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
									endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php
					if ( is_front_page() || is_home() ){
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'menu',
						) );
					}else{
						wp_nav_menu( array(
							'theme_location' => 'interna',
							'menu_id'        => 'internas',
						) );
					}				
			?>
		</div>	

				

		<div class="topo-geral hidden-xs hidden-sm affix-top" id="topfixed">
			<!-- MENU LOGO -->
			<div class="menu-logo">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="logo-header">
								<?php									
									if ( is_front_page() || is_home() ) : ?>
										<h1 class="site-title">											
												<?php the_custom_logo(); ?>
										</h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
											<?php the_custom_logo(); ?></a>
										</p>
									<?php
									endif;
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
									endif; ?>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							
						</div>
						<div class="col-xs-12 col-md-2">
							<div class="btn-sistema">
								<a href="#"> Área Restrita </a>
							</div>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- #box_menu -->
			<div class="menu-itens">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-4">
							<nav id="cl-effect-3" class="main-navigation cl-effect-3">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dgrafo' ); ?></button>
								<?php
								if ( is_front_page() || is_home() ){
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								}else{
									wp_nav_menu( array(
										'theme_location' => 'internas',
										'container' => 'div',
										'menu_class' => 'menu-menu-1-container',
										'menu_id'        => 'primary-menu',
									) );
								}	
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</div>	<!-- .topo-geral -->		
		</div><!-- .site-branding -->		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
