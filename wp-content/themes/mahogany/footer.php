<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgrafo
 */

?>

	</div><!-- #content -->
	<?php //BLOCO O contact_us 
	echo get_template_part( 'template-parts/content-contact_us', get_post_format() ); ?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row footer-meio">
				<div class="col-xs-12 col-md-3">
					<div class="logo_footer">
						<img src="<?php echo get_template_directory_uri().'/assets/images/logo_footer.png' ?>" alt="placeholder+image">
					</div>
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="nav-default nav-cidadao">
						<h3>Menu</h3>
						<nav class="footerMenu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'internas',
									'container' => 'div',
									'menu_class' => 'menu-footer',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</nav>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="nav-default nav-cidadao">
						<h3>Redes Sociais</h3>
						<nav>
							<ul>
								<li><a href="http://facebook.com.br" title="Lorum ipsum dolor sit amet">Facebook</a></li>
								<li><a href="http://facebook.com.br" title="Aliquam tincidunt mauris eu risus">Instagram</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<hr/>
			</div>
		</div>
		<div class="creditos">
			<div class="container">
				<div class="row row-creditos">
					<div class="col-xs-12">
						<div class="site-info">
							<p class="text-center"> 	&copy; Febrabram 2018 - Todos os direitos reservados </p>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php wp_footer(); ?>



</body>
</html>
