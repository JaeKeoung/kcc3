<?php
include 'kccSingin.php';

 $host = 'localhost';
 $user = 'root';
 $pw = 'root';
 $dbName = 'myService';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $Kname=$_POST['KoreanName'];
 $Ename=$_POST['EnglishName'];
 $birthday1=$_POST['BirthDay1'];
 $birthday2=$_POST['BirthDay2'];
 $birthday3=$_POST['BirthDay3'];
 $id=$_POST['ID'];
 $password=md5($_POST['Passward']);
 $password2=$_POST['pwd2'];
 $phone1=$_POST['PhoneNumber1'];
 $phone2=$_POST['PhoneNumber2'];
 $phone3=$_POST['PhoneNumber3'];
 $Cellphone=$_POST['CellphoneNumber1'];
 $Cellphone=$_POST['CellphoneNumber2'];
 $Cellphone=$_POST['CellphoneNumber3'];
 $SMS=$_POST['SMS'];
 $email=$_POST['EMail'];
 $HANumber=$_POST['homePostNumber'];
 $HAdress=$_POST['homeAdress'];
 $HDadress=$_POST['homeDetailAdress'];
 $HA1=$_POST['HomeAdress1'];
 $HA2=$_POST['HomeAdress2'];
 $DM=$_POST['DM'];
 $CompanyN=$_POST['CompanyName'];
 $Job=$_POST['JobKind'];
 $JPosition=$_POST['Postion'];
 $CPostNum=$_POST['companyPostNumber'];
 $CAdress=$_POST['companyAdress'];
 $CDAdress=$_POST['companyDetailAdress'];
 $CA1=$_POST['CompanyAdress1'];
 $CA2=$_POST['CompanyAdress2'];
 //여기서부터
 $CPoneNum1=$_POST['CompanyNumber1'];
 $CPoneNum2=$_POST['CompanyNumber2'];
 $CPoneNum3=$_POST['CompanyNumber3'];
 $id=$_POST['ID'];
 $id=$_POST['ID'];
 
// $sql = "insert into account_info (id, pwd, name, addr, sex, birthDay, email)";
// $sql = $sql. "values('$id','$password','$name','$address','$sex','$birthDay','$email')";
// if($mysqli->query($sql)){
//  echo 'success inserting';
// }else{
//  echo 'fail to insert sql';
// }
?>