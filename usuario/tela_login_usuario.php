<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tela de Login - Usuário</title>
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_cabecalho.css">
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_login_usuario.css">
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
					<form> 
							
						<div>
							<label class="dados"><b>Login:</b></label>
							<input type="text" id="nome_use" name="nome_use" required/><br>

							<label class="dados"><b>Senha:</b></label>
							<input type="password" id="senha" name="senha" required/><br> <br>

						</div>

						<div class="botao">
							<button id="button" type="submit">Entrar</button>
						</div> 
					</form>
					<br> 

					<div class="cadastro">
						Ainda não se cadastrou ? 
						<a href="tela_cadastro_usuario.php">  Clique aqui e faça seu cadastro. </a>		
					</div>
				</center>
			</div> <!---Aqui fecha a div conteúdo--->

			<footer> &copy; CAV -  Centro de Atendimento Veterinário, 2021 </footer>
		</div> <!---Aqui fecha a div container--->
	</body>
</html>