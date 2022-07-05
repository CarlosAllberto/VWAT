<?php
    if(isset($_GET['submit'])) {
        $user = $_GET['user'];
        $pass = $_GET['pass'];

        if($user == "shinigami" and $pass == "admin") {
            $html .= "<h1>loged</h1>";
        } else {
            echo "not loged";
        }
    }
?>