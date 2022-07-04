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
    <title>VWAT - Tutoriais</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <script src="./js/main.js"></script>
</head>
<body>
    <main id="principal">
        <div>
            <h1>em breve...</h1>
            <a href="../"><h2>voltar</h2></a>
        </div>
    </main>
</body>
</html>