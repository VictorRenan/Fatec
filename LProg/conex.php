<?php
  $host = "localhost";
     $user = "root";
     $senha1 = "";
     $dbname = "database";
     $db = "dados";
     
     $db = mysql_pconnect($host,$user,$senha1);
     $banco = mysql_select_db($dbname,$db);
?>