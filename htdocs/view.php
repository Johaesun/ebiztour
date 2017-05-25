<?php
   include './htdocs/db.php';
   $idx=$_GET['idx'];
   $sql="select * from test_jhs where idx='$idx'";
   $result = mysql_query($sql, $dbconn);
   $count = "update test_jhs set count=count+1 where idx='{$_GET['idx']}'"; 
   mysql_query ($count, $dbconn);
?>
<!DOCTYPE HTML>
<html lang="en-ko">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
	*{margin:0; padding:0; box-sizing:border-box;}
	h1{width:100%; text-align:center; padding:30px 0px; margin-top:20px;}
		h1 a{text-decoration:none; color:#000;}
		.wrap{width:700px; margin:0 auto;}
	table{border:1px solid #000; width:700px; margin:0 auto;}
		table tr th:first-child{width:15%;}
		table tr th:nth-child(2){width:70%;}
		table tr th:last-child{width:15%;}
		table tr td p{float:left; padding-right:10px}
			table tr td:nth-child(2){text-align:left;}
				table tr td a{text-decoration:none; color:#000;}
				table tr td a:hover{text-decoration:underline; color:#000;}
		table tr .notice{width:100%; height:400px; overflow: scroll; margin:0 auto; border-top:1px solid gray}
	.btn_wrap{float:right;}
		button:{width:75px; height:50px; line-height:30px; margin-left:30px;}
		button a{width:75px; height:50px;}
	.see{width:700px; border-top:#e8e8e8; margin-top:50px; background-color:#e8e8e8;}
		.see li{list-style:none;  width:100%; height:30px; line-height:30px; border-bottom:1px solid #000; padding-left:20px;}
		.see li:first-child{font-weight:bold}
			.see li p{float:left; margin-right:10px}
			.this{background:#d9d9d9}
			.this p{text-decoration:underline;  font-weight:bold}
	</style>
</head>
<body>
    <h1>
        <a href="index.php">
            <p>게시판:)</p>
        </a>
    </h1>
    <div class="wrap">
        <?php
		while ($row = mysql_fetch_array($result)){
	?>
	<form action="update.php?idx=<?=$row['idx']?>">
            <table>
                <tr>
                    <td>
                        <p>
                            글제목 &#58; <span><?=$row['title']?></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="dc">
                        <p>
                            <?=$row['date']?>
                        </p>
                        <p>
                            조회수 &#58;
                            <?=$row['count']+1?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="notice">
                        <?=$row['notice']?>
                    </td>
                </tr>
            </table>
			</form>
            <?php
		}
	?>
            <div class="btn_wrap">
                <a href="index.php">
                    <button>뒤로가기</button>
                </a>
                <a href="delete.php?idx=<?=$row['idx']?>">
                    <button>삭제</button>
                </a>
                <a href="update.php?idx=<?=$row['idx']?>">
                    <button>수정</button>
                </a>
            </div>
            <ul class="see">
                <li>
                    <p>idx</p>
                    <p>title</p>
                    <p>date</p>
                    <p>count</p>
                </li>
                <?php
			 $sql_sub= "select * from test_jhs order by idx limit 0,5";
			 $result_sub = mysql_query($sql_sub, $dbconn);
			while($row_sub=mysql_fetch_array($result_sub)){
				if($idx==$row_sub['idx']){
					?>
                    <li class='this'>
                        <p>
                            <?=$row_sub['idx']?>
                        </p>
                        <p>
                            <a href="view.php?idx=<?=$row_sub['idx']?>">
                                <?=$row_sub['title']?>
                            </a>
                        </p>
                        <p>
                            <?=$row_sub['date']?>
                        </p>
                        <p>
                            <?=$row_sub['count']?>
                        </p>
                    </li>
                    <?php
				}	else{
						?>
                    <li>
                        <p>
                            <?=$row_sub['idx']?>
                        </p>
                        <p>
                            <a href="view.php?idx=<?=$row_sub['idx']?>">
                                <?=$row_sub['title']?>
                            </a>
                        </p>
                        <p>
                            <?=$row_sub['date']?>
                        </p>
                        <p>
                            <?=$row_sub['count']?>
                        </p>
                    </li>
                    <?php
				}
				?>
                    <?php
			}
		?>

            </ul>
    </div>
</body>
<script type="text/javascript">


</script>

</html>
