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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/style.css">

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <script src="./js/main.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="./js/digitar.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
</head>
<body onload="TextWrite()">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="z-index: 1;">
        <div class="container container-fluid">
            <a class="navbar-brand" href="./">
                <img src="./img/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="navbar-brand mb-0 h1">VWAT</span>              
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
                    <a class="nav-link" href="../vulners/">Vulners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tutoriais/">Tutors</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Config
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./config/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" onfocus="resultSearch()" onblur="resultSearch()">
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
        <div id="result-search">
            <p>Results:</p>
            <hr>
            <ul>  
                <a href="./">
                    <li class="active">
                        <p>Introdusão</p>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <p>XSS</p>
                    </li>
                </a>
                <a href="#">
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
                        <p>SQL Injection</p>
                    </li>
                </a>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container-md">
            <div class="row">
                <div class="col">
                    <h2>Configurações do VWAT</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto at non illo. Quae quam ab necessitatibus odio, laborum quo obcaecati omnis totam libero, rem beatae magni ipsa quis explicabo. Obcaecati.</p>
                    <hr>
                    <div style="display: flex;">
                        <h4>dificuldade: </h4>
                        <select name="dificuldade" id="dificuldade" aria-label="Default select example">
                            <option value="low">low</option>
                            <option value="medium">medium</option>
                            <option value="hard">hard</option>
                            <option value="impossible">impossible</option>
                        </select>
                    </div>
                    <hr>
                    <div class="d-md-flex justify-content-md-end">
                        <button class="btn btn-outline-sucess" type="submit">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>