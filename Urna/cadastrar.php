<?php
include('conexao.php');
if($_POST){
	CriarConta($_POST['nome'], $_POST['sobrenome'],$_POST['email'],$_POST['escolaridade'],$_POST['datanasc'],$_POST['telefone'],$_POST['estado'],$_POST['senha']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Checkout example · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/cadastrar.css">

</head>
<body class="bg-light">

<div class="container">

 
<main>
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/perfil.png" alt="" width="72" height="57">
    <h2>PERFIL</h2>
   
  </div>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Dados Pessoais</h4>
      <form action="" method="post">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Nome<span class="text-muted"> (Obrigatório*)</span></label>
            <input type="text" class="form-control" name="nome" placeholder="Digite aqui..." value="" required="">
            <div class="invalid-feedback">
              O primeiro nome válido é obrigatório.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Sobrenome<span class="text-muted"> (Obrigatório*)</span></label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Digite aqui..." value=" " required="">
            <div class="invalid-feedback">
              O sobrenome válido é obrigatório.
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted"> (Obrigatório*)</span></label>
            <input type="email" class="form-control"  name="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Insira um endereço de e-mail válido para atualizações de envio.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Escolaridade</label>
            <select class="form-select" name="escolaridade" required="">
              <option value="">Escolher...</option>
               <option value="">Faculdade</option>
               <option value="">Pós-Graduação</option>
               <option value="">Mestrado</option>
               <option value="">Doutorado</option>
               <option value="">Cursos Técnicos</option>
               <option value="">Ensino Fundamental</option>
               <option value="">Ensino Médio</option>
            </select>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Data de nascimento<span class="text-muted"> (Obrigatório*)</span></label>
            <input type="date" class="form-control"  name="datanasc" placeholder="Digite sua data..." value="" required="">
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Telefone<span class="text-muted"> (Obrigatório*)</span></label>
            <input type="tel" class="form-control" name="telefone" placeholder="Exemplo(11) 99240-9087" value="" required="">
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Estado</label>
            <select class="form-select" name="estado" required="">
              <option value="">Escolher...</option>
               <option value="">AC</option>
               <option value="">AL</option>
               <option value="">AP</option>
               <option value="">AM</option>
               <option value="">BA</option>
               <option value="">CE</option>
               <option value="">ES</option>
               <option value="">GO</option>
               <option value="">MA</option>
               <option value="">MT</option>
               <option value="">MS</option>
               <option value="">MG</option>
               <option value="">PA</option>
               <option value="">PB</option>
               <option value="">PR</option>
               <option value="">PE</option>
               <option value="">PI</option>
               <option value="">RJ</option>
               <option value="">RN</option>
               <option value="">RS</option>
               <option value="">RO</option>
               <option value="">RR</option>
               <option value="">SC</option>
               <option value="">SP</option>
               <option value="">SE</option>
               <option value="">TO</option>
            </select>
          </div>

          <div class="col-12">
            <label for="senha" class="form-label">Senha <span class="text-muted"> (Obrigatório*)</span></label>
            <input type="password" class="form-control"  name="senha" placeholder="************">
            <div class="invalid-feedback">
              Insira um endereço de e-mail válido para atualizações de envio.
            </div>
          </div>

         <div class="center">
                <button>Cadastrar</button>
                <button><a href="index.php"></a>Já tem login? Entre</button>
            </div>

            
        </form>
        
  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

  <!-- <div class="container">
        <h2>Crie sua conta:</h2>

        <form action="" method="post">

            <div class="input-field">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome: ">
                <label for="nome"> </label>
            </div>

            <div class="input-field">
                <h4>Sobrenome:</h4>
                <input type="text" name="sobrenome" placeholder="Digite seu nome: ">
                <label for="nome"> </label>
            </div>


      <div class="input-field">
                <h4>Email:</h4>
                <input type="text" name="email" placeholder="Digite seu email: ">
                <label for="email"> </label>
            </div>

            <div class="input-field">
                <h4>Escolaridade</h4>
            
            <select class="form-select" name="escolaridade" id="escolaridade" required="">
              <option value="">Escolher...</option>
               <option value="">Faculdade</option>
               <option value="">Pós-Graduação</option>
               <option value="">Mestrado</option>
               <option value="">Doutorado</option>
               <option value="">Cursos Técnicos</option>
               <option value="">Ensino Fundamental</option>
               <option value="">Ensino Médio</option>
            </select>
          </div> 

          <div class="input-field">
                <h4>Data de nascimento:</h4>
                <input type="date" id="nome" name="datanasc" placeholder="Digite sua data: ">
                <label for="nome"> </label>
            </div>

            <div class="input-field">
                <h4>Telefone:</h4>
                <input type="tel" id="nome" name="telefone" placeholder="Exemplo:(00)00000-0000 ">
                <label for="nome"> </label>
            </div>

             <div class="input-field">
                <h4>Estado</h4>
            <select class="form-select" name="estado" id="estado" required="">
              <option value="">Escolher...</option>
               <option value="">AC</option>
               <option value="">AL</option>
               <option value="">AP</option>
               <option value="">AM</option>
               <option value="">BA</option>
               <option value="">CE</option>
               <option value="">ES</option>
               <option value="">GO</option>
               <option value="">MA</option>
               <option value="">MT</option>
               <option value="">MS</option>
               <option value="">MG</option>
               <option value="">PA</option>
               <option value="">PB</option>
               <option value="">PR</option>
               <option value="">PE</option>
               <option value="">PI</option>
               <option value="">RJ</option>
               <option value="">RN</option>
               <option value="">RS</option>
               <option value="">RO</option>
               <option value="">RR</option>
               <option value="">SC</option>
               <option value="">SP</option>
               <option value="">SE</option>
               <option value="">TO</option>
            </select>
          </div> 

            <div class="input-field">
                <h4>Senha:</h4>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha:">
                   <label for="senha"></label>
            </div>

            <div class="center">
                <button>Cadastrar</button>
            </div>

        </form>
    <div class="links">
                 <a href="index.php"><p>Já tem login? Entre</p></a>
             </div>
</div> -->