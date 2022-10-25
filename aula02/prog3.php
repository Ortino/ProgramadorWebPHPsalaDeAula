<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p>

    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Estrutura condicional</legend>
        

        Representa um fluxo alternativo 
        na execução do programa.

        Desvio condicional simples (DCS)
        É quando uma pergunta tem
        somente uma única resposta.

        Escreva um programa que leia o preço de um
        produto.

        O programa deverá calcular um desconto de 
        10% somente se o preço do produto for maior
        de 100.
    <?php
        $numero = $_GET["n"];
        $resto = numero % 2;

        //Desvio condicional
        if($resto == 0) {
            echo "O ";
        }
       
        echo "Desconto: R$" . number_format($desconto, 2, ",", ".");
        echo "<br>Valor com desconto:R$ ". number_format($valor - $desconto, 2, ",", ".");
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog3.php">Voltar</a>
    
</div>
</body>
</html>