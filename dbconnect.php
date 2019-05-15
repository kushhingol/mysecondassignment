<?php

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

if(! $db ) {
      die('Could not connect: ' . mysql_error());
   }

?>