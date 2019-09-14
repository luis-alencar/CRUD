<?php 
require_once "config.php";
require_once "Calouradas_funcoes.php";

$dados = Calouradas_preparar_dados($_POST);

$ok = Calouradas_salvar($bd,$dados);

if($ok){
	$mensagem = "FESTINHA SALVA!";
	include("Calouradas_inicio.php");
}else{
	$mensagem = "Erro: ".mysqli_error($bd);
	include("Calourdas_form.php");
} ?>
