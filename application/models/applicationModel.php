<?php
/**
 * Read config file
 * @param string $filename config filename
 * @return array config array
 */
function readConfig($filename, $section)
{
	$config=array();
	$config=parse_ini_file($filename, true);
	$keys=array_keys($config);
	foreach($keys as $value)
	{
		$realKeys=explode(':',$value);
		if($section==$realKeys[0])
		if(isset($realKeys[1]))
			$arraySalida=array_merge(					
					$config[$realKeys[1]],
					$config[$realKeys[0].":".
					$realKeys[1]]
					);
		else
			$arraySalida=$config[$realKeys[0]];	
	}
	return 	$arraySalida;
}

/**
 * Render a view
 * @param array $config Config array
 * @param array $params Params array
 * @param string $view View
 * @return string
 */
function renderView($config, array $params, $view)
{
	ob_start();
	include($config['views_directory']."/".$view.".php");
	$content=ob_get_contents();
	ob_end_clean();
	return $content;
}


function _debug($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function setRequest()
{
	$url=explode("/",$_SERVER['REQUEST_URI']);
	if(isset($url[1]))
		$_GET['controller']=$url[1];
	if(isset($url[2]))
		$_GET['action']=$url[2];
}









