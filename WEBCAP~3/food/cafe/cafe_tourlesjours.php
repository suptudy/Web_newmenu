<?php
    $connect = mysqli_connect ('localhost', 'root', '1234');
	mysqli_select_db ($connect,'newmenu_db');                 // 질의 수행

	$sql = "select *from tb_menus";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

	$row_count = mysqli_num_rows($result);                 // 레코드 개수 구하기
	$fields_count = mysqli_num_fields ($result);

    echo " test mysql 서버 접속상태 : [성공] ";
	echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>신메뉴의 정석/뚜레쥬르</title>
</head>
<body>
    <table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php // 이미지 클릭하면 해당 정보창 오른쪽에 보일 수 있게 + 후기 페이지로 넘어갈 수 있게 생성
    while ($rows=mysqli_fetch_array($result)) {    // 레코드의 개수만큼 반복
        echo "<td><img src='$rows[6]' style='max-width: 100%; height: auto;'/></td>"; //메뉴 사진
?>
        </tr>
        <tr align="center">
<?php
        echo "<td><h4>$rows[0]</h4></td>";  // 메뉴 이름
        echo "</tr>";
        echo "<tr>";
        echo "<td>$rows[4]</td>";  // 메뉴 설명
        echo "</tr>";
    }
?>

</table><br>
    </table>
</body>
</html>
