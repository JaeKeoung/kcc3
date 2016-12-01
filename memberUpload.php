<?php
	include_once 'config.php';
	$member = "insert into member set 
		name_kr = '{$_POST['name_kr']}' ,
		name_en = '{$_POST['name_en']}' , 
		year = '{$_POST['year']}' , 
		month = '{$_POST['month']}' , 
		day = '{$_POST['day']}' ,
		id = '{$_POST['id']}' ,
		password = '{$_POST['pw']}' ,
		tel = '{$_POST['tel']}{$_POST['tel2']}{$_POST['tel3']}' , 
		phone = '{$_POST['phone']}{$_POST['phone2']}{$_POST['phone3']}' , 
		sms = '{$_POST['sms']}' ,
		email = '{$_POST['email']}' , 
		post = '{$_POST['post']}' , 
		home_ad = '{$_POST['home']}{$_POST['home2']}' , 
		dm = '{$_POST['dm']}' , 
		company = '{$_POST['company']}' , 
		work = '{$_POST['work']}' , 
		position = '{$_POST['position']}',
		company_post = '{$_POST['cp_post']}' , 
		company_ad = '{$_POST['cp']}{$_POST['cp2']}',
		com_tel = '{$_POST['cp_tel']}{$_POST['cp_tel2']}{$_POST['cp_tel3']}' , 
		fax = '{$_POST['fax']}{$_POST['fax2']}{$_POST['fax3']}' , 
		marry = '{$_POST['marry']}' , 
		marry_y = '{$_POST['m_year']}' ,
		marry_m = '{$_POST['m_month']}' , 
		marry_d = '{$_POST['m_day']}'
  ";
  $list = $pdo -> query($member); 

?>
<script>
	location.href='index.php'; 
</script>