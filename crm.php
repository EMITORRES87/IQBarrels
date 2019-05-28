<?php require_once('Connections/clientes.php'); ?>
<?php require_once('Connections/ventas.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_crm = 10;
$pageNum_crm = 0;
if (isset($_GET['pageNum_crm'])) {
  $pageNum_crm = $_GET['pageNum_crm'];
}
$startRow_crm = $pageNum_crm * $maxRows_crm;

mysql_select_db($database_clientes, $clientes);
$query_crm = "SELECT * FROM clientes";
$query_limit_crm = sprintf("%s LIMIT %d, %d", $query_crm, $startRow_crm, $maxRows_crm);
$crm = mysql_query($query_limit_crm, $clientes) or die(mysql_error());
$row_crm = mysql_fetch_assoc($crm);

if (isset($_GET['totalRows_crm'])) {
  $totalRows_crm = $_GET['totalRows_crm'];
} else {
  $all_crm = mysql_query($query_crm);
  $totalRows_crm = mysql_num_rows($all_crm);
}
$totalPages_crm = ceil($totalRows_crm/$maxRows_crm)-1;

$maxRows_crm2 = 10;
$pageNum_crm2 = 0;
if (isset($_GET['pageNum_crm2'])) {
  $pageNum_crm2 = $_GET['pageNum_crm2'];
}
$startRow_crm2 = $pageNum_crm2 * $maxRows_crm2;

mysql_select_db($database_ventas, $ventas);
$query_crm2 = "SELECT * FROM ventas";
$query_limit_crm2 = sprintf("%s LIMIT %d, %d", $query_crm2, $startRow_crm2, $maxRows_crm2);
$crm2 = mysql_query($query_limit_crm2, $ventas) or die(mysql_error());
$row_crm2 = mysql_fetch_assoc($crm2);

if (isset($_GET['totalRows_crm2'])) {
  $totalRows_crm2 = $_GET['totalRows_crm2'];
} else {
  $all_crm2 = mysql_query($query_crm2);
  $totalRows_crm2 = mysql_num_rows($all_crm2);
}
$totalPages_crm2 = ceil($totalRows_crm2/$maxRows_crm2)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFFFFF;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: 3EE0F6;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #3EE0F6;
}

.active {
  background-color: #3EE0F6;
}

.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style3 {font-size: 44px}
.style4 {font-size: 24px}
.style7 {color: #FFFFFF}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #3399CC; }
.style11 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
.style19 {color: #FFFFFF; font-size: 16px; }
</style>
</head>

<body background="imagenes/blurbg.jpg">

<ul>
  <li><a class="active" href="inicio.php">Inicio</a></li>
  <li><a href="catalogo.php">Catalogo</a></li>
  <li><a href="contactanos.php">Contactanos</a></li>
  <li><a href="crm.php">CRM</a></li>
  <li style="float:right"><a href="quienessomos.php">IQBarrels</a></li>
</ul>

<p align="center" class="style1 style3">CRM</p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style8">Clientes</p>
<p align="center" class="style1">&nbsp;</p>

<table width="526" height="75" border="1" align="center">
  <tr>
    <td><span class="style11">ID</span></td>
    <td><span class="style11">Nombre</span></td>
    <td><span class="style11">Correo</span></td>
    <td><span class="style11">Edad</span></td>
    <td><span class="style11">Pais</span></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><span class="style19"><?php echo $row_crm['ID']; ?></span></td>
      <td><span class="style19"><?php echo $row_crm['Nombre']; ?></span></td>
      <td><span class="style19"><?php echo $row_crm['Correo']; ?></span></td>
      <td><span class="style19"><?php echo $row_crm['Edad']; ?></span></td>
      <td><span class="style19"><?php echo $row_crm['Pais']; ?></span></td>
    </tr>
    <?php } while ($row_crm = mysql_fetch_assoc($crm)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style8">Ventas</p>
<p align="center" class="style1">&nbsp;</p>

<p align="center" class="style2"><a href="inicio.php" class="style4" style="color:#FFFFFF;"></a></p>

<table width="650" height="72" border="1" align="center">
  <tr>
    <td width="66"><span class="style11">ID</span></td>
    <td width="106"><span class="style11">Producto</span></td>
    <td width="172"><span class="style11">Cliente</span></td>
    <td width="184"><span class="style11">Fecha de entrega</span></td>
    <td width="88"><span class="style11">Costo</span></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><span class="style7"><?php echo $row_crm2['ID']; ?></span></td>
      <td><span class="style7"><?php echo $row_crm2['Producto']; ?></span></td>
      <td><span class="style7"><?php echo $row_crm2['Cliente']; ?></span></td>
      <td><span class="style7"><?php echo $row_crm2['Fecha de entrega']; ?></span></td>
      <td><span class="style7"><?php echo $row_crm2['Costo']; ?></span></td>
    </tr>
    <?php } while ($row_crm2 = mysql_fetch_assoc($crm2)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($crm);

mysql_free_result($crm2);
?>
