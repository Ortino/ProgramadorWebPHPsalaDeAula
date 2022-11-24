<?php

require_once "../../protect.php";
require_once "../../conexao.php";

$idCliente = isset($_GET['id']) ? $_GET['id'] : 0;

if($idCliente > 0){
   
    $sql_code = "DELETE FROM cliente WHERE idCliente = '$idCliente'";

    $sql_query = $conexao->query($sql_code);
    header("Location: ../../../clientes.php");//FEITO   

} else {
    header("Location: ../../../index.php");} //NAO FEITO
?>