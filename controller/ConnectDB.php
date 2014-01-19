<?php
class ConnectDB {
	function connect(){
		$conn=mysql_connect("localhost","root","") or die("host disconnected");
		$db=mysql_select_db("mobie",$conn) or die("mobie disconnected");
		if($db){
		return $db;
		}
		else exit("Error hosting");
	}
}
$db=new ConnectDB();
$db->connect();
?>