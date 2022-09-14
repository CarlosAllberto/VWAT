<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        header("Location: ../../login.php");
    }

    if(!isset($_COOKIE['level'])) {
        $level = "low";
    } else {
        $level = $_COOKIE['level'];
    }
    $page = "./brute/source/{$level}.php";
    $method = $level == "impossible" ? "post" : "get";
?>

<div class="row">
    <div class="col">
        <div class="content">
            <div>
                <i class="bi bi-lightbulb"></i>
                <i class="bi bi-terminal-dash"></i>
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
                        <input class="text-light form-control" type="text" name="username" id="username" placeholder="Username">
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
            <div>
                <?php 
                    echo "<h3>Level: {$level}</h3>";
                ?>
            </div>
        </div>
    </div>
</div>