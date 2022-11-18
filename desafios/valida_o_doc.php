<?php

    if(isset($_POST['br_enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        $telefone = $_POST['telefone'];
        $peso = $_POST['peso'];

        // array de erros
        $erros =[];

        // santilizar= limpezar dos dados
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);   //specaial chars = os botões especiais não vai aparecer     
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
        $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_ADD_SLASHES);             
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);           
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);        
        $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_ALLOW_FRACTION); //2 permitir fração
        
        echo "<p>Nome : $nome </p>";
        echo "<p>E - mail : $email </p>";
        echo "<p>Sexo : $sexo </p>";
        echo "<p>idade : $idade </p>";
        echo "<p>telefone : $telefone </p>";
        echo "<p>peso : $peso </p>";
               
    }
    

?>
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
        <label>Sexo</label>
				<select class="form-select" id="estadoc" name="estado_civil" required>
					<option selected disabled value="">Selecione</option>
					<option value="Masculuno">Masculino</option>
					<option value="Feminino">Feminino</option>
					</select><br>
        <label>
            Idade
            <input type="number" min="1" max="120" step="1"  name="idade"> anos 
            <!-- step = de quanto vai aumentar -->
        </label><br>
        <label>
            Telefone
            <input type="number" name="tel">
        </label><br>
            Peso
            <input type="number" min="2.4"  max="200.0" step="0.1" name="peso"> Kilos
        </label><br>
        <button type="submit" name=bt_enviar>Enviar</button>
    </form>
<body>
    
</body>
</html>