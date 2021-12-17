<!DOCTYPE html>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>
<?php
        include "connect_db.php";
        $sql ="select * from tb_postscript order by number desc";
        $result=mysqli_query($connect, $sql);
        $total = mysqli_num_rows($result);
 
        ?>
        <center><a href="main.php" target="_top"><h1>신메뉴의 정석</h1></a></center>
        <h2 align=center>후기 게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">브랜드</td>
        <td width = "100" align = "center">메뉴이름</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['post_title']?></td>
                <td width = "100" align = "center"><?php echo $rows['eatery_name']?></td>
                <td width = "100" align = "center"><?php echo $rows['menu_name']?></td>
                <td width = "100" align = "center"><?php echo $rows['post_writer']?></td>
                <td width = "200" align = "center"><?php echo $rows['post_date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        <div>
        
        <div class = text>
        <font style="cursor: hand"onClick="location.href='./main.php'">홈</font>
        <div>
</body>
</html>
 