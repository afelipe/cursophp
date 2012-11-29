<?php 

function readUsers($cnx)
{
	$sql_users="SELECT idusers, name, email, password, description, 
					photo, coders, city
				FROM users
				INNER JOIN cities ON 
					users.cities_idcities = cities.idcities
				";
	$arrayUsers=query($cnx,$sql_users);

	foreach($arrayUsers as $key=>$user)
	{		
		$arrayPets=readUserPets($cnx,$user['idusers']);
		$arrayUsers[$key]['pets']=implode(',', $arrayPets);
		
		$arrayLanguages=readUserLanguages($cnx,$user['idusers']);
		$arrayUsers[$key]['languages']=implode(',', $arrayLanguages);	
	}
	return $arrayUsers;
}


function readUserPets ($cnx,$id)
{
	$sql_pets="SELECT idusers, pet
				FROM users
				LEFT JOIN users_has_pets ON	
					users.idusers=users_has_pets.users_idusers
				LEFT JOIN pets ON 
					users_has_pets.pets_idpets=pets.idpets
				WHERE users.idusers=".$id."
			";
	$arrayPets=query($cnx,$sql_pets);

	foreach($arrayPets as $pet)
	{
		$pets[]=$pet['pet'];
	}

	return $pets;
}

function readUserLanguages ($cnx,$id)
{
	$sql_languages="SELECT idusers, language
			FROM users
			LEFT JOIN users_has_languages ON users.idusers = users_has_languages.users_idusers
			LEFT JOIN languages ON users_has_languages.languages_idlanguages = languages.idlanguages
			WHERE users.idusers=".$id."
			";
	$arrayLanguages=query($cnx,$sql_languages);

	foreach($arrayLanguages as $language)
	{
		$languages[]=$language['language'];
	}

	return $languages;
}
// function readUser($id)
// {
// 	return $arrayUser;
// }

function insertUser($cnx,$arrayUser)
{
	$sql="INSERT INTO users SET
			name='".$arrayUser['name']."',
			email='".$arrayUser['email']."',
			password='".$arrayUser['password']."',
			description='".$arrayUser['description']."',
			photo='".$arrayUser['photo']."',
			coders='".$arrayUser['coders']."',
			cities_idcities='".$arrayUser['cities']."'		
		";
	$result=query($cnx, $sql);	
	$id=lastInsertId($cnx);
	foreach ($arrayUser['pet'] as $pet)
	{
		$sql="INSERT INTO users_has_pets SET
			users_idusers=".$id.",
			pets_idpets=".$pet;
		query($cnx,$sql);
	}
	
	foreach ($arrayUser['languages'] as $language)
	{
		$sql="INSERT INTO users_has_languages SET
			users_idusers=".$id.",
			languages_idlanguages=".$language;
		query($cnx,$sql);
	}
	
// 	$sql="commit";
// 	query($cnx,$sql);
	return $id;
}

function lastInsertId($cnx)
{
	$sql="SELECT LAST_INSERT_ID() AS id";
	$result=query($cnx,$sql);
	return $result[0]['id'];
}

function readPets($cnx)
{
	$sql="SELECT idpets AS value, pet AS label FROM pets";
	$arrayPets=query($cnx,$sql);
	return $arrayPets;
}



function readLanguages($cnx)
{
	$sql="SELECT idlanguages AS value, language AS label FROM languages";
	$arrayLanguages=query($cnx,$sql);
	return $arrayLanguages;
}

function readCoders($cnx)
{
	$sql="SELECT idcoders AS value, code AS label FROM coders";
	$arrayCoders=query($cnx,$sql);
	return $arrayCoders;
}

function readCities($cnx)
{
	$sql="SELECT idcities AS value, city AS label FROM cities";
	$arrayCities=query($cnx,$sql);
	return $arrayCities;
}


// function updateUser($id)
// {
// 	save()
// 	return TRUE/FALSE;
// }

// function deleteUser($id)
// {
// 	return TRUE/FALSE;
// }