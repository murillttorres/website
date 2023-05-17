<?php get_header();?>

<section>
	<div class="secao-home secao-porfolio" style="background:#101010;padding-top: 100px;">
		<div class="container">
			<h2>Conheça meu <strong>portfólio</strong></h2>
			<div class="portfolio-app">
				<?php
				$args = array(
				    'post_type' => 'portfolio',
				    'post_status' => 'publish',
				    'posts_per_page' => 60,
				    'orderby' => 'date'
				);
				$query = new WP_Query( $args );
				$a = 1; 
				if ( $query->have_posts() ) : ?>
				    <?php while ( $query->have_posts() ): $query->the_post(); $a = ($a + 1); ?>
					    <a href="<?php the_permalink(); ?>">
							<img src="<?php if(has_post_thumbnail()) {the_post_thumbnail_url('original');}?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
						</a>
				    <?php endwhile;  ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>