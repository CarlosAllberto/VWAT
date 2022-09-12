<?php
    require "./load_pages.php";
    include "../assets/php/sidebar.php";
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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
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

    <nav class="header navbar navbar-expand-lg bg-dark navbar-dark fixed-top" style="z-index: 2;">
        <div class="container-fluid">
            <a class="navbar-brand header__logo d-flex" href="../">
                <img src="../assets/img/logo.png" alt="logo" width="35" height="35" class="d-inline-block align-text-top">
                <span class="header__title navbar-brand mb-0 h1">VWAT</span>              
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./">Vulners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tutoriais/">Tutors</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Config
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="../config">Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!--
            <div class="d-flex m-auto" role="search">
                <input class="form-control me-2 bg-dark" type="search" placeholder="Search" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Search" readonly>
            </div>
            -->
            <ul class="header__redes d-flex navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-twitter" rel="noopener noreferrer"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-github" rel="noopener noreferrer"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <?php sidebarFunc();?>
    
    <main>
        <section class="vulnersHome" id="vulnersHome">
            <div class="alert alert-info alert-dismissible fade show">
                <i class="bi bi-info-circle"></i> Continuo melhorando essa página, Adoraria ouvir seus comentários <a href="#">aqui</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <div class="container">
                <?php require load();?>
            </div>
        </section>
    </main>

    <footer class="footer" id="footer">
        <div class="footer__copyright text-center p-4">
            © 2022 Copyright:
            <a class="text-reset fw-bold text-decoration-none" href="https://vwat.com/">VWAT.com.br</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <script type="text/javascript" src="./assets/js/digitar.js"></script>
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
          title: 'Statics',
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
        var play = document.querySelector("#musicPlay");
        play.addEventListener("click", () => {
            let classe = play.classList.toString();
            if (classe.indexOf("bi-play-circle") !== -1) {
                wavesurfer.play();
                play.classList.remove("bi-play-circle");
                play.classList.add("bi-pause-circle");
            } else {
                wavesurfer.pause();
                play.classList.remove("bi-pause-circle");
                play.classList.add("bi-play-circle");
            }
        });
        var like = document.querySelector("#musicLike");
        like.addEventListener("click", () => {
            let classe = like.classList.toString();
            if (classe.indexOf("bi-heart-fill") !== -1) {
                like.classList.remove("bi-heart-fill");
                like.classList.add("bi-heart");
            } else {
                like.classList.remove("bi-heart");
                like.classList.add("bi-heart-fill");
            }
        })
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