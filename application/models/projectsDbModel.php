<?php 

function readProjects($cnx)
{
	$sql_users="SELECT * FROM projects
				";
	$arrayUsers=query($cnx,$sql_users);
	return $arrayUsers;
}


