<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>
</head>


	<!--  -->
	<body>
	<header>
	<?php
	include "html/header.php";
	require_once "src/conexao.php";
	
	$lista = [];
	$sql_code = "SELECT * FROM cliente";
	$sql_query = $conexao->query($sql_code);

	if($sql_query->num_rows> 0){
		$lista = $sql_query->fetch_all(MYSQLI_ASSOC);
		var_dump($lista);
	}
	?>
    </header>	
		<main>
		<h1>Clientes</h1>
		<h3>Lista de cadastrados</h3>
		<table <table class="table table-success table-striped">
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>NASCIMENTO</th>
				<th>ORGÃO</th>
				<th>IDENTIDADE</th>
				<th>CPF</th>
				<th>ESTADO CIVIL</th>
				<th>SEXO</th>
				<th>EMAIL</th>
				<th>ATIVO</th>
				<th>AÇÃO</th>
			</tr>
			<?php foreach($lista as $cliente) : ?>
			<tr>
				<th><?=$cliente["idcliente"]; ?></th>
				<th><?=$cliente["nome"]; ?></th>
				<th><?=$cliente["data_nascimento"]; ?></th>
				<th><?=$cliente["orgao"]; ?></th>
				<th><?=$cliente["rg"]; ?></th>
				<th><?=$cliente["cpf"]; ?></th>
				<th><?=$cliente["estado_civil"]; ?></th>
				<th><?=$cliente["sexo"]; ?></th>
				<th><?=$cliente["email"]; ?></th>
				<th><?=$cliente["ativo"]; ?></th>
				<?php endforeach ?>
			</tr>
			<a href="edicaoCliente.php?id=<?=$cliente[]?>"></a>
			<a href=""></a>
		</table>
			
		</main>
		<?php 
			include "html/rodape.php";
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
	
</body>

</html>