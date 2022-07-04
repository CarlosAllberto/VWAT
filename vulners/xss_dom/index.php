<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        header("Location: ../../login.php");
    }

    $level = "low";
    $page = "{$level}.php";
?>

<h1 class="textWrite">XSS DOM</h1>
<div class="row justify-content-center">
    <div class="col-md-5">
    <?php 
        echo "<h3>Level: {$level}</h3>";
    ?>
        <div class="conteudo">
            <form action="#">
                <input type="text">
                <button type="submit">Analisar</button>
            </form>
        </div>
    </div>
</div>