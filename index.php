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
<<<<<<< HEAD
    <!-- JavaScript Bundle with Popper -->

    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
=======
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
>>>>>>> 3e36f31 (redesign)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body onload="TextWrite()">
<<<<<<< HEAD
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <form class="w-100">
                        <div>
                            <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search" onfocus="resultSearch()" onblur="resultSearch()">
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
=======
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <input class="form-control me-2" placeholder="Search" aria-label="Search">
            </div>
            <div class="modal-body">
                not results search
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

>>>>>>> 3e36f31 (redesign)
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="z-index: 1;">
        <div class="container container-fluid">
            <a class="navbar-brand" href="./">
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
<<<<<<< HEAD
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Search">
            </form>
=======
            <div class="m-auto" >
                <input data-toggle="modal" data-target="exampleModal" class="form-control me-2" placeholder="Search" aria-label="Search">
            </div>
>>>>>>> 3e36f31 (redesign)
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
<<<<<<< HEAD
    <main>
        <div class="container">
            <p class="sorte">すべてのハッカー、ハッキングの世界に頑張ってください</p>
            <h1 class="textWrite">VWAT um Website para testes de Intrusão.</h1>
            <div class="row">
                <div class="col-sm-8">
                    <div class="conteudo">
                        <h2>&lt;/Home&gt;</h2>
                        <img class="col-md-6 float-md-end mb-3 ms-md-3" id="skull" src="./img/a94757118997165.60943557b01f2.gif" alt="skull">
                        <p>
                            Primeiramente Muito obrigado por usar a nossa plataforma. Elimine todas suas distrações, coloque uma musica tematica hacker de fundo e divirta-se hackeando a nossa querida plataforma que ainda é um bebê.
                        </p>
                        <p>
                            Esse site foi feito com o intuito de ajudar iniciantes de Pentest ou até mesmo profissionais na àrea a fazer testes de intrusão com diferentes niveis sendo eles facil medio e dificil caso você esteja com difuldades em algum desafio você pode consultar a nossa pagina de tutoriais
=======
>>>>>>> 3e36f31 (redesign)

    <div class="alert alert-primary alert-dismissible fade show" style="margin: 0 10px;">
        <i class="bi bi-info-circle"></i> Continuo melhorando essa página, Adoraria ouvir seus comentários <a href="#">aqui</a>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    <section id="apresentacao" class="apresentacao my-5">
        <div class="container">
            <div class="row">
                <p class="sorte">すべてのハッカー、ハッキングの世界に頑張ってください</p>
                <h1 class="textWrite">VWAT um Website para testes de Intrusão.</h1>
                <div class="col-lg-4">
                    <div class="apresentacao__content">
                        <img class="col-md-12 float-md-start mb-2 me-md-3" id="skull" src="./assets/img/a94757118997165.60943557b01f2.gif" alt="skull">
                        <p>
                            Obrigado por usar a nossa plataforma. <!--Elimine todas suas distrações, coloque uma musica tematica hacker de fundo e divirta-se hackeando a nossa querida plataforma que ainda é um bebê.-->
                        </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="apresentacao__content">
                        <div class="row">
                            <div class="col-3">
                                <img class="rounded-circle" width="120" height="120" src="./assets/img/ethicalhacking.avif" alt="">
                            </div>
                            <div class="col">
                                <!--<canvas id="myChart" width="400" height="400"></canvas>-->
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
                    <div class="card bg-dark">
                        <img src="./assets/img/ethicalhacking.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Procurar Falhas</h5>
                            <p class="card-text">Some quick example text</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark">
                        <img src="./assets/img/criptografia.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Criptografias</h5>
                            <p class="card-text">Some quick example text to build</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark">
                        <img src="./assets/img/learning.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tutoriais</h5>
                            <p class="card-text">Some quick example text to build on the card</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark">
                        <img src="./assets/img/engrenagem.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Config</h5>
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
                    <div class="musica__content">
                        <h3>Musica</h3>
                        <p>Não estava brincando, você deveria colocar uma musica para escultar.</p>
                        <div class="row player">
                            <div class="col-md-4">
                                <img src="https://i.ytimg.com/vi/yaQjWqxY8tw/hqdefault.jpg" alt="">
                            </div>
                            <div class="col">
                                <div class="info">
                                    <h5>LO-FI hacker 3hr</h5>
                                    <p>dj alok</p>
                                    <div id="waveform"></div>
                                    <div class="controls">
                                        <div>
                                            <i class="bi bi-skip-backward-fill"></i>
                                            <i onclick="play(this)" class="bi bi-play-circle-fill"></i>
                                            <i class="bi bi-skip-forward-fill"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-download" style="padding-left: 270px;"></i>
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
                        <h3>Ferramentas recomendadas</h3>
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
                        <p>Ferramentas não são feitas para você depender delas, são para ajudar sua vida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comunidade" class="comunidade my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="comunidade__content">
                        <h4>Nossa comunidade</h4>
                        <p>junte-se a nossa comunidade do discord</p>
                        <p>juntos aprendemos mais e sem contar tambem que é mais divertido.</p>
                        <a href="#" class="btn btn-primary">Fazer parte</a>
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
                        <p>Você pode relatar em algum desses endereços abaixo.</p>
                        <ul>
                            <li><i class="bi bi-github"></i> <a href="https://github.com/CarlosAllberto/VWAT/issues" target="_blank">CarlosAllberto/VWAT/issues</a></li>
                            <li><i class="bi bi-github"></i> <a href="https://github.com/N3utr0n-FHC" target="_blank">N3utr0n-FHC</a></li>
                            <li><i class="bi bi-telegram"></i> <a href="#" target="_blank">CarlosAllberto</a></li>
                            <li><i class="bi bi-github"></i> <a href="#" target="_blank">N3utr0n-FHC</a></li>
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
                    <h5>VWAT</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis nihil beatae iste, voluptates qui sunt nobis expedita, sed laborum eos nostrum ipsa optio dolores dolorem suscipit tenetur labore mollitia.</p>
                </div>
                <div class="col-sm-3">
                    <h5>PRODUCTS</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis nihil beatae iste, voluptates qui sunt nobis expedita, sed laborum eos nostrum ipsa optio dolores dolorem suscipit tenetur labore mollitia.</p>
                </div>
                <div class="col-sm-3">
                    <h5>USEFUL LINKS</h5>
                    <p>
                        <a href="./">Home</a>
                    </p>
                    <p>
                        <a href="./vulners/">Procurar Bugs</a>
                    </p>
                    <p>
                        <a href="./config/">Settings</a>
                    </p>
                    <p>
                        <a href="./config/">Tutorials</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <h5>CONTACT</h5>
                    <p><i class="bi bi-house me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="bi bi-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="bi bi-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="bi bi-phone me-3"></i> + 01 234 567 89</p>
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
<<<<<<< HEAD
    <script src="./js/main.js"></script>
    <script src="./js/digitar.js"></script>
=======
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/digitar.js"></script>
    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script src="https://www.jsdelivr.com/package/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: 'lightgray',
            progressColor: 'purple',
            height: 40,
        });
        wavesurfer.load('../music/metallica.mp3');
        
        const play = (e) => {
            wavesurfer.play();
        };

        const pause = (e) => {
            wavesurfer.pause();
        };
    </script>

    <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
>>>>>>> 3e36f31 (redesign)
    <script>
        $('.carousel').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            centerPadding: "0px",
            arrows: false,
            dots: false,
            infinite: true,
            speed: 300,
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