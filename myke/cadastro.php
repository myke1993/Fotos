<!DOCTYPE html> 
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<title>Formulário Cadastro</title> 
	<meta charset="utf-8" /> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
	
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
<div class= "container">
  <div class="jumbotron">
    <form class="form-horizontal" role="form" method="POST" action="cadastra.php">
      <div class="form-group">
       <label for="idnome" class="col-sm-2 control-label">Nome Completo</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="text" class="form-control"  id="idnome" placeholder="Myke Wylian Dal'agnol">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="idtelefone" class="col-sm-2 control-label">Telefone</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="idtelefone" placeholder="(XX)XXXX-XXXX">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="idemail" class="col-sm-2 control-label">Email</label>
        <div class="controls">
          <div class="col-sm-10">
            <div class="input-group">
              <div class="input-group-addon">@</div>
              <input type="email" class="form-control" id="idemail" placeholder="Myke@bol.com">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="idcpf" class="col-sm-2 control-label">CPF</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="idcpf" placeholder="XXX.XXX.XXX-XX">
          </div>
        </div>
      </div> 

      <div class="form-group">
        <label for="idlogin" class="col-sm-2 control-label">Login</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="idlogin" placeholder="mykewd">
          </div>
        </div>
      </div>  

      <div class="form-group">
        <label for="idsenha" class="col-sm-2 control-label">Senha</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="password" class="form-control" id="idsenha" placeholder="5u453Nh4">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="idconfsenha" class="col-sm-2 control-label">Confirme sua Senha</label>
        <div class="controls">
          <div class="col-sm-10">
            <input type="password" class="form-control" id="idconfsenha" placeholder="5u453Nh4">
          </div>
        </div>
      </div>

      <center>
        <button type="submit" class="btn btn-default">Enviar</button>
      </center>

    </form>
  </div>
</div>
 </body> 
</html>
