<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dt = 'etecmcm';

    $conexao = new mysqli(
        $host,
        $user,
        $password,
        $dt
    );

    if($conexao->connect_error){
        die('Fail in conect' + $conexao->connect_error);
    }
    // else{
    //     echo "CONECTADO COM SUCESSO";
    // }
?>