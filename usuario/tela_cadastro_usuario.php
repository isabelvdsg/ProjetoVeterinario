<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tela de Cadastro - Usuário</title>
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_cabecalho.css">
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_cadastro_usuario.css">
	</head>

	<body>
		<div class="container">
			<header>
				<div class="cabecalho">
					<div>
						<a href="/">
							<img src="../usuario/imagens/logo_cav.jpg" title="Logo" alt="Logo"/>
							<h1> Centro de Atendimento Veterinário </h1>
						</a>
					</div>
				</div>	<!---Aqui fecha a div cabeçalho--->
			</header>

			<div class="conteudo">

				<center>
					<form action="tela_conexao_bd.php" method="POST"> 
						<div>
							<h2>Cadastro de Usuário</h2>
							<label class="dados"><b>Nome:</b></label>
							<input type="text" id="nome" name="nome" required/><br>

							<label class="dados"><b>CPF:</b></label>
							<input type="text" id="cpf" name="cpf" maxlength="11" placeholder="11111111111" required/><br>

							<label class="dados"><b>Telefone:</b></label>
							<input type="text" id="telefone" name="telefone" placeholder="(DDD) 9 9999 9999" required/><br>

							<label class="dados"><b>Email:</b></label>
							<input type="email" id="email" name="email" required/><br>

							<label class="dados"><b>Nome de usuário:</b></label>
							<input type="text" id="nome_use" name="nome_use" required/><br>

							<label class="dados"><b>Senha:</b></label>
							<input type="password" id="senha" name="senha" required/><br>

							<br>
						</div>

						<div class="botao">
							<button id="button" type="submit">Cadastrar</button>
						</div> 
					</form>
					<br>
				</center>
			</div> <!---Aqui fecha a div conteúdo--->

			<footer> &copy; CAV -  Centro de Atendimento Veterinário, 2021 </footer>
		</div> <!---Aqui fecha a div container--->
	</body>
</html>