<?php 
session_name('murillo'); // NOME DA SESSÃO
session_start(); // Inicia a sessão

// Variáveis da conexão
$base_dados = 'inove860_murillo';
$usuario_bd = 'inove860_murillo';
$senha_bd = '=9]689WnQVuk';

$host_db = 'localhost';
$charset_db = 'UTF8';
$conexao_pdo = null;
// Concatenação das variáveis para detalhes da classe PDO
$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

// Tenta conectar
try {$conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    print "<script language=\"JavaScript\">location.href=\"https://www.rolezeiro.com/studio/system/erro?erro=" . $e->getMessage() . "\"</script>";
    die();
}

// VÁRIAVEIS GLOBAIS
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0); ini_set("display_errors", 0); 
$ip = $_SERVER["REMOTE_ADDR"];
$server = 'https://murillotorres.com/';
$data = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
$databr = date('d-m-Y');
$hora = date('H:i:s');
DEFINE('HTTP','https://murillotorres.com/');

?>