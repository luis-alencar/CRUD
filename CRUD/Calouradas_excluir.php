<?php
require_once "config.php";
require_once "Calouradas_funcoes.php";

$mensagem = Calouradas_excluir($bd,$_REQUEST['id_Calouradas']);

include "Calouradas_inicio.php";
?>