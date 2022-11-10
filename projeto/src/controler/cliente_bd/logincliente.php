<?php
    require_once "conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
        $email = $conexao->real_escape_string($$_POST["email"]);
        $senha = $conexao->real_escape_string($$_POST["senha"]);
        if(strlen($_POST["email"]) == 0){
            echo "Preencha seu e-mail!";
        } else if(strlen($_POST["senha"]) == 0){
            echo "Preencha a sua senha!";
        } else {
            //real_escape_string() = função que retorna uma string sem caractere especiais...
            $email = $conexao->real_escape_string($_POST["email"]);
            $senha = $conexao->real_escape_string($_POST["senha"]);

            $sql_code = "select *  from usuario where login = '$email' and senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
            
            //Quantidade de linhas retornado;
            $qtd = $sql_query->num_rows; //Atributo num_rows = número de linhas
            if($qtd == 1){
            
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                // $_SESSION['user'] = $usuario;
                $_SESSION['id'] = $usuario["id"];
                $_SESSION['nome'] = $usuario["nome"];

                //Redirecionando para a página
                header("Location: ../../../index.php");
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }

    }
?>