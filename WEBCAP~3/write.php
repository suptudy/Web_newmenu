<!DOCTYPE>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
    table.table2{
        border-collapse: separate;
        border-spacing: 10px;
        line-height: 1.5;
        border-top: 1px solid #ccc;
        margin : 20px 10px;
    }
    table.table2 tr {
        width: 10px; 
        padding: 10px;
        font-weight: bold;
        vertical-align: top;
        border-bottom: 1px solid #ccc;
    } 

    .star-rating {
    border:solid 1px #ccc;
    display:flex;
    flex-direction: row-reverse;
    font-size:1.5em;
    justify-content:space-around;
    padding:0 .2em;
    text-align:center;
    width:5em;
    }

    .star-rating input {
    display:none;
    }

    .star-rating label {
    color:#ccc;
    cursor:pointer;
    }

    .star-rating :checked ~ label {
    color:#f90;
    }

    .star-rating label:hover,
    .star-rating label:hover ~ label {
    color:#fc0;
    }

    a{
        color: black;
    }
</style>
<body>
        <form method = "get" action = "write_action.php">
        <table  style="padding-top:20px" align = center width=780 border=0 cellpadding=2>
                <caption align="right"><a href="main.php" target="_top"><h1>신메뉴의 정석</h1></a></caption>
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white>후기작성란</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = "text" name ="post_name" size=90> </td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = "text" name ="post_title" size=90></td>
                        </tr>

                        <tr>
                        <td>별점</td>
                        <td><div class="star-rating">
                        <input type="radio" id="5-stars" name="rating" value="5" />
                        <label for="5-stars" class="star">&#9733;</label>
                        <input type="radio" id="4-stars" name="rating" value="4"/>
                        <label for="4-stars" class="star">&#9733;</label>
                        <input type="radio" id="3-stars" name="rating" value="3" />
                        <label for="3-stars" class="star">&#9733;</label>
                        <input type="radio" id="2-stars" name="rating" value="2"/>
                        <label for="2-stars" class="star">&#9733;</label>
                        <input type="radio" id="1-star" name="rating" value="1" />
                        <label for="1-star" class="star">&#9733;</label>
                        </div></td>
                        </tr>

                        <tr>
                        <td>내용</td>
                        <td><textarea name = "content" cols=85 rows=15></textarea></td>
                        </tr>

                        <tr>
                        <td>카테고리</td>
                        <td><select name="categories">
			            <option value="한식">한식</option>
			            <option value="분식">분식</option>
			            <option value="카페/디저트">카페/디저트</option>
		                <option value="일식">일식</option>
			            <option value="치킨">치킨</option>
                        <option value="피자">피자</option>
			            <option value="아시안/양식">아시안/양식</option>
                        <option value="중국집">중국집</option>
			            <option value="패스트푸드">패스트푸드</option>
                        <option value="편의점">편의점</option>
                        </select></td>
                        </tr>

                        <tr>
                        <td>브랜드</td>
                        <td><input type = "text" name ="brand" size=90
                            placeholder="ex. 스타벅스"> </td>
                        </tr>

                        <tr>
                        <td>음식이름</td>
                        <td><input type = "text" name ="menu_name"size=90 
                            placeholder="ex. 아메리카노"> </td>
                        </tr>
                        </table>
 
                        <center>
                        <input type = "submit" value="작성">
                        </center>
        </table>
        </form>          
</body>
</html>