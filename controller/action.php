<?php
require"class.php";
require "ConnectDB.php";
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
if(isset($_POST["login"]))
{
	$user=$_POST["name"];
	$pass=$_POST["password"];
		$login=new Action();
		$login->login($user,$pass);
}
if(isset($_POST["addproduct"])){
	$nameproduct=$_POST["productname"];
	$producttype=$_POST["producttype"];
	$price=$_POST["price"];
	
	if($_FILES["file"]["type"]=="image/gif"||$_FILES["file"]["type"]=="image/jpg"||$_FILES["file"]["type"]=="image/jpeg"||$_FILES["file"]["type"]=="image/png")
		{
	
			if (file_exists("../upload/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/" . $_FILES["file"]["name"]);
					$path="upload/". $_FILES["file"]["name"];
					$sql="insert into product values(null,'".$nameproduct."','".$producttype."','".$price."','".$path."')";
					$result=mysql_query($sql) or die("no insert");
					if($result){
						echo "<script type='text/javascript'>
						alert('Thêm sản phẩm thành công!');
						</script>";
						}
						else{
						echo "<script type='text/javascript'>
						alert('Thêm sản phẩm khong thành công!');
						</script>";
						}
						}
				}
			
		else
		{
			exit("Sai định dạng");
		}
}
?>