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
    $sql="CREATE TABLE IF NOT EXISTS cadastro(
  idnome varchar(40) NOT NULL ,
  idemail varchar(50) NOT NULL,
  idcpf int NOT NULL,
  idlogin varchar(32) NOT NULL,
  idsenha varchar(32) NOT NULL,
  idconfsenha varchar(32) NOT NULL,
  PRIMARY KEY(idlogin)
   )";

$res =  mysqli_query($servidordb,$sql);
    

   mysqli_close($servidordb);
   //http://localhost/phpmyadmin/index.php?db=seila&token=9f811f9406d31c6569caa0f259802695;
}
 //------------------------------------------------------------------
?>

