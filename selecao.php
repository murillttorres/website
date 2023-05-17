<?php 
include 'config.php';

// CHECK IF THE USER IS NOT ALREADY LOGGED IN.
if($_SESSION['logado'] == false) {header('Location: '.$server.''); exit;}

// VERIFY IF THE USER IS THE ALBUM OWNER
if($_SESSION['id_user'] != $_POST['usuario']) {header('Location: '.$server.''); exit;}

// REGISTER THE SELECTION OF PHOTOS IN THE DATABASE.
$fotos = $_POST['fotos_selecionadas'];
foreach ($fotos as $foto=>$value) {
    $insert = $conexao_pdo->prepare('INSERT INTO `selecao` (`id_album`, `id_foto`) VALUES (?,?)');
    $insert->execute(array($_POST['album'],$value));
}

header('Location: '.$server.''); exit;

?>