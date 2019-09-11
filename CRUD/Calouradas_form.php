<?php error_reporting(E_ALL ^E_NOTICE);
require_once("config.php");
require_once("editora_funcoes.php");
?>

<FORM ACTION="Calouradas_salvar.php" METHOD="POST">
	<strong>Formulário de Calouradas</strong><br/>
	
	<?=get_mensagem($mensagem)?>
	<INPUT TYPE="hidden" NAME="codigo_livro" VALUE="<?=$dados['codigo_livro']?>">
	
	<BR/>Atletica:<BR/>
	<INPUT TYPE="text" NAME="autor" VALUE="<?=$dados['Atletica']?>">
	
	<BR/>Tema:<BR/>
	<INPUT TYPE="TEXT" NAME="titulo" VALUE="<?=$dados['Tema']?>">
	
	<BR/>Data: <?=$dados['Data']?><BR/>
	<SELECT NAME="id_Calouradas">
		<option value="">Selecione uma Atletica</option>
		<?php
		//echo "teste2:".print_r($bd,1).":";
		$result_editora = editora_listar_todos($bd);
		
		while( $dados_editora = editora_anexar_resultado($result_editora) ){ ?>
			<OPTION VALUE=<?=$dados_editora['id']?> <?=select_get_selected($dados_editora['id'],$dados['editora_id'])?> >
				<?=$dados_editora['nome']?>
			</OPTION>
		<?php 
		} 
		?>
	</SELECT>
	
	
	<BR/>Resumo:<BR/>
	<textarea NAME='resumo'><?=$dados['resumo']?></textarea>
	
	<INPUT TYPE="submit" NAME="btn_acao" VALUE="Enviar">
</FORM>