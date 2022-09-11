<?php
session_start();
include "./config/connection.php";

if(isset($_POST["username"]) || isset($_POST["password"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if(strlen($user) == 0) {
        $msg_error = "Preencha o seu campo de Usuario";
    } else if(strlen($pass) == 0) {
        $msg_error = "Preencha o seu campo de Senha";
    } else if(strlen($user) > 20 || strlen($pass) > 20) {
        $msg_error = "Limite de caracteres: 20";
    } else {
        if($user == "admin" && $pass == "fgov") {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["id"] = "keydeteste123";
            if (!isset($_COOKIE)) {
                setcookie("level", "low");
            }
            header("Location: index.php");
        } else {
            $msg_error = "Usuario ou Senha Invalidos";
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
    <meta name="theme-color" content="darkgreen" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style/style-login.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4 order-md-2">
                    <div class="conteudo">
                        <img src="./img/logo.png" alt="logo">
                        <h2>VWAT</h2>
                        <?php
                            if($msg_error) {
                                echo '<div class="alert alert-danger">',
                                $msg_error,
                                '</div>';
                            }
                        ?> 
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="Username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <div class="d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-5 order-md-1">
                    <div class="conteudo">
                        <h3>Não sabe logar?</h3>
                        <p>Caso não tenha feito as Configurações nescessrias ou não sabe como logar, de uma olhada no Tutorial de Configuração</p>
                        <a class="btn btn-primary" href="#" role="button">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
