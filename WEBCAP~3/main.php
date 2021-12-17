<?php
	echo "<br><br><center><h1> 신메뉴의 정석 </h1><hr>";
	echo " <br> ~ 신메뉴가 또 나왔네 신메뉴가 또 나왔어 ~ <br><br>"; //문구 test
	echo " &nbsp;[ <a href=login_form.php >로그인 </a> ] &nbsp;&nbsp; "; 
	echo " &nbsp;&nbsp; [ <a href=add_form.php>회원 가입 </a> ]&nbsp;";
	echo " &nbsp;&nbsp; [ <a href=reviewBoard.php>후기 게시판 </a> ]&nbsp;";
	echo " &nbsp;&nbsp; [ <a href=write.php>후기 쓰기</a> ]&nbsp;</center>";



	// 검색 기능 추가
	//...
	// 각 카테고리별 php 수정 및 사진 추가
?>


	 
<html>
<head><title> main_form </title>
<style type="text/css"> 
	@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
	h1 {font-family:'Nanum Pen Script', cursive; font-size:50px;}
	center {font-family:'Nanum Pen Script', cursive; font-size:35px;}
	a {font-family:'Nanum Pen Script', cursive;font-size:22px; text-decoration:none; color: black; } 
	input{font-family:'Nanum Pen Script',cursive;font-size:18px;} 
</style></head>
<body>
<form name="main_form" method = "post" action = "" autocomplete = "off" align="center">
<input type="text" title="검색" style="height:24px; width:250px;">
    	 	<input type="submit" value="검색" style="height:24px; width:50px">

<table width="600" border="0" align="center" cellpadding="5" cellspacing="0" >
   
   <tr bgcolor=#CCCCCC>
      <br><td align="center"><font color=#FFFFFF></td> <!--선-->
   </tr>
	
	<tr height="20" bgcolor=#CCCCCC> <!--확인을 위한 border="1" (다 끝나고 0으로 바꿀 것) -->
		<table width="600" border="1" align="center" cellpadding="0" cellspacing="0">

			
			<tr align="center"> <!--사진-->
			<td><?php echo "<img src='img/imgMain/koreanfood.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/bunsik.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/cafe.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/sushi.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/chicken.png' width='100'/>"; ?></td>
			</tr>
			<tr align="center"> <!--카페/디저트를 제외한 다른 분야 링크 X-->
				<td>[ <a href=login_form.php>한식</a> ]</td>
				<td>[ <a href=login_form.php>분식</a> ]</td>
				<td>[ <a href=food\cafe\food_cafe.php>카페/디저트</a> ]</td>
				<td>[ <a href=login_form.php>일식</a> ]</td>
				<td>[ <a href=login_form.php>치킨</a> ]</td></tr>

			<tr align="center">
			<td><?php echo "<img src='img/imgMain/pizza.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/asian.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/chinesefood.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/burger.png' width='100'/>"; ?></td>
			<td><?php echo "<img src='img/imgMain/convenience.png' width='100'/>"; ?></td>
			</tr>

			<tr align="center">
				<td>[ <a href=login_form.php>피자</a> ]</td>
				<td>[ <a href=login_form.php>아시안/양식</a> ]</td>
				<td>[ <a href=login_form.php>중국집</a> ]</td>
				<td>[ <a href=login_form.php>패스트푸드</a> ]</td>
				<td>[ <a href=login_form.php >편의점</a> ]</td>
				
			</tr>
			
		</table>
	</tr>
</table></form>
</body>
</html>
