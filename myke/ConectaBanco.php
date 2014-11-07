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
   mysqli_close($servidordb);
   //http://localhost/phpmyadmin/index.php?db=seila&token=9f811f9406d31c6569caa0f259802695;
}
 //------------------------------------------------------------------
?>

