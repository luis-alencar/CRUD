<?php
	//configurar o nivel de relatório de erros.
	error_reporting(E_ALL ^E_NOTICE ^E_WARNING);
	
	//require de funções comuns
	require_once("comum_funcoes.php");
	
	define("SERVIDOR_BD", 	"localhost");
	define("DATABASE_BD", 	"Calouradas");
	define("USUARIO_BD", 	"root");
	define("PASSWORD_BD", 	"");
	
	require_once ("funcoes.php");
	$bd = get_conexao();
?>