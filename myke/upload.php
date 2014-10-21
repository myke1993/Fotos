<!DOCTYPE html> 
<?php session_start();?>

<form action="" method=“POST" enctype="multipart/form-data">

<form>
	<input type = "text" name = "nome" />	
	<input type = "text" name = "descrição"/>
	<input type = "date" name = "data"/>
	<input type = "text" name = "lugar"/>
	<input type="file" name="fotos" />

<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
Arquivo: <input name="fotos" type="file" />
<input type="submit" value="Enviar" />
</form>
