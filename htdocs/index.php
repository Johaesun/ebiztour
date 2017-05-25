<?php
   include './htdocs/db.php';
   $sql = "select * from test_jhs order by idx desc";
   $result = mysql_query($sql, $dbconn);
?>
<!DOCTYPE HTML>
<html lang="en-ko">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
	*{margin:0; padding:0; box-sizing:border-box; }
	h1{width:100%; text-align:center; padding:30px 0px; margin-top:20px;}
		h1 a{text-decoration:none; color:#000;}
	.wrap{width:700px; margin:0 auto;}
	table{border:1px solid #000; width:700px; margin:0 auto; text-align:center;}
		table tr:hover{background:#f5f5f5 }
		table tr th:first-child{width:10%}
		table tr th:nth-child(3){width:15%;}
		table tr th:nth-child(2){width:60%;}
		table tr th:last-child{width:10%;}
		table tr td{text-align:center; font-size:0.9em}
			table tr td a{text-decoration:none; color:#000;}
					table tr td a:hover{text-decoration:underline; color:#000;}
	button {float:right}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <h1>
        <a href="index.php">
            <p>게시판:)</p>
        </a>
    </h1>
    <div class="wrap">
        <a href="insert.php"><button>글쓰기</button></a>

        <table>
            <tr>
				<th>idx</th>
                <th>title</th>
				<th>date</th>
                <th>count</th>
            </tr>
            <?php
					while ($row = mysql_fetch_array($result)){
				?>
                <tr>
					<td>
						<?=$row['idx']?>
					</td>
                    <td>
                        <a href="view.php?idx=<?=$row['idx']?>">
                            <?=$row["title"]?>
                        </a>
                    </td>
					<td>
                        <?=$row["date"]?>
                    </td>
                    <td>
                        <?=$row["count"]?>
                    </td>
                </tr>
                <?php
					}
				?>
        </table>
    </div>
</body>
</html>
