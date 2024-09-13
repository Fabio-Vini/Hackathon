<?php
include("conexao.php");
if($_POST){
	Login($_POST['rm'],$_POST['senha']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Login-Communitec</title>
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
    background: url(img/CPS3.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: 30% 45%;
    width: 100%;
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

h6{
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
    width: 500px;
    height: 660px;
    background: rgba(0, 0, 0, 0.527);
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
    margin-top: -2%;
}

.logo img{
    width: 200px;
    height: 200px;
    position: relative;
    left: 29%;
}

.titulo {
    font-size: 30px;
    color: #fff;
    font-family: ;
    text-align: center;
    position: relative;
    top: -6%;
}

input{
    width: 100%;
    height: 46px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid #fff;
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
    margin-left: 5%;
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
    color: #fff;  
}

button {
    padding: 15px 50px;
    margin: 20px;
    background: transparent;
    border: 2px solid white;
    color: white;
    text-transform: uppercase;
    border-radius: 15px;
    cursor: pointer;
    transition: ease-in 0.3s;
}

button:hover{
    background-color: #106FDB;
}
.center{
    text-align: center;
}

 p:hover{
    color: #106FDB;
}

.links a {
    display: inline-block;
    margin-left: 11%;
}


@media screen and (max-width: 320px) {
    h2{
    font-size: 50px;
    color: rgb(255, 145, 0);
    text-align: center;
    margin: 20px;
}

h6{
    font-size: 30px;
    color: orange;
}

a{
    font-size: 22px;
    text-decoration: none;
    color: white;
    transition: .25s ease-in-out;
}

.container{
    width: 700px;
    height: 960px;
    background: rgba(0, 0, 0, 0.527);
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
}

.logo img{
    width: 300px;
    height: 300px;
    position: relative;
    left: 26%;
}

.titulo {
    font-size: 30px;
    color: #fff;
    text-align: center;
    position: relative;
    top: -6%;
}

input{
    width: 100%;
    height: 46px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid #fff;
    color: white;
    transition: 25s ease-in-out;
}

.input-field{
    position: relative;
    margin-bottom: 20px;
}

input:focus + label {
    transform: translateY(-14px) scale(.8);
    color: #fff;
    font-weight: bold;
    margin-left: 5%;
}

::placeholder {
    font-size: 25px;
    color: #fff;  
}

button {
    width: 300px;
    height: 80px;
    padding: 15px 50px;
    margin: 20px;
    background: transparent;
    border: 2px solid white;
    color: white;
    text-transform: uppercase;
    border-radius: 15px;
    cursor: pointer;
    transition: ease-in 0.3s;
    font-size: 25px;
}


.center{
    text-align: center;
}

.links a {
    display: inline-block;
    margin-left: 10%;
}

}
	</style> 
</head>
<body>
<div class="container">
        <div class="logo">
            <img src="img/communitec.png" alt="">
        </div>

        <h1 class="titulo">Área de acesso</h1>

        <form action="" method="post">

           <!-- <div class="input-field">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome: ">
                <label for="NOME"> </label>
            </div>-->
        
            <div class="input-field">
                <h6>RM</h6>
                <input class="rm" type="number" name="rm" placeholder="Digite seu RM: ">
                <label for="rm"> </label>
            </div>

            <div class="input-field">
                <h6>SENHA</h6>
                <input class="senha" type="password" name="senha" placeholder="Digite sua Senha:">
                   <label for="senha"></label>
            </div>

            <div class="links">
                 <a href="#"><p>Esqueceu a sua senha?</p></a>
                 <a class="cad" href="cadastrar.php"><p>Cadastrar novo usuário</p></a>
             </div>

            <div class="center">
                <button>Entrar</button>
            </div>

        </form>
             </div>
</body>
</html>
