<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Checkout Mirror Fashion</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">				
							<h2 class="panel-title">Sua compra:</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" 
								alt="<?= $_POST['nome'] ?>" class="img-thumbnail img-responsive" >
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST["nome"] ?><dd>
								<dt>Cor</dt>
								<dd><?= $_POST["cor"] ?><dd>
								<dt>Tamanho</dt>
								<dd><?= $_POST["tamanho"] ?><dd>
								<dt>Preço</dt>
								<dd><?= $_POST["preco"] ?><dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<form>
						<div class="row">
							<fieldset class="col-md-6">
								<legend>Dados pessoais</legend>
								<div class="form-group">
									<label for="nome">Nome completo</label>
									<input type="text" class="form-control" id="nome" name="nome"
										placeholder="exemplo@exemplo.com">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="cpf">CPF</label>
									<input type="text" class="form-control" id="cpf" name="cpf">
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="sim" name="spam" checked>
										Quero receber spam da Mirror Fashion
									<label>
								</div>
							</fieldset>
							<fieldset class="col-md-6">
								<legend>Cartão de crédito</legend>
								<div class="form-group">
									<label for="numero-cartao">Numero - CVV</label>
									<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
								</div>
								<div class="form-group">
									<label for="validade-cartao">Validade</label>
									<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
								</div>
							</fieldset>
						</div>
						<div class="row">
							<fieldset class="col-md-6">
								<legend>Endereço de entrega</legend>
								<div class="form-group">
									<label for="rua-entrega">Rua, número e complemento</label>
									<input checkout.php?nome=&email=&cpf=&spam=sim&numero-cartao=&validade-cartao=&rua-entrega=&cep-entrega=&cidade-entrega=&estado-entrega=SP&rua-cobranca=&cep-cobranca=&cidade-cobranca=&estado-cobranca=BAtype="text" class="form-control" id="rua-entrega" name="rua-entrega">
								</div>
								<div class="form-group">
									<label for="cep-entrega">CEP</label>
									<input type="text" class="form-control" id="cep-entrega" name="cep-entrega">
								</div>
								<div class="form-group">
									<label for="cidade-entrega">Cidade</label>
									<input type="text" class="form-control" id="cidade-entrega" name="cidade-entrega">
								</div>
								<div class="form-group">
									<label for="estado-entrega">Estado</label>
									<select name="estado-entrega" id="estado-entrega" class="form-control">
										<option value="SP">São Paulo</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="BA">Bahia</option>
									</select>
								</div>
							</fieldset>
							<fieldset class="col-md-6">
								<legend>Endereço de cobrança</legend>
								<div class="form-group">
									<label for="rua-cobranca">Rua, número e complemento</label>
									<input type="text" class="form-control" id="rua-cobranca" name="rua-cobranca">
								</div>
								<div class="form-group">
									<label for="cep-cobranca">CEP</label>
									<input type="text" class="form-control" id="cep-cobranca" name="cep-cobranca">
								</div>
								<div class="form-group">
									<label for="cidade-cobranca">Cidade</label>
									<input type="text" class="form-control" id="cidade-cobranca" name="cidade-cobranca">
								</div>
								<div class="form-group">
									<label for="estado-cobranca">Estado</label>
									<select name="estado-cobranca" id="estado-cobranca" class="form-control">
										<option value="SP">São Paulo</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="BA" selected>Bahia</option>
									</select>
								</div>
							</fieldset>
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							Confirmar Pedido
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
