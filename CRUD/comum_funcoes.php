<?php


//Fun��o utilizada para retornar o "selected" quando as duas vari�veis 
//forem iguais fun��o utilizada junto com a TAG SELECT
function select_get_selected($id1, $id2){
	if($id1 == $id2){ 
		return "selected";
	}else{
		return "";
	}
}

?>
					  