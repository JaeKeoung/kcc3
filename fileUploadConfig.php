<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=kccnotice; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        print "접속 성공 <br>";
    }
    catch(PDOException $Exception) {
        die("접속 오류: ".$Exception->getMessage()."<br>");
    }
?>