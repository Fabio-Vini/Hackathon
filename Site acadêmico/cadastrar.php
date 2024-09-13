<?php
include('conexao.php');
if($_POST){
	CriarConta($_POST['nome'], $_POST['email'],$_POST['datanasc'],$_POST['cargo'],$_POST['rm'],$_POST['senha']);
}
?>

<DOCTYPE>
<html>
<head>
<meta charset="utf-8">
 

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
    width: 490px;
    height: 620px;
    background: rgba(0, 0, 0, 0.527);
    box-shadow: 1px 2px 10px #000, 3px 6px 20px #000;
    padding: 50px 20px;
}

.logo img{
    width: 200px;
    height: 200px;
    position: relative;
    left: 26%;
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
    display: flex;
}

 p:hover{
    color: #106FDB;
}

@media screen and (max-width: 420px) {
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
        <h2>Faça seu cadastro</h2>

        <form action="" method="post">

            <div class="input-field">
                <h6>Nome</h6>
                <input type="text" name="nome" placeholder="Digite seu nome: ">
                <label for="NOME"> </label>
            </div>
        
            <div class="input-field">
                <h6>EMAIL</h6>
                <input type="email" name="email" placeholder="Digite seu email: ">
                <label for="email"> </label>
            </div>

            <div class="input-field">
                <h6>CARGO</h6>
                <input type="text" name="cargo" placeholder="Digite seu cargo:">
                <label for="cargo"> </label>
            </div>

            

            <div class="input-field">
                <h6>RM</h6>
                <input type="number" name="rm" placeholder="Digite seu rm:">
                <label for="rm"> </label>
            </div>

            <div class="input-field">
                <h6>SENHA</h6>
                <input type="password" name="senha" placeholder="Digite sua senha:">
                   <label for="senha"></label>
            </div>

            <div class="center">
                <button>CADASTRAR</button>
                <button><a href="index.php"></a>Login</button>
            </div>

        </form>
        </div>
</body>
</html>