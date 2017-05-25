<?php
	include "./htdocs/db.php";
	$update = "update test_jhs set 
	title='{$_POST['title']}',
	notice='{$_POST['notice']}' 
	where idx='{$_GET['idx']}'";
	$result = mysql_query($update,$dbconn);
	$count = "update test_jhs set count=count-1 where idx='{$_GET['idx']}'"; 
   mysql_query ($count, $dbconn);
?>
<script type="text/javascript">
location.href='./index.php';
alert ("수정이 완료되었습니다.");
</script>