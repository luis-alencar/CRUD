﻿<?php 
	require_once("config.php"); 
	require_once("Calouradas_funcoes.php");

	?>

<html>
<div class="container"></div>
<input id="btn-back" type="button" value="Voltar" onClick="history.go(-1)"> 

<h1>Lista de Calouradas</h1><BR/><br/>
</div>

	<head>
		<title>Sistema de Calouradas</title>
	</head>
	<body>
		<?=get_mensagem($mensagem)?> 			
		<table class="content-table" border=1 cellspacing=0 cellpadding=5 > 

		<!-- cellspacing=0 cellpadding=5 -->
			<tr>
				<th>Atletica</th>
				<th>Tema</th>
				<th>Data</th>
				<th>Hora</th>
				<th>Preco</th>
			</tr>
		<?php
		$result = Calouradas_listar_todos($bd);
		
		while( $dados = Calouradas_anexar_resultado($result) ){ ?>
			<tr>
				<td><?=$dados['Atletica']?></td>
				<td><?=$dados['Tema']?></td>
				<td><?=$dados['Data']?></td>
				<td><?=$dados['Hora']?></td>
				<td><?=str_replace("\n","<br>\n",$dados['Preco'])?></td>
				<!-- <td>
				<button type="button" class="btn btn-primary EDITAR">
					<a  href='Calouradas_editar.php?codigo_Calouradas=<?=$dados['codigo_Calouradas']?>'>EDITAR </a>
				</button> 
				</td> -->
		<?php 
		} 
		?>
		</table>
	</body>
</html>