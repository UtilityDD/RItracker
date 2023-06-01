<?php
$dalTableusers = array();
$dalTableusers["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableusers["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTableusers["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTableusers["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
	$dalTableusers["ID"]["key"]=true;

$dal_info["RI_TRacker_at_localhost__users"] = &$dalTableusers;
?>