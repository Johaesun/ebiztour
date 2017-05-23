<?php
   include './htdocs/db.php';
   $sql = "select * from test_jhs where idx='{$_GET['idx']}'";
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
			.this{background-color:gray}
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
						조회수 &#58; <?=$row['count']?>
					</p>
				</td>
			</tr>
			<tr>
				<td class="notice">
					<?=$row['notice']?>
				</td>
			</tr>
		</table>
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
</ul>
		</div>
</body>
<script type="text/javascript">
	<?php
			$sql = "select * from test_jhs order by idx desc";
			$result = mysql_query($sql, $dbconn);
				while($row = mysql_fetch_array($result)){
			?>
		if($(".see li p."))
	<?php
					}
			?>
</script>
</html>