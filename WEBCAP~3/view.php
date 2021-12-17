<?php
                include "connect_db.php";
                $number = $_GET['number'];
                session_start();
                $sql = "select post_title, post_content, post_date, hit, 
                        post_writer from tb_postscript where number =$number";
                $result=mysqli_query($connect, $sql);
                $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table class="view_table" border="1" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['post_title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['post_writer']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['post_content']?></td>
        </tr>
        </table>
 
 
<!-- MODIFY & DELETE -->
<div class="view_btn">
        <button class="view_btn1" onclick="location.href='./reviewBoard.php'">목록으로</button>
        <!--<button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
 
        <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
        -->
</div>
