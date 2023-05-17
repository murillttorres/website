<?php get_header();?>
<section>
	<div class="secao-home">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="orcamento-flex">
				<div class="orcamento-form">
					<?php if($_GET['erro']) {echo '<div class="orcamento-form-erro">'.$_GET['erro'].'</div>';} ?>
					<form class="form" method="post" method="post" action="/wp-mail/contato.php">						
						<input type="hidden" value="pagina_orcamento" name="formulario">
						<div class="item"><input value="<?php echo $_GET['nome'];?>" class="input" type="text" placeholder="Nome" name="nome" required="required"></div>
						<div class="item"><input value="<?php echo $_GET['email'];?>" class="input" type="text" placeholder="E-mail" required="required" name="email"></div>
						<div class="item"><input value="<?php echo $_GET['telefone'];?>" class="input telefone" type="text" placeholder="WhatsApp ou celular" required="required" name="telefone"></div>
						<div class="item">
							<select class="input select" name="tipo_evento" required="required">
								<option value="">Tipo de evento</option>
								<option value="Aniversário">Aniversário</option>
								<option value="Bebês e mêsversário">Bebês e mêsversário</option>
								<option value="Casamento">Casamento</option>
								<option value="Debutante">Debutante</option>
								<option value="Evento corporativo">Evento corporativo</option>
								<option value="Ensaio fotográfico">Ensaio fotográfico</option>
								<option value="Gestantes">Gestantes</option>
								<option value="Nú artistico">Nú artistico</option>
								<option value="Perfil profissional">Perfil profissional</option>
								<option value="Pré-wedding">Pré-wedding</option>
								<option value="Publicitário">Publicitário</option>
								<option value="Show Musical">Show Musical</option>
								<option value="Outro tipo">Outro tipo</option>
							</select>
						</div>
						<div class="item" style="width:30%"><input value="<?php echo $_GET['data_evento'];?>" type="text" id="data" placeholder="Data do evento" class="input data" name="data_evento"></div>
						<div class="item"><input type="checkbox" id="sem-data"><label for="sem-data">Não tenho data definida ainda</label></div>
						<div class="item" style="width:100%"><textarea class="input textarea" name="mensagem" placeholder="Descreva um pouco mais o seu evento"><?php echo $_GET['mensagem'];?></textarea></div>
						
						<div class="item" style="width:100%"><div class="g-recaptcha" data-theme="dark" data-sitekey="6LdugREUAAAAAOcTqgo248tfxQrRN8ybM-v_KXKt"></div></div>
						<div class="item"><input type="submit" value="Enviar orçamento" class="btn"></div>
					</form>
				</div>
				<div class="orcamento-contato">
					<div><img src="<?= get_template_directory_uri() ?>/img/telefone.png"><span><strong>Telefone</strong>(19) 998210-8814</span></div>
					<div><img src="<?= get_template_directory_uri() ?>/img/email.png"><span><strong>E-mail</strong> email@murillotorres.com</span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.mask.min.js"></script>
<script>
$("#sem-data").click(function() {
    if (this.checked) {
        $('#data').prop('disabled', true); 
        $('#data').css({'opacity':'0.5'}); 
    } else {
        $('#data').prop('disabled', false); 
        $('#data').css({'opacity':'1'}); 
    }
});

$(function($){$('.g-recaptcha').attr('data-theme', 'dark');});
</script>