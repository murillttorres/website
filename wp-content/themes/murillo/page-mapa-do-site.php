<?php get_header();?>

<section>
	<div class="secao-home">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="mapa-do-site">
				<a href="<?= esc_url(home_url('/')); ?>">Página Inicial</a>
				<a href="<?= esc_url(home_url('/quem-sou-eu')); ?>">Quem sou eu</a>
				<a href="<?= esc_url(home_url('/portfolio')); ?>">Portfólio</a>
				<a href="<?= esc_url(home_url('/login')); ?>">Área do Cliente</a>
				<a href="<?= esc_url(home_url('/orcamento')); ?>">Orçamento</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>