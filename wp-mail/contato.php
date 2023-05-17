<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

include '../config.php'; 

if($_POST['email'] == 'rerkokewes@outlook.com') {exit;}

if($_POST['data_evento'] == ''){$_POST['data_evento'] = 'Sem data definida';}
$_POST['mensagem'] = str_replace("
    ", "<br>", $_POST['mensagem']);

// incluir a funcionalidade do recaptcha
require_once "recaptchalib.php";

// definir a chave secreta
$secret = "6LdugREUAAAAAP7_I71LL84RL8_qlhIK4byKoNC6";

// verificar a chave secreta
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

// deu tudo certo?
if ($response != null && $response->success) {
    // Cadastra as informações no banco
    $insert2 = $conexao_pdo->prepare('INSERT INTO `leads` (`nome`, `email`, `telefone`, `tipo_evento`, `data_evento`, `formulario`, `mensagem`) VALUES (?,?,?,?,?,?,?)');
    $insert2->execute(array($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['tipo_evento'],$_POST['data_evento'],$_POST['formulario'],$_POST['mensagem']));

    require_once 'phpclass/vendor/autoload.php';
    try {
        // Create the SMTP Transport
        $transport = (new Swift_SmtpTransport('mail.murillotorres.com', 587))
            ->setUsername('email@murillotorres.com')
            ->setPassword('sd27facesd@');

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
     
        // Create a message
        $message = new Swift_Message();
     
        // Set a "subject"
        $message->setSubject('Novo orçamento de '.$_POST['nome'].' para '.$_POST['tipo_evento'].'');
     
        // Set the "From address"
        $message->setFrom([$_POST['email'] => $_POST['nome']]);
     
        // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
        $message->addTo('email@murillotorres.com');

        // Set the plain-text "Body"
        $message->setBody("Nova orçamento");

        $whatsapp = str_replace('(','',$_POST['telefone']);
        $whatsapp = str_replace(')','',$whatsapp);
        $whatsapp = str_replace(' ','',$whatsapp);
        $whatsapp = str_replace('-','',$whatsapp);

        // Set a "Body"
        $message->addPart('<div style="background: #f7f7f7; padding: 60px 0px;font-family: \'Helvetica\',\'PT Sans\',\'Open Sans\', sans-serif;">
        <div style="background: #fff; padding: 30px; border:1px solid #d9d9d9; max-width: 600px; margin:auto;">
            <img src="https://murillotorres.com/wp-content/uploads/2022/11/murillo-torres.com-logotipo.png" style="display: block; width: 200px; margin:auto; margin-bottom: 30px;">
            <div style="padding:40px 35px;background: #3fa54c; color: #fff; text-align: center; font-weight: bold; margin: 0px -30px; font-size: 30px;">Novo orçamento</div>
                <table rules="all" border style="margin: 20px;border: 1px solid #333 margin-top:0px;width: calc(100% - 40px);font-size: 18px;line-height:1.6;">
                    <tr><td style="padding:10px;color:#333;"><strong>Nome:</strong></td><td style="padding:10px;color:#333;">'.$_POST['nome'].'</td></tr>
                    <tr><td style="padding:10px;color:#333;"><strong>E-mail:</strong></td><td style="padding:10px;color:#333;">'.$_POST['email'].'</td>
                    <tr><td style="padding:10px;color:#333;"><strong>Telefone:</strong></td><td style="padding:10px;color:#333;"><a href="https://api.whatsapp.com/send?phone=55'.$whatsapp.'">'.$_POST['telefone'].'</a></td>
                    <tr><td style="padding:10px;color:#333;"><strong>Data do evento:</strong></td><td style="padding:10px;color:#333;">'.$_POST['data_evento'].'</td>
                    <tr><td style="padding:10px;color:#333;"><strong>Tipo de evento:</strong></td><td style="padding:10px;color:#333;">'.$_POST['tipo_evento'].'</td>
                    <tr><td style="padding:10px;color:#333;vertical-align:top"><strong>Mensagem:</strong></td><td style="padding:10px;color:#333;">'.$_POST['mensagem'].'</td>
                </table>
            </div>
        </div>', 'text/html');
     
        // Send the message
        $result = $mailer->send($message);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    header('Location: https://murillotorres.com/obrigado/'); exit;
} else {
    header('Location: https://murillotorres.com/orcamento/?erro=Responda o reCAPTCHA para enviar!&nome='.$_POST['nome'].'&email='.$_POST['email'].'&telefone='.$_POST['telefone'].'&tipo_evento='.$_POST['tipo_evento'].'&data_evento='.$_POST['data_evento'].'&mensagem='.$_POST['mensagem'].' '); exit;
} ?>