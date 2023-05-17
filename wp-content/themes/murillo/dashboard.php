<?php include 'config.php'; get_header();?>
<?php /* Template Name: Dashboard */ ?>
<?php // PEGA INFORMAÇÕES DO USUÁRIO
$select = $conexao_pdo->prepare("SELECT * from users where id='".$_SESSION['id_user']."' ");
$select->execute(); $query = $select->fetch();

?>
<section>
	<div class="user-dashboard">
		<div class="container">
			<div class="user-dashboard-status">
				<img src="<?php echo $query['foto']; ?>" alt="<?php echo $query['nome']; ?>">
				<h1>Olá, <?php echo $query['nome']; ?>.</h1>
				<a href="#" class="btn btn-outline-white">Sair <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve"><g><path d="M446.64,254.04c-1.82,6.67-6.27,11.47-11.03,16.21c-45.27,45.15-90.45,90.39-135.68,135.6 c-8.35,8.35-18.9,10.83-27.32,4.54c-7.67-5.73-14.62-12.85-20.52-20.42c-5.53-7.1-3.95-17.18,1.88-24.15 c1.15-1.37,2.41-2.65,3.67-3.91c25.9-25.83,51.8-51.64,77.7-77.46c0.95-0.95,1.83-1.96,3.28-3.53c-2.25,0-3.74,0-5.22,0 c-84.91,0-169.82,0-254.73,0c-16.27,0-24.9-8.58-24.91-24.76c0-4.35-0.01-8.7,0-13.04c0.02-15.11,8.42-23.59,23.45-23.6 c43.48-0.02,86.96-0.01,130.44-0.01c41.69,0,83.38,0,125.06,0c1.39,0,2.77,0,5.11,0c-1.45-1.52-2.34-2.49-3.27-3.43 c-26.01-26.07-52.05-52.12-78.04-78.21c-8.19-8.22-10.63-19.08-4.37-27.4c5.76-7.66,12.88-14.59,20.47-20.46 c7.25-5.61,17.43-4,24.51,1.97c1.37,1.15,2.64,2.42,3.9,3.68c44.76,44.75,89.5,89.54,134.32,134.24 c4.84,4.83,9.45,9.67,11.28,16.48C446.64,248.92,446.64,251.48,446.64,254.04z"/></g></svg></a>
			</div>

			<div class="user-dashboard-albuns">
				<?php
				$args = array(
				    'post_type' => 'albums',
				    'post_status' => 'publish',
				    'posts_per_page' => 50,
				    'orderby' => 'date',
				    'order' => 'DESC',
				     'meta_query'    => array(
				        'relation'      => 'AND',
				        array(
				            'key'       => 'cliente',
				            'value'     => $_SESSION['id_user'],
				            'compare'   => '=',
				        )
				    ),
				    'paged' => $paged
				);
				$query = new WP_Query( $args );
				$a = 1; 
				if ( $query->have_posts() ) : ?>
				    <?php while ( $query->have_posts() ): $query->the_post(); $a = ($a + 1); ?>
					    <a href="<?php the_permalink(); ?>">
							<img src="<?php if(has_post_thumbnail()) {the_post_thumbnail_url('album');}?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
							<span class="quantidade"><?php the_field('imagens_totais'); ?> imagens</span> 
							<h2><?php the_title(); ?></h2>
							<p><?php echo get_the_date('d/m/Y',$featured_posts[0]->ID); ?> - 
							<?php $select = $conexao_pdo->prepare("SELECT count(*) as total from selecao where id_album='".get_the_ID()."'"); $select->execute(); $query2 = $select->fetch();
							if(get_field('estagio_do_album') == 'download'){echo 'Download do álbum disponível';} else
							if($query2['total'] >= 1) {echo 'Fotos em processo de edição';} else
							if(get_field('estagio_do_album') == 'selecao'){echo 'Seleção de fotos para edição';} ?></p>

							<span class="btn">
							<?php if(get_field('estagio_do_album') == 'download'){echo 'Download';} else
							if($query2['total'] >= 1) {echo 'Ver fotos selecionadas';} else
							if(get_field('estagio_do_album') == 'selecao'){echo 'Selecione as fotos';} ?>

							 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve"><g><path d="M446.64,254.04c-1.82,6.67-6.27,11.47-11.03,16.21c-45.27,45.15-90.45,90.39-135.68,135.6 c-8.35,8.35-18.9,10.83-27.32,4.54c-7.67-5.73-14.62-12.85-20.52-20.42c-5.53-7.1-3.95-17.18,1.88-24.15 c1.15-1.37,2.41-2.65,3.67-3.91c25.9-25.83,51.8-51.64,77.7-77.46c0.95-0.95,1.83-1.96,3.28-3.53c-2.25,0-3.74,0-5.22,0 c-84.91,0-169.82,0-254.73,0c-16.27,0-24.9-8.58-24.91-24.76c0-4.35-0.01-8.7,0-13.04c0.02-15.11,8.42-23.59,23.45-23.6 c43.48-0.02,86.96-0.01,130.44-0.01c41.69,0,83.38,0,125.06,0c1.39,0,2.77,0,5.11,0c-1.45-1.52-2.34-2.49-3.27-3.43 c-26.01-26.07-52.05-52.12-78.04-78.21c-8.19-8.22-10.63-19.08-4.37-27.4c5.76-7.66,12.88-14.59,20.47-20.46 c7.25-5.61,17.43-4,24.51,1.97c1.37,1.15,2.64,2.42,3.9,3.68c44.76,44.75,89.5,89.54,134.32,134.24 c4.84,4.83,9.45,9.67,11.28,16.48C446.64,248.92,446.64,251.48,446.64,254.04z"/></g></svg></span>
						</a>
				    <?php endwhile;  ?>
				<?php endif ?>
			</div>

			<div class="user-dashboard-legenda">
				<div>
					<img src="<?= get_template_directory_uri() ?>/img/selecione.png">
					<h2>Seleção de fotos</h2>
					<p>Selecione as suas fotos favoritas para irem para edição profissional. Só é possível fazer essa seleção uma vez em cada álbum.</p>
				</div>
				<div>
					<img src="<?= get_template_directory_uri() ?>/img/download.png">
					<h2>Download de fotos</h2>
					<p>Após as fotos serem editadas é possível fazer o download das imagens em alta qualidade. As imagens ficam disponíveis para download por até 1 ano após a entrega.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer();?>