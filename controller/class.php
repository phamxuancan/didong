<?php
class Action {
	function login($name,$pass){
		if($name=="admin" && $pass=="toilaadmin")
			{
				header("LOCATION:../src/admin.php");
			}
			else {
				echo "<script>
					alert('Sai tên hoặc mật khẩu');
					history.go(-1);
				</script>";
				
			}
	}
	function addproduct(){
	
	}
}
?>