<?php
    require "./load_pages.php";
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        header("Location: ../login.php");
    }

    if(!isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = "introdusao";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="darkgreen" />
    <title>VWAT - Vulners</title>

    <script src="../js/terminal.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/vulners.css">

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/main.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="../js/digitar.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
</head>
<body onload="TextWrite()">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="header">
        <div class="container container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="open" data-bs-target="#sidebar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="sidebar()">
                <i class="bi bi-bug"></i>
            </button>
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="navbar-brand mb-0 h1">VWAT</span>              
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php">Vulners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tutors</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Config
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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
    <div class="sidebar" id="sidebar">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="open" data-bs-target="#sidebar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="sidebar()">
                    <i class="bi bi-bug-fill"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="navbar-brand mb-0 h1">Vulners</span>              
                </a>
            </div>
        </nav>
        <ul>  
            <a href="./">
                <li class="active">
                    <p>Introdusão</p>
                </li>
            </a>
            <a href="./xss_refleted/">
                <li>
                    <p>XSS Refleted</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>XSS Stored</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>XSS DOM</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>SQL Injection</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>SQL Injection Blind</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>Brute Force</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>CSRF</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>LFI</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>RFI</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>LDAP</p>
                </li>
            </a>
            <a href="#">
                <li>
                    <p>Directory Traversal</p>
                </li>
            </a>
        </ul>
    </div>
    <main>
        <div id="terminal" class="hide">
            <div id="controls">
                <span class="red" onclick="terminal()">
                    <i></i>
                </span>
                <span class="orange">
                    <i></i>
                </span>
                <span class="blue">
                    <i></i>
                </span>
                <p>Terminal - vwat@vwat-pc:~</p>
            </div>
            <div id="result">
                <p>[vwat@vwat-pc ~]$ curl http://127.0.0.1:5500/brute-force<span></span></p>
            </div>
        </div>
        <div class="alert alert-primary alert-dismissible fade show">
            <i class="bi bi-info-circle"></i> Continuo melhorando essa página, Adoraria ouvir seus comentários <a href="#">aqui</a>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        <div class="container-md">
            <?php load() ?>
        </div>
    </main>


    <script src="https://unpkg.com/wavesurfer.js"></script>

    <script>
        var wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: 'violet',
            progressColor: 'purple'
        });
        wavesurfer.load('../music/metallica.mp3');
        //wavesurfer.on(\'ready\', function () {
        //    wavesurfer.play();
        //});
        const play = () => {
            wavesurfer.play();
        };

        const pause = () => {
            wavesurfer.pause();
        };
    </script>

</body>
</html>