<?php
    $connect = mysqli_connect ('localhost', 'root', '1234');
	mysqli_select_db ($connect,'newmenu_db');                 // 질의 수행

	$sql = "select * from tb_menus where menu_brand='gong-cha'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

	$row_count = mysqli_num_rows($result);                 // 레코드 개수 구하기
	$fields_count = mysqli_num_fields ($result);

    echo " test mysql 서버 접속상태 : [성공] "; // 확인용
	echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>신메뉴의 정석/공차</title> <!-- 밑의 링크 추가함 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="min-height: calc(100vh - 136px);">
<!-- 그룹 태그로 role과 aria-multiselectable를 설정한다. -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- 하나의 item입니다. data-parent 설청과 href 설정만 제대로 하면 문제없이 작동합니다. -->
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
신메뉴
</a>
</div>
<div id="collapse1" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
    while ($rows=mysqli_fetch_array($result)) {    // 신메뉴
        if($rows[1]=='1') {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
        //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {continue;}
    }
?>
</table>
</div>
</div>
</div>
<!-- -->
<!-- 하나의 item입니다. -->
<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
season_menu
</a>
</div>
<div id="collapse2" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='season_menu'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) { 
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
best combination
</a>
</div>
<div id="collapse3" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='best_combination'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "best_combination") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
original tea
</a>
</div>
<div id="collapse4" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='original_tea'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "original_tea") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false">
milk tea
</a>
</div>
<div id="collapse5" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='milk_tea'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "milk_tea") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }   
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false">
jewelry
</a>
</div>
<div id="collapse6" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='jewelry'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "jewelry") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false">
fruit_mixer
</a>
</div>
<div id="collapse7" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='fruit_mixer'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "fruit_mixer") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false">
smoothie
</a>
</div>
<div id="collapse8" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='smoothie'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "smoothie") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false">
coffee
</a>
</div>
<div id="collapse9" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='coffee'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "coffee") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false">
bakery
</a>
</div>
<div id="collapse10" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='bakery'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "bakery") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }    
?>
</table>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false">
dessert
</a>
</div>
<div id="collapse11" class="panel-collapse collapse" role="tabpanel">
<div class="panel-body">
<table  width="400" border="1" align="center">  <!확인용 border=1>
       <tr align="center">
<?php
	$sql = "select * from tb_menus where menu_brand='gong-cha' and menu_type='dessert'";                          // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);              // 질의 수행
    $count = mysqli_num_fields ($result);

    while ($rows=mysqli_fetch_array($result)) {   
        if($rows[4] === "dessert") {
            echo "<td><center><img src='$rows[3]' style='max-width: 100%; height: auto;'/></center></td>"; 
            //메뉴 사진
            echo "</tr>";
            echo "<tr align='center'>";
            echo "<td><h4>$rows[2]</h4></td>";  // 메뉴 이름
            echo "</tr>";
            echo "<tr>";
            //echo "<td>".date("Y년 m월")." 출시</td>";  // 메뉴 설명
            echo "</tr>";
        }else {
            echo "해당 정보가 존재하지 않습니다";
            break;
        }
    }  
    mysqli_close($connect);  
?>
</table>
</div>
</div>
</div>

</div>
</div>
</body>
</html>
