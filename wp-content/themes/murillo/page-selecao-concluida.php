<?php get_header();?>

<section>
	<div class="user-dashboard user-select-finish">
		<div class="container">
			<h1>Seleção concluída!</h1>
			<p>Agora suas fotos selecionadas serão editadas e em breve você receberá o material finalizado.<br><br>Obrigado por me escolher para fotografar esses momentos incríveis!</p>

			<h2>Produtos para você</h2>
			<div class="shop-list">
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
				<a href="#">
					<img src="https://www.fotoregistro.com.br/subhomes/_lojas_consumer/paginas/novas-vitrines/categorias/src/img/decoracao/quadro-pop.png">
					<h3>Quadro Popmusic</h3>
					<span>R$ 29,99</span>
				</a>
			</div>
			<a href="#" class="btn">Acessar loja completa</a>
		</div>
	</div>
</section>

<?php get_footer();?>

<script>
document.addEventListener('contextmenu', event => event.preventDefault());
$(".checkbox").click(function() {
	var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
	$(".contador").html(checkboxes.length);
});


</script>