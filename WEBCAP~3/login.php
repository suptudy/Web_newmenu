<?php
include "session.php";             //세션 선언 파일 호출
include "connect_db.php";          //DB접속 파일 호출

$sql="select * from tb_member where member_id = '$fuserid' and member_pw='$fpasswd'            ";
$res=mysqli_query($connect, $sql);
$list = mysqli_num_rows($res);

if($list)         //일치하는 사용자 레코드 수가 1건 이상이면
{
	$row = mysqli_fetch_array($res);
	$ses_userid = $row['member_id'];
	$ses_pass = $row['member_pw'];	

	echo "<center><br><font size=4><b> 로그인을 성공하였습니다. 
	</b></font><br><hr>";
} else {
	echo " <center><br><h3> ?? 아이디 또는 비밀번호가 틀립니다 ??</h3> </center><hr>";
	echo "<script>
		alert('[로그인 실패]\\r\\n로그인 화면으로 이동할까요?');
		location.replace('login_form.php');
		</script>";
}
mysqli_close($connect);
?>

<html>
<head><title> 로그인 성공 메시지 </title></head>
<body>
<form name="login_form_msg">
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
	<tr bgcolor=#3300CC>
		<td align="center"><font color=#FFFFFF> 
			▶▶▶ &nbsp;&nbsp; <b> 회원 전용 페이지 </b> &nbsp;&nbsp; ◀◀◀ </font>
		</td>
	</tr>
	<tr height="180"bgcolor=#FFFFCC>
		<td width="40%" align="center">
	[  <b><?php  echo $ses_userid;  ?></b>  ] 
	님 로그인이 완료 되셨습니다<br><br>다양한 신메뉴들을 경험하고 후기를 남겨보세요! </td>
	</tr>
	<tr bgcolor=#CCCCFF><td align="center">
			<input type="button" name="Button" value=" 로그아웃 " onClick="location.replace('logout.php')">
			<input type="button" name="Button" value=" 신메뉴 둘러보기 " onClick="location.replace('main.php')">
	</tr>
</table></form>
</body>
</html>