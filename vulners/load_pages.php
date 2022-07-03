<?php
    function load() {
        if(isset($_GET["page"])) {
            $page = strip_tags($_GET['page']);
            $page = "{$page}/index.php";
            if(!file_exists($page)) {
                $page = "introducao/index.php";
            }
        } else {
            $page = "introducao/index.php";
        }
        return $page;
    }





/*
        if(isset($_GET['page'])) {
            $page = strip_tags($_GET['page'], "</>");
            $page = "{$page}/index.php";
            if(!file_exists($page)) {
                $page = "introducao/index.php";
                throw new \Exception("Arquivo não Existe.");
            }
        } else {
            $page = "introducao/index.php";
        }
        return $page;
*/
?>

