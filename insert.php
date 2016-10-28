<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'inc/dbcon.php';
$title="test";
$date="test";
$count=1;
$content="test";
$date=date("y.m.d");
for($i=0;$i<=300;$i++)
{
    $sql="insert into board (title,date,count,content) values (:title,:date,:count,:content)";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(':title',$title);
    $stmh->bindValue(':date',$date);
    $stmh->bindValue(':content',$date);
    $stmh->bindValue(':count',$i);
    $stmh->execute();
    
}
?>