<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ventas = "localhost";
$database_ventas = "iqbarrels";
$username_ventas = "root";
$password_ventas = "";
$ventas = mysql_pconnect($hostname_ventas, $username_ventas, $password_ventas) or trigger_error(mysql_error(),E_USER_ERROR); 
?>