<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width"> 
      <link href="Img/logo.png" rel="icon">
    <link rel="stylesheet" href="teste2.css">
    <script src="https://kit.fontawesome.com/0ad8e7ff25.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <title>TURISMO</title>

    <!-- modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

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
                                        <li><a href="home.php">Inicio</a></li>
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


         <div class="container">
        <br>
        <br>
        <div class="row" id="galeria">
            <div class="col-sm-12">
                    <h1 class="display-1 text-center">LOCAIS DE VOTAÇÃO</h1>
                    <p class="lead text-center">Encontre locais onde poderá estar votando</p>
                    <hr>
            </div>
        </div>

<div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="img/b.jpg" class="img-fluid">
                    </div>
                    <div class="card-footer text-right">
                        <p>Escola Benedito Calixto</p>
                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                    </div>
                </div>
          

                <!-- modal -->

                <div class="w3-container">
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id01').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.26267186793!2d-46.80450678536744!3d-24.197578391277982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d56ae9599073%3A0xdf0a383e6d91d38c!2sCama%20de%20Anchieta!5e0!3m2!1spt-PT!2sbr!4v1634940886724!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/Escola+Estadual+Benedito+Calixto/@-24.1829144,-46.7887793,17z/data=!3m1!4b1!4m5!3m4!1s0x94d1d5f39b0e1f05:0xe7fd0ce2754e5901!8m2!3d-24.1828561!4d-46.7866277
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="img/a.jpg" class="img-fluid">
                    </div>
                    <div class="card-footer text-right">
                        <p>Escola Nova Era</p>
                        <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                    </div>
                </div>

                <!-- modal -->

                <div class="w3-container">
                    <div id="id02" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id02').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6657811139394!2d-46.79140118536802!3d-24.18345139074284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d579d2144a9b%3A0xfc70084974284be9!2sCasa%20de%20C%C3%A2mara%20e%20Cadeia%20-%20Museu%20Concei%C3%A7%C3%A3o%20de%20Itanha%C3%A9m!5e0!3m2!1spt-PT!2sbr!4v1634941188891!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/Escola+Nova+Era/@-24.1865666,-46.7957024,17z/data=!3m1!4b1!4m5!3m4!1s0x94d1d5708c5e3c1d:0xb08abce9cd06529e!8m2!3d-24.1865666!4d-46.7935137
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>

</div>
<hr>
    <div class="container">
        <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/d.jpg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Escola Harry Forssell</p>
                            <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>

                    <!-- modal -->

                <div class="w3-container">
                    <div id="id03" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id03').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.687369906162!2d-46.79279548536791!3d-24.182694590714227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d579c87f8ccd%3A0x112a06fcbd54c0e5!2sConvento%20Nossa%20Senhora%20da%20Concei%C3%A7%C3%A3o%20de%20Itanha%C3%A9m!5e0!3m2!1spt-PT!2sbr!4v1634941392527!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/EM+Harry+Forssell/@-24.1630882,-46.8090201,15z/data=!4m9!1m2!2m1!1sESCOLA+REFORCEL+ITANHAEM!3m5!1s0x94ce2a7f369c7f97:0x1aadbd5f6f4e0a9b!8m2!3d-24.1631104!4d-46.7925593!15sChhFU0NPTEEgUkVGT1JDRUwgSVRBTkhBRU2SAQ1wdWJsaWNfc2Nob29s
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>

                </div>



                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/e.jpeg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Escola 11 de novembro</p>
                             <button onclick="document.getElementById('id04').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>

                          <!-- modal -->

                    <div class="w3-container">
                    <div id="id04" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id04').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.2638249839506!2d-46.806374885367475!3d-24.197537991276434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d56ae86d916b%3A0xb064d000ed274a91!2sGruta%20Nossa%20Senhora%20De%20Lourdes!5e0!3m2!1spt-PT!2sbr!4v1634941522539!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/Col%C3%A9gio+11+de+Novembro+Unidade+I+e+II/@-24.1789279,-46.7781994,17z/data=!3m1!4b1!4m5!3m4!1s0x94d1d58fe431b297:0xc02427a0209ceaf8!8m2!3d-24.1789328!4d-46.7760107
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr>



