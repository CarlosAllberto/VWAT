<?php
session_start();
include "./config/connection.php";

$msg_error = false;

if(isset($_POST["email"]) || isset($_POST["password"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    if(strlen($email) == 0) {
        $msg_error = "Preencha o seu campo de Email";
    } else if(strlen($pass) == 0) {
        $msg_error = "Preencha o seu campo de Senha";
    } else if(strlen($email) > 50 || strlen($pass) > 50) {
        $msg_error = "Limite de caracteres: 20";
    } else {
        if($email == "dasilvacarlosalberto344@gmail.com" && $pass == "fgov") {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["id"] = "keydeteste123";
            if (!isset($_COOKIE)) {
                setcookie("level", "low");
            }
            header("Location: index.php");
        } else {
            $msg_error = "Email ou Senha Invalidos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VWAT - Login</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <main class="m-0">
        <section class="login" id="login">
            <div class="">
                <div class="row w-100 h-100">
                    <div class="col-lg-6 col-12">
                        <div class="login__content py-5">
                            <div class="d-flex justify-content-between pb-lg-5 pb-3">
                                <div class="login__header d-flex align-items-center">
                                    <img src="./assets/img/logo.png" width="45" height="45" alt="logo">
                                    <span class="mb-0 h3">VWAT</span>
                                </div>
                                <div>
                                    <p class="m-0">Não tem uma conta?</p>
                                    <a href="./create.php">Crie a sua conta aqui</a>
                                </div>
                            </div>
                            <div class="pt-lg-5 pt-3">
                                <form action="" method="post">
                                    <h1>Log in to VWAT</h1>
                                    <?php
                                        if($msg_error) {
                                            echo '<div class="alert alert-danger">',
                                            $msg_error,
                                            '</div>';
                                        }
                                    ?> 
                                    <div class="my-3">
                                        <input class="text-light form-control" type="email" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="my-3">
                                    <div class="input-group">
                                        <input type="password" id="password" name="password" class="text-light form-control" aria-label="Amount (to the nearest dollar)" placeholder="Senha">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-dark text-light" id="showPassword">
                                                <i class="bi bi-eye" id="eyePassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <button class="buttonPurple w-100 rounded py-2" type="submit">Log in</button>
                                    </div>
                                    <hr>
                                    <div>
                                        <a class="d-block py-1" href="#">Esqueceu sua senha?</a>
                                        <a class="d-block py-1" href="#">Reenviar email de confirmação</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="./assets/js/main.js"></script>
</body>
</html>
