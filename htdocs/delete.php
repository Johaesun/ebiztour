<?php
	include "./htdocs/db.php";
	$idx=$_GET['idx'];
	$sql="delete from test_jhs where idx='$idx'";
	$result = mysql_query($sql, $dbconn) or die("Error querying database.");
  ?>
<script>
location.href='./index.php'
alert ("삭제되었습니다.");
</script>