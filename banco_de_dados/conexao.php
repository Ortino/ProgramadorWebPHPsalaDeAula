<?php

$hostname = "localhost";
$banco_de_dados = "banco_php";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario,$senha , $banco_de_dados);
if($conexao->connect_errno){ //error +number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . 
    $conexao->connect_errno;
} else {
    // echo "Conectando ao Banco. <br>";

} 


?>