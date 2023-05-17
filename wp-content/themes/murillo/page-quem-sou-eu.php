<?php get_header();?>

<section>
	<div class="secao-home">
		<div class="container">
			<h1>Quem sou eu</h1>
			<div class="quem-sou-eu-grid">
				<div class="quem-sou-eu-img">
					<img src="<?= get_template_directory_uri() ?>/img/fotografo-murillo-torres-piracicaba-sp.webp">
				</div>
				<div class="quem-sou-eu-txt">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>