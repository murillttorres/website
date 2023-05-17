<?php get_header();?>

<section>
	<div class="empreendimentos-interno-banner">
		<div class="container">
			<div class="imagens">
				<img class="primaria" src="<?php echo get_field('banner_imagem_principal'); ?>" alt="<?php the_title(); ?>">
				<img class="secundaria" src="<?php echo get_field('banner_1'); ?>" alt="<?php the_title(); ?>">
				<img class="secundaria" src="<?php echo get_field('banner_2'); ?>" alt="<?php the_title(); ?>">
			</div>

			<!-- <img src="<?php the_post_thumbnail_url('banner-principal'); ?>" alt="<?php the_title(); ?>"> -->
			<div class="txt">
				<img class="logotipo" src="<?php echo get_field('logotipo'); ?>" alt="<?php the_title(); ?>">
				<span><?php $disponibilidade = get_field('disponibilidade'); if($disponibilidade == 'avenda') {echo 'À Venda';} else {echo 'Lançamento';} ?></span>
				<h1><?php the_title(); ?></h1>
				<div class="empreendimentos-vantagens">
					<?php while(has_sub_field('icones_em_destaque')): ?>
						<div class="item">
							<div><img src="<?php echo get_sub_field('icone'); ?>" alt="<?php echo get_sub_field('texto'); ?>"></div>
							<?php echo get_sub_field('texto'); ?>
						</div>
			        <?php endwhile; ?>
				</div>

				<h2>venda de lotes comerciais e residenciais</h2>
				<span class="cidade"><?php $terms = get_the_terms($post->ID, 'cidades'); if(!empty($terms)){$term = array_shift( $terms ); echo $term->name;} ?></span>

				<div class="atributos">
					<?php while(has_sub_field('lista_de_atributos')): ?>
						<div><span>•</span> <?php echo get_sub_field('rotulo'); ?></div>
			        <?php endwhile; ?>
				</div>

				<a href="https://api.whatsapp.com/send/?phone=551633779777" class="btn btn-primary">Entre em contato com um corretor</a>
			</div>

		</div>
	</div>
</section>

<section>
	<div class="empreendimentos-interno-secao2">
		<div class="container">
			<h2><?php echo the_field('subtitulo'); ?></h2>
			<div class="empreendimentos-interno-secao2-app">
				<?php while(has_sub_field('icones_subtitulo')): ?>
					<span><div><img src="<?php echo get_sub_field('icone'); ?>"></div><?php echo get_sub_field('rotulo'); ?></span>
		        <?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="empreendimentos-interno-folder">
		<div class="container">
			<h2>Acesse nosso folder e a planta dos lotes disponíveis</h2>
			<div class="btn-grids">
				<a href="<?php echo get_field('folder_digital'); ?>" class="btn btn-white" target="_blank">Acesse aqui o folder digital</a>
				<a href="<?php echo get_field('planta_atualizada'); ?>" class="btn btn-outline-white" target="_blank">Acesse aqui os lotes disponíveis</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="empreendimentos-interno-fotos">
		<div class="container">
			<h2>Galeria de imagens</h2>
			<div class="empreendimentos-listagem-menu">
				<div id="open-fotos" class="active">Fotos</div>
				<div id="open-plantas">Plantas</div>
			</div>
		</div>
		<div class="empreendimentos-interno-fotos-app owl-carousel owl-theme" id="fotos">
			<?php while(has_sub_field('fotos')): ?>
	            <div class="item">
					<a title="<?php the_title(); ?>" href="<?php echo get_sub_field('item'); ?>" data-source="<?php echo get_sub_field('item'); ?>"> <img src="<?php echo get_sub_field('item'); ?>" alt="<?php the_title(); ?>"></a>
				</div>
	        <?php endwhile; ?>
		</div>

		<div class="empreendimentos-interno-fotos-app owl-carousel owl-theme" id="plantas" style="display:none">
			<?php while(has_sub_field('planta')): ?>
	            <div class="item">
					<a title="<?php the_title(); ?>" href="<?php echo get_sub_field('item'); ?>" data-source="<?php echo get_sub_field('item'); ?>"> <img src="<?php echo get_sub_field('item'); ?>" alt="<?php the_title(); ?>"></a>
				</div>
	        <?php endwhile; ?>
		</div>
	</div>
