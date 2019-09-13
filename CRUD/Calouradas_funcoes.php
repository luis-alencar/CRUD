
<body>
<link rel="stylesheet" href="style.css">
</body>

<?php

require_once("Calouradas_funcoes.php");
	
	//função para retornar um result com listagem de todos os Calouradas.
	function Calouradas_listar_todos($bd){
		$sql = "select id_Calouradas,Atletica,Tema,Data,Hora,Preco from Calouradas";
		$result = mysqli_query($bd,$sql);
		return $result;
	}
	
	//função para buscar um livro no banco de dados pelo ID
	function Calouradas_get_byid($bd,$id){
		if($id){
			$id = mysqli_real_escape_string($bd,$id);
			$sql = "select id_Calouradas,Atletica,Tema,Data,Hora,Preco from Calouradas
			where codigo_Calouradas=".$id;
			
			return mysqli_query($bd,$sql);
		}else{	
			return array();
		}
	}
	
	//recebe uma matriz e prepara uma matriz de livro, tratando campos especiais como select e abreviações
	function Calouradas_preparar_dados($linha){
		$linha['Atletica']=strtoupper($linha['Atletica']);
		return $linha;
	}
	
	//obtem os dados de livro apartir de um result incluir os dados preparados
	function Calouradas_obter_dados($result){
		global $bd;
		
		$dados = array();
		
		if( $linha = anexar_resultado($result) ){
			
			$linha = Calouradas_preparar_dados($linha);
			
			$result_Calouradas = Calouradas_get_byid($bd,$linha['Calouradas_id']);
			$dados_Calouradas = Calouradas_obter_dados($result_Calouradas);
			
			//junção dos valores da editora relacionada
			foreach($dados_Calouradas as $key => $valor){
				$chave = 'Calouradas_'.$key;
				$linha[$chave] = $valor;
			}
		}
		return $linha;
	}
	
	//exibir o formulário de edição para um result
	function Calouradas_exibir_formulario($result){
		global $bd;
		$dados = Calouradas_obter_dados($result) ;
		//echo "<pre>".print_r($dados,1)."</pre>";
		include "Calouradas_form.php";
		
	}
	
	
	//recebe a conexao com o banco de dados e uma matriz com os dados que devem ser salvos.
	function Calouradas_salvar($bd,$dados){
		//print_r($dados);
		$dados = Calouradas_preparar_dados($dados);

		if($dados['codigo_Calouradas']){//se existir id é alteração
			$sql = "update Calouradas
				set autor ='{$dados['autor']}', titulo='{$dados['titulo']}',resumo='{$dados['resumo']}'
				,editora_id='{$dados['editora_id']}'
				where codigo_Calouradas = {$dados['codigo_livro']}";
		}else{
			$sql = "insert into livro(autor,titulo,resumo, editora_id)
					values('{$dados['autor']}','{$dados['titulo']}',
					'{$dados['resumo']}','{$dados['editora_id']}')";
			echo "SQL: $sql<br>";
		}
		
		$ok = mysqli_query($bd,$sql);

		return $ok;
	}
	
	//função para pegar uma linha de um result.
	function Calouradas_anexar_resultado($result){
		return Calouradas_obter_dados($result);
	}
	
	
	// função para excluir 
	function Calouradas_excluir($bd,$id){
		
		$id = mysqli_real_escape_string($bd,$id);
		
		$sql = "delete from Calouradas
		where codigo_Calouradas=".$id;
		
		$result = mysqli_query($bd,$sql);

		if( $result){
			$mensagem = "Calourada excluído!";
		}else{
			$mensagem = "Erro: ".mysqli_error($bd);
		} 
		return $mensagem;
	}
?>