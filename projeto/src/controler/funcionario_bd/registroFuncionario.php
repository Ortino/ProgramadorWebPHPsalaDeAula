<?php 
        include "../../../html/header.php"; 
        require_once "../../src/conexao.php";
        require_once ""

        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "";
        $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
        $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
        $ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

        if(isset($_POST["nome"]) && isset($_POST["senha2"])){

            // $cliente = new Cliente(
            //     $idCliente,
            //     $nome,
            //     $dataNascimento,
            //     $orgao,
            //     $rg,
            //     $cpf,
            //     $estadoCivil,
            //     $sexo,
            //     $email,
            //     $senha,
            //     $ativo
            // );

            $sql_code = "INSERT INTO funcionario  VALUES (NULL, '$nome', '$dataNascimento', '$cpf', '$estadoCivil', '$tipo', '$celular', '$email', '$senha' true)";
			
            $sql_query = @$conexao->query($sql_code);
			// var_dump($sql_query);

			// if($conexao->query($sql_code)){
			if($sql_query){
				$sql_code = "SELECT idcliente, nome FROM funcionario WHERE cpf = '$cpf'";
				$sql_query = $conexao->query($sql_code);

				$funcionario = $sql_query->fetch_assoc();

			    $id = $cliente['idfuncionario'];
                $_SESSION["nome"] = $cliente['nome'];
                
                header("location: ../../../cadastrodoFuncionario.php? gravado=$id");
                die("Gravado!");

            }else {
                header("location: ../../../cadastrodoFuncionario.php?gravado=0");
            }
        }

        header("location: ../../../cadastrodoFuncionario.php");

        ?>

