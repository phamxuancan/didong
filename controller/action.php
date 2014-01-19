<?php
require"class.php";
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
if(isset($_POST["login"]))
{
	$user=$_POST["name"];
	$pass=$_POST["password"];
		$login=new Action();
		$login->login($user,$pass);
}
if(isset($_POST["addproduct"])){
	if($_FILES["file"]["type"]=="image/gif"||$_FILES["file"]["type"]=="image/jpg"||$_FILES["file"]["type"]=="image/jpeg"||$_FILES["file"]["type"]=="image/png")
		{
	
			if (file_exists("../upload/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/" . $_FILES["file"]["name"]);
					echo "<script type='text/javascript'>
				alert('Thêm sản phẩm thành công!');
				
				</script>";
				}
			}
	else{
	exit("Sai định dạng");
	}
}
?>