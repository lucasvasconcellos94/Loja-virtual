<?php

    include_once (__DIR__ .'/CrudCliente.php');


    $registro = ler();

    $html = ' ';
    foreach ($registro as $registros){
        $html .= "<tr>
                    <td>{$registros['email']}</td>
                    <td>{$registros['senha']}</td>
                    <td>{$registros['nome']}</td>
                    <td>{$registros['adm']}</td>
                    <td>{$registros['id']}</td>
                 </tr>
        ";
    }

    echo $html;


?>