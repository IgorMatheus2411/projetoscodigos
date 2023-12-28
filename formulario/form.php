<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário 1BIM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" defer></script>
	<!-- Adiciona os arquivos de estilo do Bootstrap 5 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
	<!-- Adiciona o ícone do Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Adiciona o arquivo de estilo customizado -->
	<link rel="stylesheet" href="https://igormatheus2411.github.io/projetoscodigos/style.css">
</head>
<body>
	<h2 class="titulo">Cadastrar-se</h2>
	<div class="container mt-5" >
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10">
				<form action="dados.php" method="post" class="needs-validation" novalidate>

					<div class="form-control-sm">
						
						<div class="form-floating mb-3 nome">
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
							<label for="nome">Nome completo</label>
						</div>
						
						<div class="form-floating mb-3 telefone">
							<input type="tel" class="form-control " id="telefone" name="telefone" placeholder="Digite seu telefone" pattern="({2}) [0-9]{5}-[0-9]{4}" required>
							<label for="telefone">Telefone</label>
						</div>
                 
						<div class="form-floating mb-3 cpf">
							<input type="text" class="form-control" id="ender" name="endereco" placeholder="Digite seu endereço" required>
							<label for="endereco">Endereço</label>
						</div>

						

						<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
						<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->
						<!-- Adc o código que aplica a máscara no campo de CPF -->
						
                		<!-- Adc os arquivos de script do Bootstrap  -->
                		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

						<div class="form-floating mb-3 email">
							<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
							<label for="email">E-mail</label>
						</div>

						<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

						<div class="form-floating mb-3 data">
							<input type="date" class="form-control" id="data" name="data" step="0.01" required>
							<label for="data">Data de nascimento</label>
						</div>

						<div class="form-floating mb-3 altura">
							<input type="number" class="form-control" id="altu" name="altura" placeholder="Digite sua altura"  step="0.01" required>
							<label for="altu">Altura</label>
						</div>

						<div class="form-floating mb-3">
							<select for="tp" class="form-select form-control selecao" id="tp" name="escolha" required>
								<option value="" class="invalid-feedback">Selecione uma opção</option>
								<option value="aluno">Aluno</option>
								<option value="professor">Professor</option>
								<option value="funcionario">Funcionário</option>
							</select>
						</div>
					
						<div class="periodo periodo2" >
							<input type="radio" id="m" name="periodo" value="manha" checked>
							<label for="m">Período da manhã</label>
						</div>

						<div class="periodo">
							<input type="radio" id="t" name="periodo" value="tarde">
							<label for="t">Período da Tarde</label>
						</div>

						

						<div class="form-floating mb-3 obs">
							<textarea name="obs" class="form-control" id="ob" rows="10" cols="20"></textarea>
							<label for="ob">Observação</label>
						</div>


						<div class="mb-3">
							<button type="submit" class="btn btn-primary me-3">Cadastrar</button>
							<button type="reset" class="btn btn-secondary">Limpar</button>
						</div>
                    </div>
                </form>
           </div>
        </div>
	</div>
	<script src="index.js"></script>
</body>
</html>
