<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<div class="banner-home">
	<?php echo do_shortcode('[rev_slider alias="home"]'); ?>
</div>
<?php
	//BLOCO O ABOUT US 
	echo get_template_part( 'template-parts/content-aboutUS', get_post_format() );

		//BLOCO OPERATIONS
	echo get_template_part( 'template-parts/content-operations', get_post_format() );

	//BLOCO VIDEOS
	//echo get_template_part( 'template-parts/content-videos', get_post_format() );

	//BLOCO O sustainability 
	echo get_template_part( 'template-parts/content-sustainability', get_post_format() );

	//BLOCO O investor 
	echo get_template_part( 'template-parts/content-investor', get_post_format() );

	//BLOCO O contact_us 
	//echo get_template_part( 'template-parts/content-contact_us', get_post_format() );

	

	
?>	



<?php
get_footer();
