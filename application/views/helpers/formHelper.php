<?php

function selectMultipleHelper($name, $array, array $defaultValues, $multiple=FALSE)
{
	$html="<select ";
	if($multiple)
		$html.="multiple ";
	$html.="name=\"".$name;
	if($multiple)
		$html.="[]";
	$html.="\">";
	foreach($array as $key => $value)
	{
		$html.="<option value=\"".$value['value']."\"";
		if(in_array($value['label'], $defaultValues))
			$html.=" selected";
		$html.=">";
		$html.=$value['label'];
		$html.="</option>";
	}
	$html.="</select>";

	return $html;
}

function checkHelper($name, $array, array $defaultValues, $checkbox=FALSE)
{
	$html='';
	foreach($array as $key => $value)
	{
		$html.=$value['label'].":";
		$html.="<input ";
		if($checkbox)
			$html.="type=\"checkbox\" ";
		else
			$html.="type=\"radio\" ";
		$html.="name=\"".$name;
		if($checkbox)
			$html.="[]";
		$html.="\" value=\"".$value['value']."\"";
		if(in_array($value['label'], $defaultValues))
			$html.=" checked";
		$html.=" \\>";
	}
	return $html;
}