<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_clientes = "localhost";
$database_clientes = "iqbarrels";
$username_clientes = "root";
$password_clientes = "";
$clientes = mysql_pconnect($hostname_clientes, $username_clientes, $password_clientes) or trigger_error(mysql_error(),E_USER_ERROR); 
?>