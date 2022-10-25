<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
        <p>
            Estrutura condicional

            Representa um fluxo alternativo 
            na execução do programa.

            Desvio condicional simples (DCS)
            É quando uma pergunta tem
            somente uma unica resposta.

            Escreva um programa que leia o preço de um
            produto.

            O programa deverá calcular um desconto de 
            10% somente se o preco do produto for maior
            de 100.
        </p>
        <hr/>
        <h2 style="text-align: center">Informações dos Produtos</h2>
        <fieldset>
            <legend>Dados do Produto</legend>
            <form action="prog02r.php" method="get">
                Valor:<br/>
                <input type="text" name="valor" placeholder="Digite o Valor do Produto"/>
                <br/>
                Quantidade:<br/>
                <input type="number" name="qtd" min="1" placeholder="Digite a Quantidade"/>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>
        </fieldset>
    </div>
</body>
</html>