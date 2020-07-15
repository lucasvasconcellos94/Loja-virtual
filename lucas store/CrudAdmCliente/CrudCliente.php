<?php

function ler(){
    $conn = include_once (__DIR__.'/conn.php');
    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


function create ($data){
    $conn = include_once (__DIR__.'/conn.php');
    $campo =implode (",",array_keys($data));
    extract($data);

    $senha = password_hash($senha, PASSWORD_DEFAULT); 

    $sql = "INSERT INTO usuarios ($campo) Values ('$email','$senha','$nome','$adm' )";

    $conn ->query($sql);
}

