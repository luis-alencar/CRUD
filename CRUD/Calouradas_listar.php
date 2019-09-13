<?php 
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
		<table border=1 cellspacing=0 cellpadding=5>
			<tr>
				<th>Atletica</th>
				<th>Tema</th>
				<th>Data</th>
				<th>Hora</th>
				<th>Preco</th>
			</tr>
		<?php
		$result = Calouradas_listar_todas($bd);
		
		while( $dados = livro_anexar_resultado($result) ){ ?>
			<tr>
				<td><?=$dados['Atletica']?></td>
				<td><?=$dados['Tema']?></td>
				<td><?=$dados['Data']?> - <?=$dados['Hora']?></td>
				<td><?=str_replace("\n","<br>\n",$dados['Preco'])?></td>
				<td>
					<a href='Calouradas_incluir.php?id_Calouradas=<?=$dados['id_Calouradas']?>'>Incluir</a> 
					<a href='Calouradas_editar.php?id_Calouradas=<?=$dados['id_Calouradas']?>'>Editar</a> 
					<a href='Calouradas_listar.php?id_Calouradas=<?=$dados['id_Calouradas']?>'>Consultar</a>
					<a href='Calouradas_excluir.php?id_Calouradas=<?=$dados['id_Calouradas']?>'>Excluir</a> 
				</td>
			</tr>
		<?php 
		} 
		?>
		</table>
	</body>
</html>