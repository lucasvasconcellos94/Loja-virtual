<?php

function read(){
    $conn = include_once (__DIR__.'/conexao.php');
    $sql = 'SELECT * FROM shoes';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


function create ($data){
    $conn = include_once (__DIR__.'/conexao.php');
    $campo =implode (",",array_keys($data));
    $valores =implode ("','",$data);

    $sql = "INSERT INTO shoes ($campo) Values ('$valores')";

    $conn ->query($sql);
}


function del ($id){


    $conn = include_once (__DIR__.'/conexao.php');

    $sql ="DELETE FROM shoes Where id = id";
    $conn ->query($sql);
}


?>