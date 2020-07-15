<?php
//Conexão
include_once('php_action/db_connect.php');

//Select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM produto WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="image/favicon.jpg">

  

    <title>ShoesGO</title>
  </head>
<body>
  <div class="container-fluid">
  
  <?php 
    include ('./navLog.php');

    ?>
<div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Editar Produto</h3>
        <form action="php_action/updateproduto.php" method="POST">
        <div class="input-field col s12">
               <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <label for="ID">ID</label>
                <br>
                <p><?php echo $dados['id']; ?></p>
            </div>

            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
                <label for="nome">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="valor" id="valor" value="<?php echo $dados['valor']; ?>">
                <label for="nome">Valor</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="marca" id="marca" value="<?php echo $dados['marca']; ?>">
                <label for="nome">Marca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="url_img" id="url_img" value="<?php echo $dados['url_img']; ?>">
                <label for="nome">URL da Imagem</label>
            </div>
<br>
            <button type="submit" name="btn-editar-produto" class="btn btn-success">Atualizar</button>
           
        </form>
    </div>
</div>

<br>

<?php 
include ('./footer.php')
?>
</div>
</body>
</html>