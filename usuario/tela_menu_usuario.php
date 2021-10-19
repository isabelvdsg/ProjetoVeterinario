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
                                                        <a href="#janela1" rel="modal">Novo Usuario</a>
                                                        <a href="#janela2" rel="modal">Login</a>
					                <a href="#janela3" rel="modal">Novo Animal</a>
                                                        <a href="#janela4" rel="modal">Atualizar animal</a>
                                                        <a href="#janela5" rel="modal">Excluir animal</a>
                                                        <a href="#janela6" rel="modal">Nova consulta</a>
                                                        <a href="#janela7" rel="modal">Minhas consultas</a>
                                                        <a href="#janela8" rel="modal">Efetuar pagamento</a>
                                                        <a href="#janela9" rel="modal">Agendar vacinação</a>

						</div>

					</form>
					<br> 

				</center>
			</div> <!---Aqui fecha a div conteúdo--->
                        
       <!-- Modal que é aberto ao clicar novo usuário-->

                    <div class="window" id="janela1">
                        <a href="#" class="fechar">X Fechar</a>            
                                <form id="cadUsuario" action="" method="post">
                                        <div>
                                                <h2>Cadastro de Usuário</h2>   
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
                                        </div>
                                                
                                  <div class="botao">
					<button id="button" type="submit">Cadastrar</button>
    				  </div> 
                        </form>
            </div>
            <div id="mascara"></div>
        </div>
                
 
                     <div class="window" id="janela2">
                        <a href="#" class="fechar">X Fechar</a>            
                                <form id="login" action="" method="post">
					        <div>
							<h2>Login:</h2>
                      					<label class="dados"><b>Login:</b></label>
							<input type="text" id="nome_use" name="nome_use" required/><br>
							<label class="dados"><b>Senha:</b></label>
							<input type="password" id="senha" name="senha" required/><br> <br>
						</div>
						<div class="botao">
							<button id="button" type="submit">Entrar</button>
						</div> 
							<br>
						</div>
			
                        </form>
            </div>
            <div id="mascara"></div>
        </div>

                     <div class="window" id="janela3">
                             <a href="#" class="fechar">X Fechar</a>             
                                <form id="cadAnimal" action="" method="post">
                                          <input type="text" id="nome" name="nome" required/><br>
					        <div>
                                                         <h2>Cadastro de Animal</h2>  
                                                        <label class="dados"><b>Id:</b></label>
							<input type="text" id="id" name="id" required/><br
                                                        
							<label class="dados"><b>Nome:</b></label>
							<input type="text" id="nome_animal" name="nome_animal" required/><br
							
							<label class="dados"><b>Raça:</b></label>
							<input type="text" id="raca" name="raca" required/><br>
							
							<label class="dados"><b>Sexo:</b></label>
							<input type="text" id="sexo" name="sexo" required/><br>
						
							<br>
						</div>
                                
                                  <div class="botao">
					<button id="button" type="submit">Cadastrar</button>
    				  </div> 
                        </form>
            </div>
            <div id="mascara"></div>
        </div>

        <div class="window" id="janela4">
                <a href="#" class="fechar">X Fechar</a>
                <h2>Exclusao de usuario</h2>
                <form id="atualizaAnimal" action="" method="post">
                        <label class="dados"><b>Id do Animal:</b></label>
        		<input type="id" id="id" name="id" required/><br>                    
                        <br/><br/>
                   
                    <div class="botao">
			<button id="button" type="submit">Atualizar</button>
    		    </div> 
                </form>
            </div>
            <div id="mascara"></div>
        </div>
                
           <div class="window" id="janela5">
                <a href="#" class="fechar">X Fechar</a>
                <h2>Exclusao de usuario</h2>
                <form id="excluiAnimal" action="" method="post">
                        <label class="dados"><b>Id do Animal:</b></label>
        		<input type="id" id="id" name="id" required/><br>                    
                        <br/><br/>
                   
                    <div class="botao">
			<button id="button" type="submit">Excluir</button>
    		    </div> 
                </form>
            </div>
            <div id="mascara"></div>
        </div>

                <div class="window" id="janela6">
                        <a href="#" class="fechar">X Fechar</a>
                                <h2>Nova Consulta</h2>               
                                <form id="novaConsulta" action="" method="post">
					        <div>
							<h2>Nova Consulta</h2>
                                                        <label class="dados"><b>Codigo:</b></label>
							<input type="text" id="cod" name="cod" required/><br
                                                                                                                          
							<label class="dados"><b>Data:</b></label>
							<input type="text" id="data" name="data" required/><br>
                                                                                                              
							<label class="dados"><b>Nome do Animal:</b></label>
							<input type="text" id="nome_animal" name="nome_animal" required/><br
							
							<label class="dados"><b>Raça:</b></label>
							<input type="text" id="raca" name="raca" required/><br>
						
							<br>
						</div>
						<div class="botao">
							<button id="button" type="submit">OK</button>
						</div> 
                                
                           
                        </form>
            </div>

                <div class="window" id="janela7">
                         <table  border="1px" cellpadding="5px" cellspacing="0">
                         <tr> <!-- <tr> -> table row -->
                    <th>Codigo</th> <!-- <td> -> table data -->
                    <th>Data</th>
                    <th>Nome do animal</th> <!-- <th> -> table header -->
                    <th>Raca</th>
                </tr>
    
      <?php
                include 'conexao.php';
                // Select que traz todos os usuários cadastrados no banco de dados
                $select = "SELECT * FROM CONSULTA";
                $result = mysqli_query($connect, $select); //resultado do select

