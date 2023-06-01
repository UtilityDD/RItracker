<?php
$dalTabledespatch = array();
$dalTabledespatch["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabledespatch["from"] = array("type"=>200,"varname"=>"from", "name" => "from");
$dalTabledespatch["to"] = array("type"=>200,"varname"=>"to", "name" => "to");
$dalTabledespatch["memono"] = array("type"=>200,"varname"=>"memono", "name" => "memono");
$dalTabledespatch["memodate"] = array("type"=>7,"varname"=>"memodate", "name" => "memodate");
$dalTabledespatch["subject"] = array("type"=>201,"varname"=>"subject", "name" => "subject");
$dalTabledespatch["mode"] = array("type"=>200,"varname"=>"mode", "name" => "mode");
	$dalTabledespatch["ID"]["key"]=true;

$dal_info["RI_TRacker_at_localhost__despatch"] = &$dalTabledespatch;
?>