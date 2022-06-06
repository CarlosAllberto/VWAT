<?php

define("HOST", "127.0.0.1");
define("USER", "vwat");
define("PASS", "fgov");
define("DB", "vwat");

$conn = new mysqli(HOST, USER, PASS, DB);

if($conn->error){
    die("falha na conexão com o banco de dados". $conn->error);
}
