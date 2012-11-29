<?php 

if(!isset($_GET['action']))
	$action='select';
else
	$action=$_GET['action'];

switch($action)
{
	case 'update':
// 		Mostrar formulario lleno
		if($_POST)
		{
			$photoName=renameUserPhoto($_FILES,$config['uploads_dir']);
			
			updateToFile($photoName, $_GET['id'],$filename );
			header("location: users.php");
			exit();
		}
		else
		{
			$user=readUser($_GET['id'], $filename); 			
		}
	case 'insert':		
// 		Mostrar formulario vacio
		if($_POST)
		{				
			$photoName=renameUserPhoto($_FILES,$config['uploads_dir']);
			$_POST['photo']=$photoName;
			insertUser($cnx,$_POST);
			header("location: users.php");
			exit();
		}
		else
		{
			$arrayPets=readPets($cnx);
			$arrayLanguages=readLanguages($cnx);
			$arrayCoders=readCoders($cnx);
			$arrayCities=readCities($cnx);
			
			$params=array('users'=>$user,
						'arrayPets'=>$arrayPets,
						'arrayLanguages'=>$arrayLanguages,
						'arrayCoders'=>$arrayCoders,
						'arrayCities'=>$arrayCities,					
						'defaultValuesPets'=>array(),
						'defaultValuesLanguages'=>array(),
						'defaultValuesCoders'=>array(),
						'defaultValuesCities'=>array()					
					);			
			$content=renderView($config, $params, '/users/insert');
		}
			
	break;	
	case 'delete':
 		if($_POST)
 		{
 			if($_POST['Submit']=='si')
 			{
 				deleteUser($_POST['id']);
	 			header("location: users.php");
	 			exit();
 			}
			else
			{
				header("location: users.php");
				exit();
			}
 		}
 		else
 		{
 			$content=renderView($config, array(), '/users/delete');
 		}

	break;
	case 'select':		
		$arrayUsers=readProjects($cnx);
		$params=array('arrayUsers'=>$arrayUsers);
		$content=renderView($config, $params, '/projects/select');
	break;
	default:
	break;
					
}
// Incluir Layout
include_once("../application/layouts/layout_admin2.php");
