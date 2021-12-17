// sql문 저장용 파일 

$sql = "create table tb_categories ( 
		categories_num int(1) not null primary key,
        categories_name varchar(10) not null)
	    default charset=utf8 ";

$sql = "create table tb_eatery (
        eatery_name varchar(30) not null primary key,
        categories_num int(1) not null,
        foreign key(categories_num) references tb_categories(categories_num))
        default charset=utf8";

$sql = "create table tb_menus (
        menu_name varchar(30) not null primary key,
        eatery_name varchar(30) not null,
        categories_num int(1) not null,
        eatery_price int(8) not null,
        eatery_intro text not null,
        eatery_date varchar, // 추가한 사항
        eatery_photo varchar(50),
        foreign key(eatery_name) references tb_eatery(eatery_name),
        foreign key(categories_num) references tb_categories(categories_num))
        default charset=utf8";

$sql = "create table tb_postscript(
number int unsigned not null primary key auto_increment,
post_writer varchar(30),
post_title varchar(150),
post_star varchar(5),
post_content text,
post_categories varchar(30),
post_date datetime,
eatery_name varchar(100),
menu_name varchar(200),
hit int unsigned not null default 0
)default charset=utf8";