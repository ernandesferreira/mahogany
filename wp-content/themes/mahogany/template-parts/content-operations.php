<!-- BLOCO operations -->
<div class="theme-light_medim">
	<div class="container">
		<div class="row" id="operations">
			<div class="col-xs-12">
				<div class="title-verde">
					<h2> Our Operations </h2>
				</div>
			</div>
		</div>
		<div class="row row-50">	
			<div class="col-xs-12">
				<div class="text-content_about text-center">
				
					<?php
						$conteudo = get_field('conteudo_operacao', 'options');
						$imagem = get_field('imagem_operacoes', 'options');

						echo $conteudo;
					?>

					
				</div>
			</div>
		</div>
		<div class="row row-50">
			<div class="col-xs-12">
				<div class="img-content_about text-center">
					<?php
						if( $imagem ){
							echo '<img src="'.$imagem['sizes']['large'].'" alt="'.$imagem['alt'].'">';
						}else{
							echo '<img src="'.get_template_directory_uri().'/assets/images/operation.png" alt="Operação">';
						}
					?>
					<di class="btn-center">
						<a href="/operacoes"><button class="btn btn-primary default"> veja + </button></a>
					</di>	
				</div>
				
			</div>
		</div>	
	</div>
</div>			