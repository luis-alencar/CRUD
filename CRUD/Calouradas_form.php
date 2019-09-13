<?php error_reporting(E_ALL ^E_NOTICE);
require_once("config.php");
require_once("Calouradas_funcoes.php");

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="style.css">
<FORM ACTION="Calouradas_salvar.php" METHOD="POST">

<div class="container"></div>
<input id="btn-back" type="button" value="Voltar" onClick="history.go(-1)"> 

<strong>Formulário de Calouradas<BR/></strong><br/>
</div>
<div class="container">
	<div class="radio-group">
		<input type="radio" name="imagem" id="i1" />
		<label class="radio" id="imagem_form" for="i1"><img src="img/mitologica.png" alt=""></label>
		<input type="radio" name="imagem" id="i2" />
		<label class="radio" id="imagem_form" for="i2"><img src="img/sistematica.jpg" alt=""></label>
		<input type="radio" name="imagem" id="i3" />
		<label class="radio" id="imagem_form" for="i3"><img src="img/civilizada.jpg" alt=""></label>
	</div>
</div>
	<?=get_mensagem($mensagem)?>
	<INPUT TYPE="date" NAME="DATA" VALUE="<?=$dados['Data']?>">
	
	<BR/>Atletica:<BR/>
	<INPUT TYPE="text" NAME="TEMA" VALUE="<?=$dados['Tema']?>">
	
	<BR/>Tema:<BR/>
	<INPUT TYPE="TEXT" NAME="Hora" VALUE="<?=$dados['Hora']?>">
	
	<BR/>Tema:<BR/>
	<INPUT TYPE="TEXT" NAME="Preço" VALUE="<?=$dados['Preco']?>">
	


	<BR/>Data: <?=$dados['Data']?><BR/>
	<SELECT NAME="id_Calouradas">
		<option value="Date">Escolha uma Data</option>
		<?php
		//echo "teste2:".print_r($bd,1).":";
		$result_Calouradas = Calouradas_listar_todos($bd);
		
		while( $dados_Calouradas = Calouradas_anexar_resultado($result_Calouradas) ){ ?>
			<OPTION VALUE=<?=$dados_Calouradas['id']?> <?=select_get_selected($dados_Calouradas['id'],$dados['Calouradas_id'])?> >
				<?=$dados_Calouradas['nome']?>
			</OPTION>
		<?php 
		} 
		?>
	</SELECT>
	
	
	<BR/>Resumo:<BR/>
	<textarea NAME='resumo'><?=$dados['resumo']?></textarea><br/><br/>
	
	<INPUT TYPE="submit" NAME="btn_acao" VALUE="Enviar">

</FORM>