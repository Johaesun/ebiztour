<?php
	include "./htdocs/db.php";
	$update = "update test_jhs set 
	title='{$_POST['title']}',
	notice='{$_POST['notice']}' 
	where idx='{$_GET['idx']}'";
	$result = mysql_query($update,$dbconn);
?>
<script type="text/javascript">
location.href='./index.php';
alert ("������ �Ϸ�Ǿ����ϴ�.");
</script>