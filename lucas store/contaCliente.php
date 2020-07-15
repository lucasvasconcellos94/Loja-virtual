<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="image/favicon.jpg">
    <title>lucas store</title>
  </head>
<body>

<div class="container-fluid">
<?php
    include ('./navLog.php');
?>

<h1 class="titulos">Cadastro</h1>
<article>
  <form action="CrudAdmCliente/controllerCliente.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Endereço de email</label>
      <input class="form-control" type="text" name="email" placeholder="E-mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input class="form-control" type="password" name="senha" placeholder="Senha">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
      <input class="form-control" type="text" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
    <label hidden for="exampleInputPassword1">Permissão</label>
      <input hidden class="form-control" type="text" name="adm" value="0" maxlength="1"   placeholder="Adm">
    </div>
    <button type="submit" class="btn btn-primary" name="criarCliente">Cadastrar</button>
  </form>
</article>
<br>
<?php 
    include ('./footer.php')
    ?>
</div>
</body>
</html>