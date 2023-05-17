<?php
include 'config.php'; 

// VERIFICA SE O USUÁRIO JÁ NÃO ESTÁ LOGADO. USUÁRIOS LOGADOS NÃO PODEM VER ESSA PÁGINA.
if($_SESSION['logado'] == true) {header('Location: '.$server.'dashboard');}

// EFETUA O LOGIN
if($_POST['login']) {
	$formpost = $_POST; $validacao = array();

	// VERIFICA SE FOI DIGITADO USUÁRIO E SENHA.
	if($formpost['email'] == ''){$validacao['email'] = array('erro' => 'Digite o seu <strong>E-mail</strong> para entrar.');}
    if($formpost['senha'] == ''){$validacao['senha'] = array('erro' => 'Digite a sua <strong>Senha</strong> para entrar.');}

    // VERIFICA SE JÁ EXISTE MUITAS TENTATIVAS DE ENTRAR NO SISTEMA
    $email = $formpost['email'];
    $contagem = $conexao_pdo->prepare('SELECT count(*) as total from users_login where tipo=1 and date="'.$data.'" and (ip="'.$ip.'" or user="'.$email.'")'); $contagem->execute();
    $total = $contagem->fetch(); $total = $total['total'];
    if($total >= 6) {$validacao['tentativas'] = array('erro' => 'Suas tentativas de acesso foram bloqueadas hoje. <br> Saiba mais em nossa <a href="#">central de ajuda.</a>'); $form_display = true;}

    // VERIFICA SE TEM ERROS NO ACESSO
    $erros = false; foreach($validacao as $item) {$erros.=$item['erro']."<br />";} 

 	// SE NÃO TIVER ERROS, CONTINUA.
    if($erros == false) {
    	// SELECIONA O USUÁRIO E VERIFICA SE ELE EXISTE
    	$select_user = $conexao_pdo->prepare("SELECT email, senha, id from users where email='".$formpost['email']."' LIMIT 1");
		$select_user->execute(); $query_user = $select_user->fetch(); 
		if(isset($query_user['email'])) {$banco_email = $query_user['email'];} else {$banco_email = false;}
		if(isset($query_user['senha'])) {$banco_senha = $query_user['senha'];} else {$banco_senha = false;}

		// VERIFICA SE O USUÁRIO EXISTE
		if($banco_email == false or $banco_senha == false) {$validacao['tentativas'] = array('erro' => 'Esse e-mail não está vinculado a nenhuma conta.');}
		foreach($validacao as $item) {$erros.=$item['erro']."<br />";} 

		// SE O USUÁRIO EXISTE, VERIFICA SE A SENHA FOI DIGITADA CORRETAMENTE.
        if((crypt($formpost['senha'],$query_user['senha']) === $query_user['senha']) and $erro == false) {
	        // ZERA TODAS AS TENTATIVAS DE LOGIN SEM SUCESSO
	        $atualiza_tentativas_acesso = $conexao_pdo->prepare('DELETE FROM `users_login` WHERE data="'.$data.'" and (`ip`="'.$ipusuario.'" or `user`="'.$email.'");');
            $verifica_pdo = $atualiza_tentativas_acesso->execute();

            // LOGA O USUÁRIO NORMALMENTE
	        $_SESSION['logado'] = true;
	        $_SESSION['id_user'] = $query_user['id'];

        	// REDIRENCIONA PARA MINHA CONTA
        	echo '<script language= "JavaScript"> location.href="'.$server.'dashboard" </script>';
		} else { $erros = false;
			// EXIBE O ERRO CASO O LOGIN SEJA INVÁLIDO
			$validacao['tentativas'] = array('erro' => 'E-mail ou senha inválidos, tente novamente!');
			foreach($validacao as $item) {$erros.=$item['erro']."<br />";} 
	        
			// REGISTRA TENTATIVA DE ACESSO
			$sessao = ''.date('dmY').''.rand().''; $ipusuario = $_SERVER["REMOTE_ADDR"];
	        $insert_session = $conexao_pdo->prepare('INSERT INTO `users_login` (`ip`, `user`, `date`, `time`, `tipo`) VALUES (?,?,?,?,?)');
	        $insert_session->execute(array($ipusuario,$formpost['email'],$data,$hora,1));
		} 
    }
}



get_header();?>

<section>
	<div class="user-login">
		<div class="container">
			<h2>Bem-vindo</h2>
			<p>Acesso exclusivo para clientes.</p>
			<div class="erros">
				<?php echo $erros; ?>
			</div>

			<form method="post" action="<?php echo $server; ?>login" class="form">
				<div class="item" style="width: 100%;">
					<input type="input" class="input" placeholder="E-mail" name="email">
				</div>
				<div class="item" style="width: 100%;">
					<input type="password" class="input" placeholder="Senha" name="senha">
				</div>
				<div class="item" style="width: 100%;">
					<input type="submit" value="Acessar" class="btn btn-center" name="login">
				</div>
				<div class="item" style="width: 100%;">
					<p>Esqueceu sua senha ou não tem acesso?<br> <a href="https://api.whatsapp.com/send?phone=5516999753201" target="_blank">Entre em contato</a></p>
			</form>
		</div>
	</div>
</section>

<?php get_footer();?>