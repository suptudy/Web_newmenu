<?php // 수정 필요함!!
    include "connect_db.php";

    $writer = $_GET['post_name'];   //Writer
    $post_title = $_GET['post_title'];    //Title
    $post_star = $_GET['rating'];
    $post_content = $_GET['content'];   //Content
    $post_categories = $_GET['categories']; //categories
    $eatery_name = $_GET['brand'];   //브랜드
    $menu_name = $_GET['menu_name']; // 음식이름
    

    $URL = './reviewBoard.php';                   //return URL !!!  수정 필요 게시판으로
 /*  --------    PHP와 MySQL 한글 깨짐 방지  --------   */
mysqli_query($connect, "set session character_set_connection=utf8;");		 
mysqli_query($connect, "set session character_set_results=utf8;");		 
mysqli_query($connect, "set session character_set_client=utf8;");	

    $sql="insert into tb_postscript(number, post_writer, post_title, post_star,
        post_content, post_categories, post_date, eatery_name, menu_name, hit)";
    $sql.="values(null, '$writer', $post_title', '$post_star', 
            '$post_content', '$post_categories', now(), 
            '$eatery_name', '$menu_name', 0)";
    $result=mysqli_query($connect, $sql);

    if($result){
?>      <script>
            alert("<?php echo "글이 등록되었습니다."?>");
            location.replace("<?php echo $URL?>");
        </script>
<?php
    }else{
        echo "실패";
    }
    mysqli_close($connect);
?>
