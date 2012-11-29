<?php

function connect($server, $database, $username, $password)
{
	try
	{
		// Create connection to MYSQL database
		// Fourth true parameter will allow for multiple connections to be made
		$db_connection = mysql_connect ($server, $username, $password, true);
		mysql_select_db ($database);
		if (!$db_connection)
		{
			throw new Exception('MySQL Connection Database Error: ' . mysql_error());
		}
		else
		{
			$CONNECTED = true;
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	return $db_connection;
}

function disconnet($cnx)
{
	
}

function query($cnx, $sql)
{
	$arrayQuery=array();
	try 
	{
		$result=mysql_query($sql, $cnx);
		if (!$result)
		{
			throw new Exception('MySQL Query Error: ' . mysql_error());
		}	
		else
		{
			
			if(!is_resource($result))
				$arrayQuery=$result;
			else
			{
				while ($row = mysql_fetch_array ($result, MYSQL_ASSOC))
				{	
					$arrayQuery[]=$row;				
				}
			}			
		}	
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
	return $arrayQuery;
}


function save($cnx, $table, $arrayColumns)
{
	
}
