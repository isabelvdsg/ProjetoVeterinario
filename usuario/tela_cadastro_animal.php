<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tela de Cadastro - Animal</title>
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_cabecalho.css">
		<link rel="stylesheet" type="text/css" href="../usuario/estilos_usuario/estilo_cadastro_animal.css">
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
					<form action="tela_conexao_bd_animal.php" method="POST"> 
						<div>
							<h2>Cadastro de Animal</h2>
							<label class="dados"><b>Nome:</b></label>
							<input type="text" id="nome" name="nome" required/><br
							
							<label class="dados"><b>Raça:</b></label>
							<input type="text" id="raca" name="raca" required/><br>
							
							<label class="dados"><b>Sexo:</b></label>
							<input type="text" id="sexo_animal" name="sexo_animal" required/><br>
						
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
