<?php

$conn = include ('./crud.php');

if(isset($_POST['enviar'])){

    unset ($_POST['enviar']);
    
    create ($_POST);

    header('location: ../chat.php');

}


if(isset($_POST['excluir'])){

    del ($_POST['id']);

    header('location: ../chat.php');

}
