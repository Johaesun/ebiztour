<?php
	include "./htdocs/db.php";
	$sql = "select * from test_jhs";
	$result=mysql_query($sql, $dbconn);
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
	table{border:1px solid #000; width:700px; margin:0 auto;}
		table tr th:first-child{width:15%;}
		table tr th:nth-child(2){width:70%;}
		table tr th:last-child{width:15%;}
		table tr td p{float:left; padding-right:10px}
			table tr td:nth-child(2){text-align:left;}
				table tr td a{text-decoration:none; color:#000;}
				table tr td a:hover{text-decoration:underline; color:#000;}
		table tr .notice{width:100%; height:400px; overflow: scroll; margin:0 auto; border-top:1px solid gray}
	</style>
</head>
<body>
<h1>
	<a href="index.php">
		<p>게시판:)</p>
	</a>
</h1>
		<table>
			<tr>
				<td>글제목 &#58; <input type="text" /></td>
			</tr>
		</table>
</body>
</html>