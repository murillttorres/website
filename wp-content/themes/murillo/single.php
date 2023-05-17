<?php get_header();?>
<div class="blog">
	<div class="container">
		<h1 class="blog-texto-titulo"><?php the_title(); ?></h1>
		
		<p class="blog-texto-subtitulo"><?php the_field('subtitulo'); ?></p>
		
		<div class="blog-texto-infos">
			<div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAe0lEQVRIie2U3QmAMAyEL+IYxX10kC4e9zhfREqsVI0/iP3eWtK7SwoB3oIz3rrm2lgFA5IDSU0TsYCpU5J9qinGQAEEZ2gVkW7LoDjzPYjIovvsH9xBm7tMWzxCbsTfH1E1qAbVYL0qRgDBuVU1PdgOoi04IR4d7//IBBwTW69sCBTyAAAAAElFTkSuQmCC"> <?php echo get_the_date(); ?></div>
			<div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAzUlEQVRIie2UPw6CMBSHW4mR0YFJZeYQHkOv4RW8j4TE0TB4Ch1ddFYTGFk+l4chCC2mHfmSt/Slv6/pP6VGfADEQAaUUkcg8Rn+4pc3EPsQZB3hNakPQWkQFLb5E1e/D8HZ0MuHr6UHIJEDbfMEVs4CkcRAChRSB2/hI70AAbAG9kDU0Y+ktwaCf4JDYAc8GjfmBmyAudRWxmruMie0hS+Bq+Hl2rgAC5MgdwivOTUzdUtQKaWmg/ezm0prPesTWP+WIWitv7mun92IOx+kP5CT1h8MAgAAAABJRU5ErkJggg=="> <?php echo get_the_author(); ?></div>
		</div>
		
		<img class="blog-texto-imagem" src="<?php the_post_thumbnail_url('blog'); ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
		
		<div class="blog-texto">
			<?php the_content(); ?>
		</div>
	    
	    <div class="blog-texto-share">
	        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-637674a0a24e2aca"></script>
	        <div class="addthis_inline_share_toolbox"></div>
	    </div>

	    <div class="blog-texto-autor">
	    	<img src="https://murillotorres.com/wp-content/themes/murillo/img/fotografo-murillo-torres-piracicaba-sp.webp">
	    	<strong>Autor</strong>
	    	<h4>Murillo Torres</h4>
	    	<p>Fotógrafo do interior de São Paulo, 24 anos, papai do Zeus – meu fiel companheiro, um Pitbull. É assim que me apresento!</p>
	    	<a href="<?= esc_url(home_url('/quem-sou-eu')); ?>">Conheça o autor <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve"><g><path d="M446.64,254.04c-1.82,6.67-6.27,11.47-11.03,16.21c-45.27,45.15-90.45,90.39-135.68,135.6 c-8.35,8.35-18.9,10.83-27.32,4.54c-7.67-5.73-14.62-12.85-20.52-20.42c-5.53-7.1-3.95-17.18,1.88-24.15 c1.15-1.37,2.41-2.65,3.67-3.91c25.9-25.83,51.8-51.64,77.7-77.46c0.95-0.95,1.83-1.96,3.28-3.53c-2.25,0-3.74,0-5.22,0 c-84.91,0-169.82,0-254.73,0c-16.27,0-24.9-8.58-24.91-24.76c0-4.35-0.01-8.7,0-13.04c0.02-15.11,8.42-23.59,23.45-23.6 c43.48-0.02,86.96-0.01,130.44-0.01c41.69,0,83.38,0,125.06,0c1.39,0,2.77,0,5.11,0c-1.45-1.52-2.34-2.49-3.27-3.43 c-26.01-26.07-52.05-52.12-78.04-78.21c-8.19-8.22-10.63-19.08-4.37-27.4c5.76-7.66,12.88-14.59,20.47-20.46 c7.25-5.61,17.43-4,24.51,1.97c1.37,1.15,2.64,2.42,3.9,3.68c44.76,44.75,89.5,89.54,134.32,134.24 c4.84,4.83,9.45,9.67,11.28,16.48C446.64,248.92,446.64,251.48,446.64,254.04z"></path></g></svg></a>
	    </div>

	    <div class="blog-texto-comentarios">
	    	<div id="disqus_thread"></div>
	    	<script>
			    (function() {
			    var d = document, s = d.createElement('script');
			    s.src = 'https://murillo-torres-fotografo.disqus.com/embed.js';
			    s.setAttribute('data-timestamp', +new Date());
			    (d.head || d.body).appendChild(s);
			    })();
			</script>
	    </div>
	</div>
</div>

<div class="blog-mais">
	<div class="container">
		<div class="app">
			<a class="item" href="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<img src="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<strong>Título da publicação de até duas linhas vai bem lindo aqui</strong>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
			</a>

			<a class="item" href="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<img src="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<strong>Título da publicação de até duas linhas vai bem lindo aqui</strong>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
			</a>

			<a class="item" href="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<img src="https://murillotorres.com/wp-content/uploads/2022/11/Gear-Photos-597589287.webp">
				<strong>Título da publicação de até duas linhas vai bem lindo aqui</strong>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
			</a>
		</div>
	</div>
</div>

<?php get_footer();?>
