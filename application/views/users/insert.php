<?php 
$user=$params['users'];

$arrayPets=$params['arrayPets'];
$arrayLanguages=$params['arrayLanguages'];
$arrayCoders=$params['arrayCoders'];
$arrayCities=$params['arrayCities'];

$defaultValuesPets=$params['defaultValuesPets'];
$defaultValuesLanguages=$params['defaultValuesLanguages'];
$defaultValuesCoders=$params['defaultValuesCoders'];
$defaultValuesCities=$params['defaultValuesCities'];

?>
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
		id:<input type="hidden" value="1" name="id"/>
	</li>
	<li>
		nombre:<input type="text" name="name" value="<?=$user[1];?>"/>
	</li>
	<li>
		email:<input type="text" name="email" value="<?=$user[2];?>"/>
	</li>
	<li>
		password:<input type="password" name="password"/>
	</li>
	<li>
		descripcion:<textarea rows="6" cols="6" name="description" ><?=$user[4];?></textarea>
	</li>
	<li>	
		mascotas:<?=selectMultipleHelper('pet', $arrayPets, $defaultValuesPets, TRUE);?>
	</li>
	<li>
		ciudad:<?=selectMultipleHelper('cities', $arrayCities, $defaultValuesCities, FALSE);?>
	</li>
	<li>
		lenguaje:<?=checkHelper('coders', $arrayCoders, $defaultValuesCoders, FALSE);?>
	</li>
	<li>
		idiomas:<?=checkHelper('languages', $arrayLanguages, $defaultValuesLanguages, TRUE);?>
	</li>
	<li>
		foto:<input type="file" name="photo"/>
		<img src="uploads/<?=$user[10];?>" style="width:150px;"/>
	</li>
	<li>
		submit:<input type="submit" name="submit"/>
	</li>
	<li>
		reset:<input type="reset"/>
	</li>
</ul>
</form>
</body>
</html>

