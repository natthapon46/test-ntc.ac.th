<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbcon = "localhost";
$database_dbcon = "bookingre";
$username_dbcon = "root";
$password_dbcon = "2109254120";
$dbcon = mysql_pconnect($hostname_dbcon, $username_dbcon, $password_dbcon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>