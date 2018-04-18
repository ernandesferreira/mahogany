<!-- BLOCO sustainability -->

<?php 
	$itens_sustentabilidade = get_field('itens_sustentabilidade', 'options');
	if( $itens_sustentabilidade ){	
?>
<div class="theme-verde">
	<div class="container">
		<div class="row" id="sustainability">
			<div class="col-xs-12">
				<div class="title-branco">
					<h2> sustainability </h2>
				</div>
			</div>
		</div>
		<div class="owl-carousel owl-theme sustentabilidade_slider">
	<?php 
		foreach($itens_sustentabilidade as $item){
			$imagem = $item['imagem'];
			$conteudo =  $item['conteudo'];
		?>
			<div class="row row-contentAbout row-50 item">
				<div class="col-xs-12 col-md-6">
					<div class="img-content_about">
						<img src="<?php echo $imagem; ?>">
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="text-content_branco">
						<?php echo $conteudo; ?>
						<button class="btn btn-primary default btn-transparent"><a href="#"> Leia mais </a></button>
					</div>
				</div>
			</div>	
		<?php } ?>
		</div>
	</div>
</div>			
<?php } ?>