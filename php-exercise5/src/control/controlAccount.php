<?php

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["logout"])){
    
    header("Location: ../../index.php");
    exit();
}