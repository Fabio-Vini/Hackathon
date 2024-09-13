<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<title>Votação</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">  <!-- versão 3 para produção-->
    <link href="css/personalizado.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/projeto.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<header class="menu-principal">
				<main>
				<div class="header-1">
						
				<div class="logo">
						<img src="./img/1.png"/>
				</div>
				
				<div class="redes-sociais">
						<ul>
								<li><a href=""><img src="./img/rss.png"></a></li>
								<li><a href=""><img src="./img/face.png"></a></li>
								<li><a href=""><img src="./img/tw.png"></a></li>
								<li><a href=""><img src="./img/linkedin.png"></a></li>
						</ul>
				</div>
				</div>
				</main>
				<li class="log_out"><a href="index.php"><img src="./img/sair.png" ></a></li>
		</header>
		
		
		<main class="col-100 menu-urls">
				<div class="header-2">
						<div class="menu">
								<ul>
										<li><a href="cadastrar.php">Cadastrar</a></li>
										<li><a href="locais.php">Locais</a></li>
										<li><a href=" ">Dúvidas</a></li>
										<li><a href=" ">Calendário</a></li>
										<li><a href=" ">Resultados</a></li>
								</ul>
						</div>
						<div class="busca">
								<input placeholder="Pesquise aqui" type="text" />
						</div>
				</div>
		</main>	

		<div class="carrossel">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img class="d-block w-100" src="img/cabecalho.png" alt="Primeiro Slide">
			  </div>
		  </div>
		  </div>
		  </div>

	<div class="container1">
		<h1>Listar</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>"; 
			unset($_SESSION['msg']); 
		}
		?>
		<div class="row">
			<?php

			//Pesquisar os produtos
			$result_produto = "SELECT * FROM produtos";
			$resultado_produto = mysqli_query($con, $result_produto);

			while($row_produto = mysqli_fetch_assoc($resultado_produto)){
				?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<p style="padding-top: 70px;">
								<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
									Votar
								</a>
							</p>
						</div>
						<img src="img/<?php echo $row_produto['imagem']; ?>">	
					</div>	
					<div class="descricao">
						<a href="votar.php?id=<?php echo $row_produto['id']; ?>" class="btn btn-success">
									Votar
						</a>
						<h3><?php echo $row_produto['nome']; ?></h3>
						<p><?php echo "Votos: " . $row_produto['qtd_voto']; ?></p>
					</div>	
				</div><?php	
			}
			?>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		<script src="js/personalizado.js"></script>
		</div>

		</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="img/1.png" alt="">
                </div>
                <div class="col-sm-2">
                    <h5>Git Hub's</h5>
                    <ul>
						<!-- LINKS DO GIT HUB -->
                        <li><a href="https://github.com/Fabio-Vini">https://github.com/Fabio-Vini</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="https://programadorviking.com.br/">Informações da Empresa</a></li>
                        <li><a href="https://programadorviking.com.br/">Contato</a></li>
                        <li><a href="https://programadorviking.com.br/">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="https://programadorviking.com.br/">FAQ</a></li>
                        <li><a href="https://programadorviking.com.br/">Telefones</a></li>
                        <li><a href="https://programadorviking.com.br/">Chat</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
					
                        <a href="https://programadorviking.com.br/" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="https://programadorviking.com.br/">
                        <button type="button" class="btn btn-default">Contato</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright - Programador Viking</p>
        </div>
    </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>