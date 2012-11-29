<?php



$cnx=connect($config['database.server'],
		$config['database.db'],
		$config['database.user'],
		$config['database.password']
);




if(!isset($_GET['controller']))
	$controller='index';
else
{
	
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/../application/controllers/".
				  $_GET['controller'].".php"))
		$controller=$_GET['controller'];
	else
		$controller='error';
}

switch($controller)
{
	case 'users':
		include_once("../application/controllers/users.php");
	break;
	case 'projects':
		include_once("../application/controllers/projects.php");
	break;
	case 'error':
		include_once("../application/controllers/error.php");
	break;
	case 'index':
	default:
		die("aqui");
	break;
}



