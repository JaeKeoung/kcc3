<!DOCTYPE html>
<?php
    require_once 'inc/header.php';
    require_once 'config.php';
    
    $sql = 'select * from board order by idx desc limit 0,10';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    $result = $stmh->fetchAll();
?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	//jquery onload
	$(function(){
		//Html parsing 이 다 된 후 호출되는 영역.
	  $(".lnb li a").mouseover(function(){
	  	$(".lnb li a.selected").removeClass("selected");
	  	$(this).addClass("selected");
	  });
	});
</script>
<style>
    table {margin-top: 40px; width: 735px;}
    tr:nth-child(1) {border-top: 3px solid #0a6e0a; background-color: #c8fac2;}
    th {font-family: 다음; font-size: 14px; color: #444; padding: 10px 10px;}
    td {border-top: 1px solid #cccccf; color: #444; font-family: 맑은 고딕; font-size: 13px; padding: 12px 0px;}
    .title {width: 480px;}
    .num {text-align: center;}
    .date {text-align: center;}
    .click {text-align: center;}
    #write {float: right; width: 70px; height: 30px;}
</style>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#gnb" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>
<!-- //skip nav -->
<div id="wrap" class="sub_bg">
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">커뮤니티</h2>
					<ul class="lnb">
					<li><a href="#" class="selected_hard">공지사항<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">커뮤니티</a>						
						<span>&gt;</span>
						<strong>공지사항</strong>
					</p>
					<div class="join_wrap">	
						<h2 class="sp_sub join_title">공지사항</h2>
						<p class="join_txt">금강컨트리클럽을 이용하시기 불편함이 없도록 밝고 견강한 새로운 소식을 회원님께 알려드립니다.</p>
                                                <table>
                                                    <tr>
                                                        <th>번호</th>
                                                        <th class="title">제목</th>
                                                        <th>등록일</th>
                                                        <th>조회수</th>
                                                    </tr>
                                                    <?php
                                                      foreach ($result as $row) {
                                                    ?>
                                                    <form action="noticeUploadForm.php" method="post">
                                                    <tr>
                                                        <input type="hidden" name="Num" value="<?=$row['Num']?>">
                                                        <td class="num"><?=$row['Num']?></td>
                                                        <input type="hidden" value="<?=$row['Title']?>">
                                                        <td><a herf="./noticeView.php?idx=<?=$data['idx']?>"><?=$row['Title']?></a></td>
                                                        <input type="hidden" value="<?=$row['Date']?>">
                                                        <td class="date"><?=$row['Date']?></td>
                                                        <input type="hidden" value="<?=$row['Count']?>">
                                                        <td class="click"><?=$row['Count']?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>  
                                                    <input type="submit" value="글쓰기" id="write">
                                                    <form>
                                                </table>
					</div>
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>