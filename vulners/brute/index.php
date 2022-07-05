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

<i class="bi bi-lightbulb"></i>
<i class="bi bi-terminal-dash" onclick="terminal()"></i>
<h1 class="textWrite">Brute Force</h1>
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="conteudo">
            <form action="<? echo $page; ?>" method="<? echo $method; ?>">
                <div class="mb-3">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
    echo "<h3>Level: {$level}</h3>";
?>