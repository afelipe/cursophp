<?php 


// Inicializa 
$user=initializeUserArray();
$filename=$_SERVER['DOCUMENT_ROOT'].$config['users_filename'];

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
			header("location: /users");
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
			_debug($_POST);
			$photoName=renameUserPhoto($_FILES,$config['uploads_dir']);
			$_POST['photo']=$photoName;
			insertUser($cnx,$_POST);
			header("location: /users");
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
	 			header("location: /users");
	 			exit();
 			}
			else
			{
				header("location: /users");
				exit();
			}
 		}
 		else
 		{
 			$content=renderView($config, array(), '/users/delete');
 		}

	break;
	case 'select':		
		$arrayUsers=readUsers($cnx);
		$params=array('arrayUsers'=>$arrayUsers);
		$content=renderView($config, $params, '/users/select');
	break;
	default:
	break;
					
}
// Incluir Layout
include_once("../application/layouts/layout_admin2.php");
