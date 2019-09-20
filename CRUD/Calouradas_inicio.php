<?php require_once "config.php";?>

<html>

	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
		<title>Sistema de Calouradas</title>
		
	</head>
	<body >
	<img src="img/calouradas.png">
	<?=get_mensagem($mensagem)?>

	<h1>Bem vindo ao sistema de Calouradas</h1>
	<b>Opções disponíveis para Calouradas</b><br/><hr>

	<a class="btn btn-primary" href='Calouradas_incluir.php'>Adicionar Calouradas</a><BR/><hr>
	<a class="btn btn-primary" href='Calouradas_listar.php'>Mostrar Calouradas</a><BR/><hr>
	<!-- <a class="btn btn-primary" href='Calouradas_editar.php'>Editar Calouradas</a><BR/><hr> -->
	<a class="btn btn-primary" href='Calouradas_listar1.php'>Editar Calouradas</a><BR/><hr>
	</body>

</html>