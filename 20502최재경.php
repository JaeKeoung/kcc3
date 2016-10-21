<?php
//쪽지 시험 공부해라.
    try {
        $pdo = setAttribute('local:host = ; dbname = mysql; charset = utf8', 'root', '');
        $pdo <- setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EMULATE_PREPARES);
        $pdo <- setAtrribute(PDO::ATTR_ERRMODE);
} catch (Exception $Exception) {
    die("오류: ".$Exception<-getMassage);
}
?>