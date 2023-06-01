<?php
$dalTablemovement = array();
$dalTablemovement["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTablemovement["receivememo"] = array("type"=>200,"varname"=>"receivememo", "name" => "receivememo");
$dalTablemovement["from"] = array("type"=>200,"varname"=>"from", "name" => "from");
$dalTablemovement["to"] = array("type"=>200,"varname"=>"to", "name" => "to");
$dalTablemovement["date"] = array("type"=>135,"varname"=>"date", "name" => "date");
	$dalTablemovement["ID"]["key"]=true;

$dal_info["RI_TRacker_at_localhost__movement"] = &$dalTablemovement;
?>