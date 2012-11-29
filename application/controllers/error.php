<?php 


// Inicializa 
$user=initializeUserArray();
$filename=$_SERVER['DOCUMENT_ROOT'].$config['users_filename'];

if(!isset($_GET['action']))
	$action='index';
else
	$action=$_GET['action'];

switch($action)
{
	case 'index':
	default:
		header("HTTP/1.0 404 Not Found");
		$content=renderView($config, array(), '/error/index');
	break;
					
}
// Incluir Layout
include_once("../application/layouts/layout_admin2.php");
