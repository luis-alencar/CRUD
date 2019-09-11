<?php
	//obter uma conexao mysql
	function get_conexao(){
		
		$bd = mysqli_connect(SERVIDOR_BD, USUARIO_BD, PASSWORD_BD, DATABASE_BD);

		/* Verificar se houve erro na conexão */
		if (mysqli_connect_errno()) {
			printf("Erro : %s.<br/>", mysqli_connect_error()); 
			exit(); 
		}
		return $bd;
	}
		
	//mostrar uma mensagem formata para exibir em html
	function get_mensagem($mensagem){
		if($mensagem){ 
			return "<B>$mensagem</B>,<BR/>"; 
		}else{
			return "";	
		} 
	}
	
	//função para pegar uma linha de um result.
	function anexar_resultado($result){
		return mysqli_fetch_array($result);
	}
	
?>