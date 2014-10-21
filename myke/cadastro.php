<!DOCTYPE html> 
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<title>Formulário Cadastro</title> 
	<meta charset="utf-8" /> 
	<link href="css/css_cadastro.css" rel="stylesheet" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
	<script language=”text/javascript”>
	$('#identificalForm').bootstrapValidator({
		feedbackIcons:{
			 valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            senha: {
                validators: {
                    identical: {
                        field: 'confsenha',
                        message: 'senhas não correspondem'
                    }
                }
            },
            confsenha: {
                validators: {
                    identical: {
                        field: 'senha',
                        message: 'senhas não correspondem'
                    }
                }
            }
        }
    });
});
	</script>
</head> 
<body> 
	<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="index.php">Easy Photos</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li class="active"><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->

	<!-- FORMULARIO DE CADASTRO   -->
	<center>
	<form name="form_cad" method="POST" action=""> 
		<br />
		<h1  class="titulo-cadastro">CADASTRO</h1> 
			<table>
			
				<tr class="nome">
					<td><label for="nome">Nome:</label></td>
					<td><input type="text" id="nomeid" placeholder="ex: Myke Wyllian Dal'Agnol" required="required" name="nome" required /></td>
				</tr>
				<tr class="fone">
					<td><label for="fone">Fone:</label> </p></td>
					<td><input type="text" id="foneid" placeholder="(xx)xxxx-xxxx" name="fone" /> </td>
				</tr>
				<tr class="email">
					<td><label for="email">E-Mail:</label> </p></td>
					<td><input type="email" id="emailid" placeholder="exemplo@exemplo.com" name="email" required /> </td>
				</tr>
				<tr class="cpf">
					<td><label for="cpf">CPF:</label> </p></td>
					<td><input type="text" id="cpfid" placeholder="xxx.xxx.xxx-xx" name="cpf" /> </td>
				</tr>
				<tr class="login">
					<td><label for="login">Login:</label> </p></td>
					<td><input type="text" class="form-control" id="loginid" placeholder="login" name="login" required/> </td>
				</tr>
				<tr class="senha">
					<td><label for="">Senha:</label> </p></td>
					<td><input type="password" id="senhaid" placeholder="5u453Nh4" name="senha" required/> </td>
				</tr>
				<tr class="confsenha">
					<td><label for="confsenha">Confirme sua Senha:</label> </p></td>
					<td><input type="password" id="confsenhaid" placeholder="5u453Nh4" name="confsenha" required/> </td>
				</tr>
			</table>
	<p class="submit"> <input type="submit" onclick="confsenha;" value="Enviar" id="clicou"/> </p> 
	<br />
	</form> 
	</center>
</body> 
</html>
