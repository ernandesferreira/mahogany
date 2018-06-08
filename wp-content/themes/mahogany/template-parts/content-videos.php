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
		<div class="row row-100">
			<div class="col-xs-12">
				<div class="video-content">
					<div class="video_carousel">
						<?php
							$count = 0; 
							foreach($videos as $video){							

								$video_id = $key;
								$link_video = $video['link_video'];
								$idVideo = youtubeID($link_video);
								$imageVideo = youtubeImage($link_video);
								$descricao = $video['descricao'];

								//echo '<pre>' . print_r($imageVideo, true) . '</pre>';

								echo '<div class="item-video" data-merge="'.$count.'">
												<div class="description_video"> 
													<p><i class="far fa-arrow-alt-circle-left"></i> '.$descricao.' </p> 
												</div>
												<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$idVideo.'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
											</div>';
							$count++; }
						?>			    
				</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php } ?>			