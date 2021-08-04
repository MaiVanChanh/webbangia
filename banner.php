<style type="text/css">
    .paging{
    	background-color: #A4A4A4;
    	height: 35px;
		width: 84.5%;
		position: absolute;
		
    }
	ul.hihi li{
		float: left;
	}
	.paging ul.hihi li a:visited{
		color: #FFFF00;
		font-size: 20px;
		font-weight: bold;
	}
	ul.hihi li a{
		display: inline-block;
		margin: 0px 8px 0px 0px;
		padding:0px 30px;
		line-height: 35px;
		text-transform: uppercase;
		color: blue;
	}
	ul.hihi li:hover a{
	    background:#A9F5F2;
	    text-decoration:none;

	}
	ul.hehe li {
		display: inline-block;
	}
	.slider
	{
		background-color: #D8F781;
		height: 260px;
	}
	.logo
	{
		width: 260px ;
		height: 260px;
	}
.logo{
	padding-left: 60px;
}
.tieu {
	width: 360px;
	font-size: 34px;
	color:#610B0B ;
	text-align: center;
	padding-left: 10px;
	padding-top: 185px;
	position: absolute;

text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d;

}
.chu{
	position: absolute;
	width: 84%;
	height: 30px ;
	font-size: 26px;
	padding-top: 10px;
	}
.logo2{
	width:30% ;
	height: 200px;
padding-left: 40%;
position: absolute;
margin-top: 40px;
display: block;
}
.logo3{
	width:200 ;
	height: 200px;
padding-left: 65%;
position: absolute;
margin-top: 50px;
display: block;
}
</style>
<div class="slider">
<img class="logo2" src="images\2.png" alt="">
<img class="logo3" src="images\1.png" alt="">
<marquee class="chu">Chào mừng bạn đến với shop giày da công sở KC Shop !!!!</marquee>  
   <ul class="hehe">
<li >
 <h1 class="tieu">SHOP GIÀY DA CÔNG SỞ <br><br> BÌNH DƯƠNG</h1> 
	<img class="logo" src="images\0.png" alt=""/>
</li>
   </ul>    
  
   </div>       
<div class="paging">
		<ul class="hihi">
			<li><a href="#" onclick="dentrang_onsubmit('trangchu')">Trang Chủ</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('gioithieu')">Giới Thiệu</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('sanpham')">Sản Phẩm</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('tintuc')">Tin Tức</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('dichvu')">Dịch Vụ</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('dathang')">Giỏ Hàng</a></li>
			<li><a href="#" onclick="dentrang_onsubmit('lienhe')">Liên Hệ</a></li>
		</ul>
	
</div>

	<form action="" method="post" name="trang">
	<input name="view" type="hidden" value="" />
	</form>
	<script>
		function dentrang_onsubmit(thamso)
		{
		trang.view.value=thamso
		trang.submit()
		}
	</script>
	<!-- Slide chay anh -->
  


    
 