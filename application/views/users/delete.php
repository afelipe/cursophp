<!DOCTYPE html>
<html lang="es">
<head>
<title>Proyecto Formulario - Formulario</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noarchive,noodp,noydir">
<meta name="description" content="Un formulario en html">
<meta name="keywords" content="formulario, datos de formulario, html">
</head>
<body>
<form method="POST"
	  enctype="multipart/form-data">
<ul>
	<li>
		id:<input type="hidden" value="<?=$_GET['id'];?>" name="id"/>
	</li>
	
	<li>
		submit:<input type="submit" name="Submit" value="si"/>
	</li>
	<li>
		submit:<input type="submit" name="Submit" value="no"/>
	</li>
</ul>
</form>
</body>
</html>

