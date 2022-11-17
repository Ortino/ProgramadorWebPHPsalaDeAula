<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando documento</title>
</head>
    <form action="valida_o_doc.php" method="post">
        <label>
            Nome
            <input type="text" nome="nome" autofocus>
        </label><br>
        <label> 
            E-mail
            <input type="email" name="email">
        </label><br>
        <label>
            Idade
            <input type="number" min="1" max="120" step="1"  name="idade"> anos 
            <!-- step = de quanto vai aumentar -->
        </label><br>
            Peso
            <input type="number" min="2.4"  max="200.0" step="0.1" name="peso"> Kilos
        </label><br>
        <button type="submit" name=bt_enviar>Enviar</button>
    </form>
<body>
    
</body>
</html>