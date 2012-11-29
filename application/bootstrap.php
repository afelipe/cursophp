<?php



$cnx=connect($config['database.server'],
		$config['database.db'],
		$config['database.user'],
		$config['database.password']
);




if(!isset($_GET['controller']))
	$controller='index';
else
	$controller=$_GET['controller'];

switch($controller)
{
	case 'users':
		include_once("../application/controllers/users.php");
	break;
	case 'projects':
		include_once("../application/controllers/projects.php");
	break;
	default:
		die("aqui");
	break;
}



