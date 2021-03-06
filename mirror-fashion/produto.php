<?php
	$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
	$dados = mysqli_query($conexao, "select * from produtos where id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title><?= $produto["nome"] ?></title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<link rel="stylesheet" href="css/produto.css">
	</head>
	<body>
		<?php include("_cabecalho.php") ?>
		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1><?= $produto["nome"] ?></h1>
					<h2>por apenas <?= $produto["preco"] ?></h2>
					<form action="checkout.php" method="POST">
						<input type="hidden" name="id" value="<?= $produto['id'] ?>">
						<input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
						<input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
						<fieldset class="cores">
							<legend>Escolha a cor:</legend>

							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde">
								<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="verde">
							</label>

							<input type="radio" name="cor" value="rosa" id="rosa" checked>
							<label for="rosa">
								<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
							</label>

							<input type="radio" name="cor" value="azul" id="azul" checked>
							<label for="azul">
								<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="azul">
							</label>
				
						</fieldset>
						<fieldset class="tamanhos">
							<legend>Escolha o tamanho:</legend>
							<input type="range" min="36" max="46" step="2" name="tamanho" id="tamanho">
							<output for="tamanho" name="valortamanho">42</output>
						</fieldset>
						<input type="submit" class="comprar" value="Comprar">
					</form>
				</div>
				<div class="detalhes">
					<h2>Detalhes do produto</h2>
					<p><?= $produto["descricao"] ?></p>
					<table>
						<thead>
							<tr>
								<th>Característica</th>
								<th>Detalhe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Cardigã 7845</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Algodão e poliester</td>
							</tr>
							<tr>
								<td>Cores</td>
								<td>Azul, Rosa, Verde</td>
							</tr>
							<tr>
								<td>Lavagem</td>
								<td>Lavar a mão</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php include("_rodape.php") ?>

		<script src="js/jquery.js"></script>
		<script>
			$('[name=tamanho]').on('input', function(){
				$('[name=valortamanho]').val(this.value);
			});
		</script>
	</body>
</html>
