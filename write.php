<?php
require_once 'inc/dbcon.php';
$title=$_POST['title'];
$content=$_POST['content'];
$name=$_POST['name'];
$date=date("y.m.d");
$count=1;
print $title;
print $content;
print $name;
print $date;
print $count;
$sql="insert into board (name,title,date,count,content) values (:name,:title,:date,:count,:content)";
$stmh=$pdo->prepare($sql);
$stmh->bindValue(':name',$name);
$stmh->bindValue(':title',$title);
$stmh->bindValue(':date',$date);
$stmh->bindValue(':content',$content);
$stmh->bindValue(':count',$count);
$stmh->execute();


