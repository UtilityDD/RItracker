<?php
$dalTablereceive = array();
$dalTablereceive["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTablereceive["from"] = array("type"=>200,"varname"=>"from", "name" => "from");
$dalTablereceive["to"] = array("type"=>200,"varname"=>"to", "name" => "to");
$dalTablereceive["subject"] = array("type"=>201,"varname"=>"subject", "name" => "subject");
$dalTablereceive["memono"] = array("type"=>200,"varname"=>"memono", "name" => "memono");
$dalTablereceive["memodate"] = array("type"=>7,"varname"=>"memodate", "name" => "memodate");
$dalTablereceive["receiveno"] = array("type"=>200,"varname"=>"receiveno", "name" => "receiveno");
$dalTablereceive["receivedate"] = array("type"=>7,"varname"=>"receivedate", "name" => "receivedate");
$dalTablereceive["remarks"] = array("type"=>200,"varname"=>"remarks", "name" => "remarks");
	$dalTablereceive["ID"]["key"]=true;

$dal_info["RI_TRacker_at_localhost__receive"] = &$dalTablereceive;
?>