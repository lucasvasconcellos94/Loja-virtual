<?php
    $server = '127.0.0.1';
    $user = 'root';
    $password = '';
    $bd = 'conta';

    $conn = new mysqli ($server, $user, $password, $bd);
    return $conn;
    