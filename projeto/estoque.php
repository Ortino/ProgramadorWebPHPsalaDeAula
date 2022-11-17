<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<!--  -->
	<body>
		<?php 
		include "html/header.php";
		require_once "src/conexao.php";

		$id= isset($_GET["id"]) ? $_GET["id"] : 0;

		$sql_code = "SELECT * FROM produtos LEFT JOIN  estoque ON idproduto = id_produto WHERE idproduto = '$id'";
		$sql_query = 


		?>
		<main>
			<h1>Estoque</h1>
			<h3>Lista Cadastros</h3>
			<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>FOTO</th>
				<th>NOME</th>
				<th>TIPO</th>
				<th>CATEGORIA</th>
				<th>FABRICANTE</th>
				<th></th>
				<th>REGISTRO</th>
				<th>DATA</th>
				<th>VALOR COMPRA</th>
				<th>VALOR VENDA</th>
			</tr>
			<?php
			while($produto =$sql_query->fetch_assoc()){
				
			?>
			<tr>
			<th><?= $produto['idproduto']?></th>
			<th><img height="50" src="<?= $produto['foto']?>"></th>
			<th><?= $produto['nome']?></th>
			<th><?= $produto['tipo']?></th>
			<th><?= $produto['categoria']?></th>
			<th><?= $produto['fabricante']?></th>
			<th><?= $produto['qtd']?></th>
			<th><?= $produto['registro']?></th>
			<th><?= $produto['data-registro']?></th>
			<th><?= $produto['valor_compra']?></th>
			<th><?= $produto['valor_venda']?></th>
			
			<a href="estoque.php?id=<?=$produto['idproduto']; ?>" <[ESTOQUE]</a>
			<a href="mais_detalhes?id=<?=$produto['idproduto']; ?>" <[DETALHES]</a>

			</tr>
			<?php
			}
			?>
			</table>
			<div class="table-responsive">
			<div class="container-fluid">
            <h3>Registro de Produto</h3>
            <form class="row g-3 container-fluid" action="" method="post">

                <input type="text" class="form-control" id="id_produto" name="id_produto" value="<?= $produto['idproduto'] ?>" hidden>

                <div class="col-md-2 col-sm-12">
                    <label for="qtdid" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="qtdid" name="qtd" value="" required>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="regid" class="form-label">Registro</label>
                    <select class="form-select" id="regid" name="registro" required>
                        <option selected disabled value="">Selecione</option>
                        <option value="ENTRADA">ENTRADA</option>
                        <option value="SAÍDA">SAÍDA</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="dtid" class="form-label">Data</label>
                    <input type="date" class="form-control" id="dtid" name="data_registro" value="" required>
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="valorid" class="form-label">Valor Compara Unitário</label>
                    <input type="number" class="form-control" id="valorid" name="valor_compra" value="" required tern="[0-9] ([,\.][0-9] )?" min="0" step="any">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="valorid" class="form-label">Valor Venda Unitário</label>
                    <input type="number" class="form-control" id="valorid" name="valor_venda" value="" required tern="[0-9] ([,\.][0-9] )?" min="0" step="any">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
                    <button class="btn btn-primary" type="submit" id="btn-on">Cadastrar</button>
                </div>
            </form>
        </div>
		</main>
<?php

	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>