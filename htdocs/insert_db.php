<?php
	include "./htdocs/db.php";
	$today = date("y-m-d");
	$insert = "insert into test_jhs set title='{$_POST['title']}', notice='{$_POST['notice']}, date='{$today}''";
	$result=mysql_query($insert)
	
	//echo "<script>location.href='index.php'</script>";
?>