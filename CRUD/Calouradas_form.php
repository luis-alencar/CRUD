<?php error_reporting(E_ALL ^E_NOTICE);
require_once("config.php");
require_once("Calouradas_funcoes.php");

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
<FORM ACTION="Calouradas_salvar.php" METHOD="POST">
	<strong>Formulário de Calouradas</strong><br/>
	<div class="container"> 
	<div class="imagem_form row col-sm-2">
		<input type="radio" name="imagem" id="i1" />
		<label for="i1"><img src="https://cdn.dribbble.com/users/3689326/screenshots/6599423/1.jpg" alt=""></label>
		<input type="radio" name="imagem" id="i2" />
		<label for="i2"><img src="img/civilizada.jpg" alt=""></label>
		<input type="radio" name="imagem" id="i3" />
		<label for="i3"><img src="img/sistematica.jpg" alt=""></label>
	</div>	
		</div>	
	<?=get_mensagem($mensagem)?>
	<div class="container"> 
	<div class="row">
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
	</div>
	</div> 
</FORM>