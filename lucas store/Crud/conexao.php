<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'coment';

    $conn = new mysqli ($server, $user, $password, $bd);
    return $conn;
    