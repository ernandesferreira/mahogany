<!-- BLOCO Videos -->

<?php 
	$videos = get_field('videos', 'options');
	if($videos){
?>
<div class="theme-light_medim">
	<div class="container">
		<div class="row" id="midia">
			<div class="col-xs-12">
				<div class="title-verde">
					<h2> Vídeos </h2>
				</div>
			</div>
		</div>
		<div class="row row-50">
			<div class="col-xs-12">
				<div class="video-content">
					<div class="owl-carousel owl-theme video_carousel">
						<?php 
							foreach($videos as $key => $video){

								$video_id = $key;
								$link_video = $video['link_video'];

								echo '<div class="item-video" data-merge="'.$key.'">
												<div class="description_video"> 
													<p><i class="far fa-arrow-alt-circle-left"></i> Estudante Amapaense participa do Jovem Senador em Brasilia</p> 
												</div>
												<a class="owl-video" href="'.$link_video.'"></a>
											</div>';
							}
						?>			    
				</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php } ?>			