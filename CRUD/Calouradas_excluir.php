<?php
require_once "config.php";
require_once "livro_funcoes.php";

$mensagem = livro_excluir($bd,$_REQUEST['codigo_livro']);

include "amigo_inicio.php";
?>