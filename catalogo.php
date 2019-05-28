<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<title>Untitled Document</title>

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
	font-size: 44px;
	font-weight: bold;
}

div.container {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
padding:0px;
}

div.espacio {
padding:15px;
}
</style>

</head>

<body background="imagenes/bgcat3.jpg">

<ul>
  <li><a class="active" href="inicio.php">Inicio</a></li>
  <li><a href="catalogo.php">Catalogo</a></li>
  <li><a href="contactanos.php">Contactanos</a></li>
  <li><a href="crm.php">CRM</a></li>
  <li style="float:right"><a href="quienessomos.php">IQBarrels</a></li>
</ul>

<center>
<p>&nbsp;</p>
<p align="center" class="style1">CATALAGO</p>
<table>
<tr>
<td>
<br>
<br>
<div class="espacio">
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/card1.png" alt="Card image" style="width:108%">
    <div class="card-body">
      <h4 class="card-title">Pagina Web</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
  <td>
  <br>
  <br>
  <div class="espacio">
  <div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/card2.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Aplicacion</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
  <td>
<br>
<br>
<div class="espacio">
	<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/so.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Sistema Operativo</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
</tr>

<tr>

<td>
<br>
<br>
<div class="espacio">
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/card1.png" alt="Card image" style="width:108%">
    <div class="card-body">
      <h4 class="card-title">Pagina Web</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
  <td>
<br>
<br>
<div class="espacio">
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/card1.png" alt="Card image" style="width:108%">
    <div class="card-body">
      <h4 class="card-title">Pagina Web</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
  <td>
<br>
<br>
<div class="espacio">
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="imagenes/card1.png" alt="Card image" style="width:108%">
    <div class="card-body">
      <h4 class="card-title">Pagina Web</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">Comprar</a>
	  </div>
    </div>
  </div>
  </div>
  </td>
  
  
  </tr>
</center>
</table>
</body>
</html>
