<?php
//    $db_host='localhost';
//    $db_name='kccsignin';
//    $db_type='mysql';
//    $dsn='$db_type:host=$db_host;dbname=$db_name:charset:utf8';
//    try {
//        $pdo=new PDO($dsn,$db_user,$db_pass);
//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
//        print "접속";
//} catch (PDOException $Exception) {
//        die("오류".$Exception->getMessage());
//}

try{
    $pdo = new PDO('mysql:host=localhost; dbname=kccsignin; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    print "접속 성공";
} catch (PDOException $Exception) {
    die("접속 실패".$Exception->getMessage());
}
?>