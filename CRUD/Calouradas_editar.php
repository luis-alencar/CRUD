<?php
require "config.php";
require "Calouradas_funcoes.php";

$result = Calouradas_get_byid($bd,$_REQUEST['id_Calouradas']);

Calouradas_exibir_formulario($result);

//include "Calouradas_amigo.php";

?>