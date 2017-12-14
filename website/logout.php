<?php
session_start();
include_once("../class/User.php");
$obj=new User();
$dt="20".date('y-m-d h:i:s ');

$uid=$_SESSION["uid"];
			
					
					$obj->set_Userid($uid);
					$obj->set_DOL($dt);
					$obj->updatedol($obj);
					$_SESSION["dol"]=$dt;
		
$_SESSION["unm"]="";
		$_SESSION["uid"]="";
		$_SESSION["utid"]="";
				header("location:index.php");
?>		