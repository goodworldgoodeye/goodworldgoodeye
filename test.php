<?php
$connect = mysql_connect ("localhost","userid","passwd") or die ("DB에 연결실패");

if(!$connect) die('Not connected : ' . mysql_error());

mysql_select_db ("dbname",$connect);

mysql_close($connect);
?>
