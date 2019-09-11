<?php 
$bd = mysqli_connect("localhost", "root", "");

/* Verificar se houve erro na conexão */
if (mysqli_connect_errno()) {
    printf("Erro: %s.<br/>", mysqli_connect_error()); exit(); 
}

$sql = "create database Calouradas; ";
$res = mysqli_query($bd, $sql);

if(!$res){
	printf("Erro ao executar SQL: %s.<br/>" ,mysqli_error($bd)); //exit();
}

$ok = mysqli_select_db($bd,"Calouradas");
if(!$ok){
	printf("Erro na SQL: %s.<br/>", mysqli_error($bd)); exit(); 
}
$sql = "create table Calouradas(
	id_Calouradas INT not null auto_increment, 
	Atletica varchar(100) not null UNIQUE,
	Tema varchar(50) not null UNIQUE,
	Data date null, 
	Hora float,
	Preco float ,
	primary key (id_Calouradas));";
$res = mysqli_query($bd, $sql);
if(!$res){
	printf("Erro na SQL: %s.<br/>",mysqli_error($bd)); //exit();
}


?>