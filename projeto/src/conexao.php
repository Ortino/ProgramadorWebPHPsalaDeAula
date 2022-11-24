<?php

$hostname = "localhost";
$banco_de_dados = "id19904063_projeto_bd";
$usuario = "id19904063_desenvolvedor";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}