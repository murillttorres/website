<?php get_header();?>

<section>
	<div class="user-dashboard user-select">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="user-portfolio-app" id="fotos">
			<?php $a=0; while(has_sub_field('imagens')): $a++; ?>
					<a href="<?php echo get_sub_field('foto'); ?>" class="item"><img src="<?php echo get_sub_field('foto'); ?>" /></a>
	        <?php endwhile; ?>
		</div>
		<p class="copyright">As fotos disponíveis nessa página são protegidas pela lei 9.610/98 de direitos autorais. É expressamente proibido salvar e utilizar as imagens, sob as penas da lei. Capturas de tela também não são permitidas. Após a seleção e edição de fotos, você poderá fazer o download de todas as imagens compradas.</p>
	</div>
</section>

<?php get_footer();?>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());

$('#fotos').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
        enabled:true
    },
    zoom: {
        enabled: true,
        duration: 300, // don't foget to change the duration also in CSS
        opener: function(element) {
            return element.find('img');
        }
    }
});
</script>