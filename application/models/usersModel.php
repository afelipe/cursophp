<?php
/**
 * Acl (http://myurl.com/)
 *
 * @link http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Elemental Media S.L. (http://www.zend.com)
 * @license http://framework.zend.com/license/new-bsd New BSD License
 * @package Users
 */


/**
 * Read user from datafile
 *
 * @param int $id User id, the array key. 
 * @return Array
 */


/**
 * Initialize user array
 * @return Array
 */
function initializeUserArray()
{
	for($i=0;$i<10;$i++)
		$user[$i]='';
	return $user;
}


/**
 * Rename file if exist into directory
 * @param array $_FILES
 * @param string $directory
 * @param string $uploads_dir
 * @return string
 */
function renameUserPhoto($_FILES,$uploads_dir)
{
	$tmp_name=$_FILES['photo']['tmp_name'];
	$name=$_FILES['photo']['name'];
	$directory=scandir($uploads_dir);
	$i=0;
	$infoFile=pathinfo($_SERVER['DOCUMENT_ROOT']."/".
			$uploads_dir."/".$name);
	while(in_array($name, $directory))
	{
		$i++;
		$name=$infoFile['filename']."_".
				$i.".".$infoFile['extension'];
	}
	
	if($i!=0)
	{
		$name=$infoFile['filename']."_".
				$i.".".$infoFile['extension'];
	}
	
	move_uploaded_file($tmp_name, $uploads_dir."/".$name);
	
	return $name;
}
