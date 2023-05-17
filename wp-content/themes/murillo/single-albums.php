<?php include 'config.php'; get_header();?>

<?php // PEGA INFORMAÇÕES DO ALBUM SE JA FOI SELECIONADO
$select = $conexao_pdo->prepare("SELECT count(*) as total from selecao where id_album='".get_the_ID()."'");
$select->execute(); $query = $select->fetch(); 

if($query['total'] >= 1) { ?>
<section>
	<div class="user-dashboard user-select">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<h2>Fotos selecionadas para edição</h2>
			<div class="user-select-app-finish">
					<?php $a=0; while(has_sub_field('imagens')): $a++; ?>
						<?php $selecao = $conexao_pdo->prepare("SELECT count(*) as total from selecao where id_album='".get_the_ID()."' and id_foto='".$a."' "); $selecao->execute(); $resultado = $selecao->fetch(); if($resultado['total'] == 1) { ?>
	  						<div class="item"><div class="marca"><img src="<?php echo get_sub_field('foto'); ?>" /></div></div>
	  					<?php } ?>
			        <?php endwhile; ?>
			</div>
			<p class="copyright">As fotos disponíveis nessa página são protegidas pela lei 9.610/98 de direitos autorais. É expressamente proibido salvar e utilizar as imagens, sob as penas da lei. Capturas de tela também não são permitidas. Após a seleção e edição de fotos, você poderá fazer o download de todas as imagens compradas.</p>
		</div>
	</div>
</section>

<?php } else { ?>

<form method="post" action="<?php echo $server; ?>selecao.php">
	<input type="hidden" value="<?= get_the_ID(); ?>" name="album">
	<input type="hidden" value="<?= get_field('cliente'); ?>" name="usuario">

	<div class="user-dashboard-select-number">
		<div class="container">
			<div>
				<strong><span><?php the_field('fotos'); ?></span> Disponíveis no<br> seu pacote</strong>
				<strong><span class="contador">0</span> Selecionado para<br> edição profissional </strong>
			</div>
			<input type="submit" value="Concluir seleção" class="btn btn-secundary">
		</div>
	</div>

	<section>
		<div class="user-dashboard user-select">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<div class="user-dashboard-legenda" style="margin-top: 0px;">
					<div>
						<h2><?php the_field('fotos'); ?> fotos no pacote</h2>
						<p>Seu pacote contratado disponibiliza que você selecione <?php the_field('fotos'); ?> fotos sem custo adicional.</p>
					</div>
					<div>
						<h2>Fotos adicionais</h2>
						<p>Você pode selecionar mais fotos do que o seu contrato permite, custando <strong>R$ <?php the_field('valor'); ?> por foto adicional</strong>.</p>
					</div>
				</div>

				<div class="user-select-app">
					<ul>
						<?php $a=0; while(has_sub_field('imagens')): $a++; ?>
							<li>
		  						<input class="checkbox" type="checkbox" name="fotos_selecionadas[]" value="<?php echo $a; ?>" id="foto<?php echo $a; ?>" />
		    					<label for="foto<?php echo $a; ?>"><div class="marca"><img src="<?php echo get_sub_field('foto'); ?>" /></div></label>
		  					</li>
				        <?php endwhile; ?>
					</ul>
				</div>

				<p class="copyright">As fotos disponíveis nessa página são protegidas pela lei 9.610/98 de direitos autorais. É expressamente proibido salvar e utilizar as imagens, sob as penas da lei. Capturas de tela também não são permitidas. Após a seleção e edição de fotos, você poderá fazer o download de todas as imagens compradas.</p>
				<input type="submit" value="Concluir seleção" class="btn btn-secundary btn-center">

			</div>
		</div>
	</section>
</form>
<?php } ?>

<?php get_footer();?>

<script>
document.addEventListener('contextmenu', event => event.preventDefault());
$(".checkbox").click(function() {
	var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
	$(".contador").html(checkboxes.length);
});


</script>