//Enquanto existir usuários no banco ele insere uma nova linha e exibe os dados
                while ($row = mysqli_fetch_array($result)) {
                    $cod = $row['consulta_cod'];
                    $data = $row['data'];
                    $nome_animal = $row['nome_animal'];
                    $raca = $row['raca'];
                    echo "   
                        <tr>
                            <td>$cod</td>
                            <td>$data</td>
                            <td>$nome_animal</td>
                            <td>$raca</td>
                        </tr>";
                }
                ?>
            </table>
                        
 <script type="text/javascript" language="javascript">
         
    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#cadastrar').click(function() {

            var dados = $('#cadUsuario').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'cadastrar.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });
            
        $('#cadastrar').click(function() {

            var dados = $('#cadAnimal').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'cadastrar_animal.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });
            
        //funcionalidade de atualizacao
      $('#atualizar').click(function(id) {

            var dados = $('#atualizaAnimal').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'atualizar.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });
            
      //funcionalidade de exclusao
      $('#excluir').click(function() {

            var dados = $('#excluiAnimal').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'exclusao.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });
            
            
        $('#OK').click(function() {

            var dados = $('#novaConsulta').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'nova_consulta.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });


//// aqui é o script para abrir o nosso pequeno modal

        $("a[rel=modal]").click(function(ev) {
            ev.preventDefault();

            var id = $(this).attr("href"); //id = #janela1

            var alturaTela = $(document).height();
            var larguraTela = $(window).width();

            //colocando o fundo preto
            $('#mascara').css({'width': larguraTela, 'height': alturaTela});
            $('#mascara').fadeIn(1000);
            $('#mascara').fadeTo("slow", 0.8);

            var left = ($(window).width() / 2) - ($(id).width() / 2);
            var top = ($(window).height() / 2) - ($(id).height() / 2);

            $(id).css({'top': top, 'left': left});
            $(id).show();
        });

        $("#mascara").click(function() {
            $(this).hide();
            $(".window").hide();
        });

        $('.fechar').click(function(ev) {
            ev.preventDefault();
            $("#mascara").hide();
            $(".window").hide();
        }
       );
      
    });
</script>

			<footer> &copy; CAV -  Centro de Atendimento Veterinário, 2021 </footer>
		</div> <!---Aqui fecha a div container--->
	</body>
</html>
