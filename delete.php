<?php
   require_once "inc/dbcon.php";
   $idx=$_GET['idx'];
   $sql="delete from board where idx=(:idx)";
   $stmh=$pdo->prepare($sql);
   $stmh->bindValue(':idx',$idx);
   $stmh->execute();
   
?>
<script>
	location.href="sub1.php";
</script>