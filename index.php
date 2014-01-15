<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>
Di Đông Ngọc Lân
</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<link rel="StyleSheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="contaner">
	<div id="top">
	
	</div>
	<div id="banner">
	<marquee direction="left" behavior="alternate" > chữ chạy từ trái sang phải và có kiểu chạy đi chạy lại. </marquee>
	</div>
	<div id="left">
	<a href="src/iphone.php">Iphone</a>
	</div>
	
	<div id="center">
	<div id='wrapper'>
		<div id='header'></div>
		<div id='body'>
			<div id="bigPic">
				<img src="imgs/1.jpg" alt="" />
				<img src="imgs/2.jpg" alt="" />
				<img src="imgs/3.jpg" alt="" />
				<img src="imgs/4.jpg" alt="" />
				<img src="imgs/5.jpg" alt="" />
				<img src="imgs/6.jpg" alt="" />
				<img src="imgs/7.jpg" alt="" />
				<img src="imgs/8.jpg" alt="" />
				<img src="imgs/9.jpg" alt="" />
				<img src="imgs/10.jpg" alt="" />
			</div>
			<ul id="thumbs">
				<li class='active' rel='1'><img src="imgs/1_thumb.jpg" alt="" /></li>
				<li rel='2'><img src="imgs/3_thumb.jpg" alt="" /></li>
				<li rel='3'><img src="imgs/4_thumb.jpg" alt="" /></li>
				<li rel='4'><img src="imgs/5_thumb.jpg" alt="" /></li>
				<li rel='5'><img src="imgs/6_thumb.jpg" alt="" /></li>
				<li rel='6'><img src="imgs/7_thumb.jpg" alt="" /></li>
				<li rel='7'><img src="imgs/8_thumb.jpg" alt="" /></li>
				<li rel='8'><img src="imgs/9_thumb.jpg" alt="" /></li>
				<li rel='9'><img src="imgs/10_thumb.jpg" alt="" /></li>
				<li rel='10'><img src="imgs/2_thumb.jpg" alt="" /></li>
			</ul>
		
		</div>
		</div>
	</div>
	<div id="bottom">
	</div>
</div>
	<script type="text/javascript">
	var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
        	var indexImage = $('#bigPic img')[index]
            if(currentImage){   
            	if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
					    myTimer = setTimeout("showNext()", 3000);
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    
    var myTimer;
    
    $(document).ready(function() {
	    myTimer = setTimeout("showNext()", 3000);
		showNext(); //loads first image
        $('#thumbs li').bind('click',function(e){
        	var count = $(this).attr('rel');
        	showImage(parseInt(count)-1);
        });
	});
    
	
	</script>	
</div>
</body>
</html>