</section>

<section>
	<div class="empreendimento-form">
		<div class="container">
			<form>
				<div class="empreendimento-form-title">Fale com um de nossos corretores!</div>
				<input type="text" class="input" placeholder="Nome">
				<input type="text" class="input" placeholder="E-mail">
				<input type="text" class="input" placeholder="Telefone">
				<input type="checkbox" value="politica" id="politica">
				<label for="politica">Concordo com a política de privacidade</label>
				<input type="submit" value="Enviar" class="btn btn-primary btn-center" style="margin-top: 20px;">
			</form>
		</div>
	</div>
</section>

<section>
	<div class="container empreendimento-endereco">
		<img class="logotipo" src="<?php echo get_field('logotipo'); ?>" alt="<?php the_title(); ?>">
		<div class="txt"><?php the_content(); ?></div>
		<div class="contato">CONTATO:
			<span><img src="<?= get_template_directory_uri() ?>/img/whatsapp2.svg"> (16) 99772-3297</span>
            <span>
            	<img src="<?= get_template_directory_uri() ?>/img/whatsapp2.svg">
            	<img src="<?= get_template_directory_uri() ?>/img/telefone2.svg"> (16) 3377-9777
            </span>
        </div>
	</div>
</section>

<section>
	<div class="empreendimento-localizacao">
		<div class="container">
			<h2>Localização</h2>
		</div>
		<?php echo get_field('iframe'); ?>
	</div>
</section>

<section>
	<div class="empreendimentos-estagio">
		<div class="container numbers">
			<h2>Estágio de vendas</h2>
			<div class="item">
				<div class="value"><?php echo get_field('comerciais'); ?></div>
				Lotes comerciais <br>disponíveis
			</div>
			<div class="item">
				<div class="value"><?php echo get_field('residenciais'); ?></div>
				Lotes residenciais <br>disponíveis
			</div>
		</div>
	</div>
</section>

<section>
	<div class="empreendimentos-recomendacao">
		<div class="container">
			<h2>Veja mais</h2>
			<div class="empreendimentos-listagem">
				<?php $a = 0;
	            $args2 = array(
	                'post_type' => 'empreendimentos',
	                'post_status' => 'publish',
	                'posts_per_page' => 100,
	                'orderby' => 'date',
	                'order' => 'ASC'
	            );
	            $query = new WP_Query($args2);
	            if($query->have_posts()) : ?>
	            <?php while ( $query->have_posts() ): $query->the_post(); $a++; ?>
	            	<?php if(get_field('disponibilidade') == 'avenda') { ?>
			            <a href="<?php echo get_permalink(); ?>">
							<img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('listagem'); ?>">
							<div>
								<h3><?php the_title(); ?></h3>
								<h4><?php $terms = get_the_terms($post->ID, 'cidades'); if(!empty($terms)){$term = array_shift( $terms ); echo $term->name;} ?></h4>
								<span class="btn btn-primary btn-center">Conheça agora</span>
							</div>
						</a>
					<?php } ?>
	            <?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>

<script>
// $('.empreendimentos-interno-fotos-app').slick({
// 	dots: false,
// 	arrows: true,
// 	infinite: true,
// 	autoplay: true,
//   	autoplaySpeed: 2000,
//   	slidesToShow: 2,
//   	slidesToScroll: 1,
//   	centerMode: true,
//   	centerPadding: '300px'
// });


$('.empreendimentos-interno-fotos-app').owlCarousel({
    loop:false,
    margin:0,
    dots: false,
    nav:true,
    itens:3,
    center: true,
    autoWidth: true,
});


$(window).scroll(testScroll);
var viewed = false;

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function testScroll() {
  if (isScrolledIntoView($(".numbers")) && !viewed) {
      viewed = true;
      $('.value').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 1000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
    });
  }
}

</script>