<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>
Di Đông Ngọc Lân
</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<link rel="StyleSheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<div id="contaner">
	<div id="top">
	</div>
	<div id="banner">
	<marquee direction="left" behavior="alternate" ><H3> CỬA HÀNG ĐIỆN THOẠI : DỊA CHỈ: CHỢ HẦU, LIÊN MINH - VỤ BẢN - NAM ĐỊNH </H3></marquee>
	</div>
	<div id="left">
	
		<ul style="width:200px;"><a href="src/all.php"><b> =>CÁC LOẠI ĐIỆN THOẠI</b></a>
		<li><a href="src/iphone.php">IPHONE</a></li>
		</ul>
	</div>
	
	<div id="center">
	<fieldset style="margin-left:30px;">
		<legend align="center"><h2 >Thêm sản phẩm</h2></legend>
		<form id="form-login" action="../controller/action.php" method="POST" enctype="multipart/form-data" >
		<label>Tên sản phẩm:</label><input type="text" name="productname" id="productname" /><br/>
		<label>Loại sản phẩm:</label><input type="text" name="producttype" id="producttype" /><br/>
		<label>Giá sản phẩm:</label><input type="text" name="price" id="price"/><br/>
		<label>Hình ảnh</label><input type="file" name="file" id="file" /><br/>
		<input type="submit" name="addproduct" id="addproduct" value="Thêm sản phẩm" class="button"/>
		</form>
		
	</fieldset>
	</div>
	<div id="bottom">
	</div>
</div>
	
</div>
</body>
</html>