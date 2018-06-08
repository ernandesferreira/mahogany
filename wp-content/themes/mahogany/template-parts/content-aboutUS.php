<!-- BLOCO ABOUT US -->
<div class="theme-light">
	<div class="container">
		<div class="row" id="about_us">
			<div class="col-xs-12">
				<div class="title-verde">
					<h2> SOBRE NÓS </h2>
				</div>
			</div>
		</div>
		<div class="row row-contentAbout row-50">
			<div class="col-xs-12 col-md-4">
				<div class="img-content_about">
					<?php
						$imagem = get_field('imagem_sobreNos', 'options');

						if( $imagem ){
							echo '<img src="'.$imagem['sizes']['large'].'" alt="'.$imagem['alt'].'">';
						}else{
							echo '<img src="'.get_template_directory_uri().'/assets/images/about_us.png" alt="About-us">';
						}
					?>
					
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="text-content_about">

				<?php
					echo get_field("conteudo_quemSomos", "options");
				?>

				<?php
					$link = get_field("link_pagina_sobrenos", "options");
				?>					
					<a href="<?php echo $link; ?>"><button class="btn btn-primary default"> veja + </button></a>
				</div>
			</div>
		</div>	
	</div>
</div>			