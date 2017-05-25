<?php
	include "./htdocs/db.php";
	$idx=$_GET['idx'];
	$sql="delete from test_jhs where idx='$idx'";
	$result = mysql_query($sql, $dbconn) or die("Error querying database.");
	/*  idx값 초기화
	alter table test_jhs auto_increment= 1;
	truncate table test_jhs; */
  ?>
<script>
location.href='./index.php'
alert ("삭제되었습니다.");
</script>