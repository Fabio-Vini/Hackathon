<?php
include("conexao.php");
if($_POST){
	Login($_POST['user'],$_POST['senha']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	<meta charset="utf-8">
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
	 <style>
		*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: url(img/voto.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h2{
    font-size: 30px;
    color: rgb(255, 145, 0);
    text-align: center;
    margin: 20px;
}

h4{
    color: orange;
}

a{
    text-decoration: none;
    color: white;
    transition: .25s ease-in-out;
}

a:hover{
    color: white;
}

.container{
    width: 550px;
    background: rgba(0, 0, 0, 0.527);
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
}

input{
    width: 100%;
    height: 46px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid rgb(165, 71, 42);
    color: white;
    transition: 25s ease-in-out;
}

.input-field{
    position: relative;
    margin-bottom: 20px;
}

.input:focus {
    border-bottom: 2px solid #fff;
    box-shadow: 0 1px 0 0 #fff;
}

input:focus + label {
    transform: translateY(-14px) scale(.8);
    color: #fff;
    font-weight: bold;
}

input::not(:placeholder-shown) + label {
    transform: translateY(-14px) scale(.8);
    color: #fff;
    font-weight: bold;
}

input::not(:placeholder-shown){
    border-bottom: 2px solid #fff;
    box-shadow: 0 1px 0 0 #fff;
}

label{
    position: absolute;
    top: 0;
    left: 0;
    color: white;
    transform: translateY(18px);
    transition: 25s ease-in-out;
}

::placeholder {
    color: rgba(128, 128, 128, 0.863);
}

button {
    padding: 15px 50px;
    margin: 20px;
    background: rgb(255, 145, 0);
    border: 2px solid white;
    color: white;
    text-transform: uppercase;
    border-radius: 20px;
    cursor: pointer;
}

button:hover{
    background-color: #15a659;
}
.center{
    text-align: center;
}

 p:hover{
    color: rgb(255, 145, 0);
}
	</style> 
</head>
<body>
<div class="container">
        <h2>Login</h2>

        <form action="" method="post">

           <!-- <div class="input-field">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome: ">
                <label for="NOME"> </label>
            </div>-->
        
            <div class="input-field">
                <h4>Email:</h4>
                <input type="text" name="user" placeholder="Digite seu email: ">
                <label for="user"> </label>
            </div>

            <div class="input-field">
                <h4>Senha:</h4>
                <input type="password" name="senha" placeholder="Digite sua senha:">
                   <label for="senha"></label>
            </div>

            <div class="center">
                <button>Entrar</button>
            </div>

        </form>

             <div class="links">
                 <a href="#"><p>Esqueceu a sua senha?</p></a>
                 <a href="cadastrar.php"><p>Cadastrar novo usuário</p></a>
             </div>
             </div>
</body>
</html>