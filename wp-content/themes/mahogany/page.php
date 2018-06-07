<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgrafo
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main text-content_about">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<?php 
				$images = get_field('galeria');
				if( $images ):
			?>
				<div class="galeria-page">
					<div class="bxslider">
					 <?php 
					 	foreach( $images as $image ):
					 		$imagem = $image;

					 		//var_dump($imagem);
					 ?>
						  <div><img src="<?php echo $image['sizes']['medium_large']; ?>" title="<?php echo $image['caption']; ?>"></div>
					 <?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

		</main><!-- #main -->

		
	</div><!-- #primary -->
</div>	

<?php
get_footer();