<div class="container">
        <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/f.jpg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Escola Ana Cândida</p>
                            <button onclick="document.getElementById('id05').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>

                    <!-- modal -->

                <div class="w3-container">
                    <div id="id05" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id05').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.672382194181!2d-46.79077948536783!3d-24.183219990734077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d5831d414167%3A0xd25a680779863c48!2sIgreja.Matriz%20Santana%20de%20Itanha%C3%A9m!5e0!3m2!1spt-PT!2sbr!4v1634941642636!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/EM+Ana+C%C3%A2ndida+Ebling+de+Oliveira/@-24.1668797,-46.7777928,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce2a774242a17f:0x5030bae4f48c4dbf!8m2!3d-24.1668853!4d-46.7756031
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>

            

                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/l.jpg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Escola Dalva Dati</p>
                            <button onclick="document.getElementById('id06').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>


                        <!-- modal -->

                    <div class="w3-container">
                        <div id="id06" class="w3-modal">
                            <div class="w3-modal-content">
                                <header class="w3-container w3-teal"> 
                                    <span onclick="document.getElementById('id06').style.display='none'" 
                                    class="w3-button w3-display-topright">&times;</span>
                                    <h2>Como chegar</h2>
                                </header>
                                <div class="w3-container">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.26267186793!2d-46.80450678536744!3d-24.197578391277982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d56ae9599073%3A0xdf0a383e6d91d38c!2sCama%20de%20Anchieta!5e0!3m2!1spt-PT!2sbr!4v1634941748418!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <footer class="w3-container w3-teal">
                                    <a href="https://www.google.com/maps/place/Col%C3%A9gio+Belas+Artes+Itanhaem/@-24.1881821,-46.8186957,17z/data=!3m1!4b1!4m5!3m4!1s0x94d1d550b164239b:0xd7c4b627a46d0bd5!8m2!3d-24.188187!4d-46.816507
"><p>Vamos até la!!</p></a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
<hr>

<div class="container">
        <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/o.jpg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Escola José Carlos</p>
                            <button onclick="document.getElementById('id05').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>

                    <!-- modal -->

                <div class="w3-container">
                    <div id="id05" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal"> 
                                <span onclick="document.getElementById('id05').style.display='none'" 
                                class="w3-button w3-display-topright">&times;</span>
                                <h2>Como chegar</h2>
                            </header>
                            <div class="w3-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.20451968908!2d-46.80543449999999!3d-24.1996157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d51551a3bc9b%3A0x924fd58f5e37f9f8!2sItanha%C3%A9m%2C%20Pedra%20Da%20Esfinge%20-%20Morro%20Do%20Paranambuco!5e0!3m2!1spt-PT!2sbr!4v1634941940449!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <footer class="w3-container w3-teal">
                                <a href="https://www.google.com/maps/place/Escola+E.E+JOS%C3%89+CARLOS+BRAGA+DE+SOUZA/@-24.1664219,-46.7777145,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce2a77159dc90d:0xc0aaed91e74bb83!8m2!3d-24.1664339!4d-46.7755318
"><p>Vamos até la!!</p></a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>

            

                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="img/c.jpg" class="img-fluid">
                        </div>
                        <div class="card-footer text-right">
                            <p>Pollastrini</p>
                            <button onclick="document.getElementById('id06').style.display='block'" class="btn btn-primary btn-sm">Como chegar</button>
                        </div>
                    </div>


                        <!-- modal -->

                    <div class="w3-container">
                        <div id="id06" class="w3-modal">
                            <div class="w3-modal-content">
                                <header class="w3-container w3-teal"> 
                                    <span onclick="document.getElementById('id06').style.display='none'" 
                                    class="w3-button w3-display-topright">&times;</span>
                                    <h2>Como chegar</h2>
                                </header>
                                <div class="w3-container">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3639.3883934167197!2d-46.7940575!3d-24.193173299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x94d1d572fc1bd7d3%3A0xd5ebd6ef66c5d484!2sEst%C3%A1tua%20Mulheres%20de%20Areia%20-%20Av.%20Padre%20Anchieta%2C%2047%20-%20Praia%20dos%20Sonhos%2C%20Itanha%C3%A9m%20-%20SP%2C%2011740-000!3m2!1d-24.193173299999998!2d-46.7940575!5e0!3m2!1spt-PT!2sbr!4v1634942335364!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <footer class="w3-container w3-teal">
                                    <a href="https://www.google.com/maps/place/Col%C3%A9gio+Belas+Artes+Itanhaem/@-24.1881821,-46.8186957,17z/data=!3m1!4b1!4m5!3m4!1s0x94d1d550b164239b:0xd7c4b627a46d0bd5!8m2!3d-24.188187!4d-46.816507
"><p>Vamos até la!!</p></a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>

<hr>


</body>
</html>