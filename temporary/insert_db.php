<?php
   include "./htdocs/db.php";
   $arrEn = array("title","notice");
   $arrKo = array("title","notice");
   $error = "";

    foreach($arrEn as $key => $row){
        if(trim($_POST[$row]) == "") $error.= $arrKo[$key]."를 작성해주세요. \\r";
    }

echo $error;
   if($error != ""){
       echo "<script>alert('{$error}'); history.go(-1);</script>";
   }else{
      $today = date("y-m-d");
      $insert = "insert into test_jhs set date='{$today}',title='{$_POST['title']}',notice='{$_POST['notice']}',count='0'";
      $result=mysql_query($insert);
      echo "<script>alert('작성되었습니다.');</script>";
	  echo "<script>location.href='index.php'</script>";
   }
?>