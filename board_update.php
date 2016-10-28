<?php
    require_once 'inc/dbcon.php';
    $idx=$_POST['idx'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $sql="update board set title=:title, content=:content where idx=:idx";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(':content',$content);
    $stmh->bindValue(':title',$title);
    $stmh->bindValue(':idx',$idx);
    $stmh->execute();
?>
<script>
    location.href="view.php?idx=<?=$idx?>";
</script>