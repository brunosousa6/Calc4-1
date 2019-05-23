<?php
define ("DB_HOST", "calcdemo.mysql.database.azure.com"); // set database host
define ("DB_USER", "adm@calcdemo"); // set database user
define ("DB_PASS","111213calc@"); // set database password
define ("DB_NAME","login"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
?>