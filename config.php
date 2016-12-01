<?php
    try {
    $pdo = new PDO('mysql:host=localhost; dbname=kcc; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    }
    catch(PDOException $Exception) {
        die("접속 오류: ".$Exception->getMessage()."<br>");
    }
    
?>