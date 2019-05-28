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
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {

  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
  margin-left:380px;
}

</style>
</head>

<body background="imagenes/bgcont.jpg">

<ul>
  <li><a class="active" href="inicio.php">Inicio</a></li>
  <li><a href="catalogo.php">Catalogo</a></li>
  <li><a href="contactanos.php">Contactanos</a></li>
  <li><a href="crm.php">CRM</a></li>
  <li style="float:right"><a href="quienessomos.php">IQBarrels</a></li>
</ul>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center" class="style1">Contactanos</div>

<div>
  <form action="contactanos.php">
    <label for="fname">Nombres</label>
    <input type="text" id="fname" name="firstname" placeholder="Tu nombre...">

    <label for="lname">Apellidos</label>
    <input type="text" id="lname" name="lastname" placeholder="Tus apellidos...">
	
	<label for="lname">Correo Electronico</label>
    <input type="text" id="lname" name="lastname" placeholder="Correo electronico...">

    <label for="country">Pais</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
	  <option value="mexico">Mexico</option>
	  <option value="colombia">Colombia</option>
	  <option value="argentina">Argentina</option>
	  <option value="chile">Chile</option>
    </select>
  
    <input type="submit" value="Solicitar">
  </form>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>
