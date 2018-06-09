<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgrafo
 */

$image = get_the_post_thumbnail( $post_id, array( 400, 250), array( 'class' => 'alignleft' ) );

?>
<li class="item-post">
	<figure class="imghvr-hinge-up">
		<?php
			if( $image ){
				echo $image;
			}else{
				echo '<img src="'.get_template_directory_uri().'/assets/images/post_padrao.jpg" alt="'.get_the_title().'">';
			}
			 
		?>
    <figcaption>
       <h3 class="ih-fade-down ih-delay-sm "><?php the_title(); ?></h3>
		    <p class="ih-zoom-in ih-delay-md">
		      <i>"Saiba mais"</i>
		    </p>
    </figcaption>
    <a href="<?php echo get_the_permalink(); ?>"></a>
</figure>


</li>