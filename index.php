<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="darkgreen" />
    <title>VWAT - Home</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body>

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <form class="w-100">
                        <div>
                            <input class="form-control me-2 bg-dark text-success" type="search" placeholder="Search" aria-label="Search" onfocus="resultSearch()" onblur="resultSearch()">
                        </div>
                    </form>
                </div>
                <div class="modal-body">
                    <p class="text-center">Nenhuma pesquisa recente.</p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <nav class="header navbar navbar-expand-lg bg-dark navbar-dark" style="z-index: 1;">
        <div class="container container-fluid">
            <a class="navbar-brand header__logo " href="./">
                <img src="./assets/img/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="navbar-brand mb-0 h1">VWAT</span>              
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./vulners/">Vulners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./tutoriais/">Tutors</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Config
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="./config">Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./config/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex m-auto" role="search">
                <input class="form-control me-2 bg-dark" type="search" placeholder="Search" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Search">
            </div>
            <ul class="d-flex navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-github"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="alert alert-info alert-dismissible fade show" style="margin: 0 10px;">
        <i class="bi bi-info-circle"></i> Continuo melhorando essa página, Adoraria ouvir seus comentários <a href="#">aqui</a>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    <section id="apresentacao" class="apresentacao my-5">
        <div class="container">
            <div class="row">
                <p class="apresentacao__sorte">すべてのハッカー、ハッキングの世界に頑張ってください</p>
                <h1 class="apresentacao__title text-center textWrite">VWAT um Website para testes de Intrusão.</h1>
                <div class="col-lg-4">
                    <div class="apresentacao__content p-4 shadow rounded">
                        <img class="col-md-12 float-md-start mb-2 me-md-3" id="skull" src="./assets/img/a94757118997165.60943557b01f2.gif" alt="skull">
                        <p>
                            Obrigado por usar a nossa plataforma. <!--Elimine todas suas distrações, coloque uma musica tematica hacker de fundo e divirta-se hackeando a nossa querida plataforma que ainda é um bebê.-->
                        </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="apresentacao__content p-4 shadow rounded">
                        <div class="row">
                            <div class="col-3">
                                <div id="curve_chart" style="width: 500px; height: 100%"></div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="paginas" class="paginas my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="paginas__card card text-center shadow">
                        <img src="./assets/img/ethicalhacking.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Procurar Falhas</h5>
                            <p class="card-text">Some quick example text</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="paginas__card card text-center shadow">
                        <img src="./assets/img/criptografia.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Criptografias</h5>
                            <p class="card-text">Some quick example text to build</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="paginas__card card text-center shadow">
                        <img src="./assets/img/learning.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Tutoriais</h5>
                            <p class="card-text">Some quick example text to build on the card</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="paginas__card card text-center shadow">
                        <img src="./assets/img/engrenagem.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Config</h5>
                            <p class="card-text">Some quick example text</p>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col">
                    <div class="card bg-dark">
                        <img src="./assets/img/ethicalhacking.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CTF</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>

    <section id="musica" class="musica my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="musica__title text-center">Musica</h3>
                    <p class="text-center">Não estava brincando, você deveria colocar uma musica para escultar.</p>
                    <div class="musica__content">
                        <div class="row player">
                            <div class="col-lg-3">
                                <img class="musica__art" src="https://i.ytimg.com/vi/yaQjWqxY8tw/hqdefault.jpg" alt="">
                            </div>
                            <div class="col">
                                <div class="info p-4">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="musica__nome">LO-FI hacker 3hr</h4>
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <p class="musica__autor">dj alok</p>
                                    <div id="waveform"></div>
                                    <div class="musica__controls d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-shuffle"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-skip-backward-fill"></i>
                                            <i class="bi bi-play-circle px-4"></i>
                                            <i class="bi bi-skip-forward-fill"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-download"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas" class="ferramentas my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ferramentas__content">
                        <h3 class="ferramentas__title text-center">Ferramentas recomendadas</h3>
                        <p class="text-center">Ferramentas não são feitas para você depender delas, são para ajudar sua vida...</p>
                        <div class="carousel">
                            <div><a href="https://www.kali.org/tools/metasploit-framework/" target="_blank">
                                <img src="https://www.kali.org/tools/metasploit-framework/images/metasploit-framework-logo.svg" alt="metasploit">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/burpsuite/" target="_blank">
                                <img src="https://www.kali.org/tools/burpsuite/images/burpsuite-logo.svg" alt="burp">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/zaproxy/" target="_blank">
                                <img src="https://www.kali.org/tools/zaproxy/images/zaproxy-logo.svg" alt="zap">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/nmap/" target="_blank">
                                <img src="https://www.kali.org/tools/nmap/images/nmap-logo.svg" alt="nmap">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/sqlmap/" target="_blank">
                                <img src="https://www.kali.org/tools/sqlmap/images/sqlmap-logo.svg" alt="sqlmap">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/commix/" target="_blank">
                                <img src="https://www.kali.org/tools/commix/images/commix-logo.svg" alt="commix">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/nikto/" target="_blank">
                                <img src="https://www.kali.org/tools/nikto/images/nikto-logo.svg" alt="nikto">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/hydra/" target="_blank">
                                <img src="https://www.kali.org/tools/hydra/images/hydra-logo.svg" alt="hdra">
                            </a></div>
                            <div><a href="https://www.kali.org/tools/hashcat/" target="_blank">
                                <img src="https://www.kali.org/tools/hashcat/images/hashcat-logo.svg" alt="hashcat">
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comunidade" class="comunidade my-5">
        <div class="container">
            <div class="row">
                <div class="col my-auto">
                    <div class="comunidade__content">
                        <h4>Nossa comunidade</h4>
                        <p>junte-se a nossa comunidade no Discord para batermos um papo sobre hacking e programação</p>
                        <p>juntos aprendemos mais, sem contar tambem que é mais divertido.</p>
                        <a href="#" class="btn buttonPurple">Faça parte</a>
                    </div>
                </div>
                <div class="col">
                    <div class="comunidade__content">
                        <img src="https://thebughunter.io/wp-content/uploads/2021/12/passo-4.png" alt="discord">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="relate" class="relate my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="relate__content">
                        <h3>Achou algum Bug?</h3>
                        <p>Caso tenha encontrado alugm Bug no site ficaremos muito felizes se você relatar ou entrar em contato.
                            você tambem pode dar dicas de como melhorar a plataforma.
                        </p>
                        <p>Você pode relatar em algum desses endereços ao lado.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="relate__content">
                        <ul class="relate__list">
                            <li class="py-2">
                                <i class="bi bi-github"></i> <a href="https://github.com/CarlosAllberto/VWAT/issues" target="_blank">CarlosAllberto/VWAT/issues</a>
                            </li>
                            <li class="py-2">
                                <i class="bi bi-github"></i> <a href="https://github.com/N3utr0n-FHC" target="_blank">N3utr0n-FHC</a>
                            </li>
                            <li class="py-2">
                                <i class="bi bi-telegram"></i> <a href="#" target="_blank">CarlosAllberto</a>
                            </li>
                            <li class="py-2">
                                <i class="bi bi-github"></i> <a href="#" target="_blank">N3utr0n-FHC</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/logo.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
                    <span class="navbar-brand mb-0 h1">VWAT</span>              
                </a> 

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-github"></i></a>
                      </li>
                    </ul>
                </div> 
            </div>
        </nav>
        <div class="container conteudo">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="text-center">VWAT</h5>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis nihil beatae iste, voluptates qui sunt nobis expedita, sed laborum eos nostrum ipsa optio dolores dolorem suscipit tenetur labore mollitia.</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="text-center">PRODUCTS</h5>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis nihil beatae iste, voluptates qui sunt nobis expedita, sed laborum eos nostrum ipsa optio dolores dolorem suscipit tenetur labore mollitia.</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="text-center">USEFUL LINKS</h5>
                    <ul class="text-center">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="./vulners/">Procurar Falhas</a>
                        </li>
                        <li>
                            <a href="./config/">Settings</a>
                        </li>
                        <li>
                            <a href="#">Tutoriais</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5 class="text-center">CONTACT</h5>
                    <ul class="text-center">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="./vulners/">Procurar Falhas</a>
                        </li>
                        <li>
                            <a href="./config/">Settings</a>
                        </li>
                        <li>
                            <a href="#">Tutoriais</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-4">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://vwat.com/">VWAT.com.br</a>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="./js/digitar.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/digitar.js"></script>
    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'Hacks', 'Learns'],
          ['Jan',  5000,      400],
          ['Fev',  1170,      4460],
          ['Mar',  660,       1120],
          ['Abr',  1030,      540],
          ['Mai',  660,       1120],
          ['Jun',  1660,      1120],
          ['Jul',  660,       3120],
          ['Ago',  260,       120],
          ['Set',  2660,      1120],
          ['Out',  660,       4120],
          ['Nov',  3660,      4120],
          ['Dez',  660,       5120],
        ]);

        var options = {
          title: 'CarlosAllberto',
          colors: ["blue", "purple"],
          backgroundColor: {
            'fill': 'transparent',
            'opacity': 100
          },
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script>
        var wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: 'lightgray',
            progressColor: 'purple',
            height: 40,
        });
        wavesurfer.load('../assets/music/metallica.mp3');
        
        const play = (e) => {
            wavesurfer.play();
        };

        const pause = (e) => {
            wavesurfer.pause();
        };
    </script>
    <script>
        $('.carousel').slick({
            autoplay: true,
            autoplaySpeed: 0,
            centerMode: true,
            centerPadding: "0px",
            arrows: false,
            dots: false,
            infinite: true,
            speed: 2000,
            slidesToShow: 5,
            slidesToScroll: 5,

            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '80px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
                }
            ]
        });
    </script>
</body>
</html>