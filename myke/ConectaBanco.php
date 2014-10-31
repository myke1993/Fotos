<?php

function conectaBD(){
$dbHostname = "localhost";
$dbDatabase = "SeiLa";
$dbUsername = "root";
$dbPassword = "";

 $servidordb = mysqli_connect($dbHostname, $dbUsername, $dbPassword);
 if(!$servidordb){
	die("Não foi possível conectar ao MySQL: " . mysqli_error()); 
 }

	 $sql = "CREATE DATABASE IF NOT EXISTS ".$dbDatabase;
  $res =  mysqli_query($servidordb,$sql);

  	if($res){
  		echo "BANCO CRIADO!";

  	}else{
  		echo "DEU MERDA";
  	}
   $sql = "CREATE TABLE Cadastro(idnome varchar(45) not null, idtelefone varchar(15), idemail varchar(45) not null, idcpf varchar(20) not null, idlogin varchar(45) not null, idsenha varchar(32) not null, primary Key(idlogin))";

   $res =  mysqli_query($servidordb,$sql);

  	if($res){
  		echo "TABELA CRIADO!";

  	}else{
  		echo "DEU MERDA";
  	}

   mysqli_close($servidordb);
}
 //------------------------------------------------------------------
?>