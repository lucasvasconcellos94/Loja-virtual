<?php
$conn = include ('./CrudCliente.php');

if(isset($_POST['criarCliente'])){

    unset ($_POST['criarCliente']);
    
    create ($_POST);

    header('location: ../contaCliente.php');

}
