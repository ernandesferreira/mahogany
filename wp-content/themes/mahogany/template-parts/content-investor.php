<!-- BLOCO Investor -->
<?php 
	$itens_investor = get_field('itens_investor', 'options');
	if($itens_investor){
?>
<div class="theme-light">
	<div class="container">
		<div class="row" id="investor">
			<div class="col-xs-12">
				<div class="title-verde">
					<h2> investor relations </h2>
				</div>
			</div>
		</div>
		<div class="row row-50">	

				<div class="text-content_investor">
					<div class="carrousel_investor">
					  <?php 
							foreach($itens_investor as $investor){

								$imagem = $investor['imagem'];

								echo '<div class="col-xs-12 col-md-4"><img src="'.$imagem.'" alt="placeholder+image"></div>';
							}
						?>			    
					</div>
				</div>

		</div>
	</div>
</div>
<?php } ?>			