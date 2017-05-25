<?php
$dbconn = @mysql_connect("210.112.11.172:3306", "ebiztour", "ebiztour!!@#^^#@!!~") or die("데이타베이스 연결 실패.");
$selectdb = @mysql_select_db("go", $dbconn) or die("데이타베이스 선택 에러."); 
@mysql_query("set names utf8");
?>