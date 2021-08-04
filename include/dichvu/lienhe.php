
<div style="width:99.5%; margin-left:3px; margin-right:3px;">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td style="height:25px; background:url(images/trang.jpg) repeat-x; text-align : center; font-size: 22px;" align="center" class="ht" colspan="3"; >
					Liên Hệ
			</td>
		</tr>
		<tr>
				<td>
				<table width="100%" height="120" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;
						background:url(images/lienhe.jpg) no-repeat right;">
					<tr>
					<td>
<script language="JavaScript" type="text/javascript">
	function kiemtra()
	{
		var ten=frm.txtten.value;
		var dien=frm.txtsdt.value;
		var mail=frm.txtemail.value;
		var dia=frm.txtdc.value;
		var cm=frm.txttquai.value;
		
		if(ten=="")
		{
			document.all('loihoten').innerHTML="Họ Tên bắt buộc phải nhập !"
			frm.txtten.style.backgroundColor='#FFFFCC'
			frm.txtten.focus()
			return false
		}
		else
		{
			document.all('loihoten').innerHTML=""
			frm.txtten.style.backgroundColor='#FFFFFF'
			
		}
		
		kiem=/^[0-9]{10,11}$/
		lt=kiem.test(dien)
		if(dien=="")
		{
			document.all('loidientquai').innerHTML="Bạn Chưa Nhập Số Điện Thoại !"
			frm.txtsdt.style.backgroundColor='#FFFFCC'
			frm.txtsdt.focus()
			return false
		}
		else
		{	
			if(lt==false)
			{
				document.all('loidientquai').innerHTML="Bạn Phải Nhập Bằng Số Và Có Từ 10 Đến 11 Chữ Số!"
				frm.txtsdt.style.backgroundColor='#FFFFCC'
				frm.txtsdt.focus()
				return false
			}
			else
			{
			document.all('loidientquai').innerHTML=""
			frm.txtsdt.style.backgroundColor="#FFFFFF"
			}
			
		}
		
		dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/
		kq=dangmail.test(mail)
		if(mail=="")
		{
			document.all('loimail').innerHTML="Bạn Chưa Nhập Email !"
			frm.txtemail.style.backgroundColor="#FFFFCC"
			frm.txtemail.focus()
			return false
		}
		else
		{	
			if(kq==true)
			{
			document.all('loimail').innerHTML=""
			frm.txtemail.style.backgroundColor="#FFFFFF"
			}
			else
			{
			document.all('loimail').innerHTML="Bạn Nhập Sai Dạng Email - Email Có Dạng Ví Dụ Như: tennguoidung@gmail.com"
			frm.txtemail.style.backgroundColor="#FFFFCC"
			frm.txtemail.focus()
			return false
			}
			
		}
		
		if(dia=="")
		{
			document.all('loidiachi').innerHTML="Bạn Chưa Nhập Địa Chỉ !"
			frm.txtdc.style.backgroundColor="#FFFFCC"
			frm.txtdc.focus()
			return false
		}
		else
		{	

			document.all('loidiachi').innerHTML=""
			frm.txtdc.style.backgroundColor="#FFFFFF"
		}
		if(cm=="")
		{
			document.all('loitquai').innerHTML="Bạn Chưa Gửi Yêu Cầu !"
			frm.txttquai.style.backgroundColor="#FFFFCC"
			frm.txttquai.focus()
			return false
		}
		else
		{	

			document.all('loitquai').innerHTML=""
			frm.txttquai.style.backgroundColor="#FFFFFF"
		}
		
		return true
	}

</script>


			
  <form id="frm" name="frm" method="post" action="" onsubmit="return kiemtra()">
 <?php include_once('xl_lienhe.php'); ?>
    <table cellpadding="4" cellspacing="0" border="0" align="center" width="85%">
      <tr>
	  	<td colspan="2" height="100px" style="background:url(images/thutin.jpg) no-repeat left; font-size: 22px; padding-left: 45px; text-align: center;"    >
			&nbsp;&nbsp;Mọi thắc mắc yêu cầu vui lòng điền đầy đủ thông tin ở bên dưới
		</td>
		</tr>
		<tr>
	 
       		<td width="120px" style="font-size: 18px;" >Họ Tên</td>
        	<td width="330px" height="30"><input name="txtten" type="text" id="txtten" size="40" value="" />
      			  &nbsp;&nbsp;<font color="#FF6600">*</font><br />
			<span id="loihoten" style="color:#FF6600;"></span>		
			</td>
      </tr>
      <tr>
        	<td width="60px" height="30" style="font-size: 18px;">Điện Thoại</td>
       		 <td><input name="txtsdt" type="text" id="txtsdt" size="40" value="" />
      				  &nbsp;&nbsp;<font color="#FF6600">*</font><br />
			<span id="loidientquai" style="color:#FF6600;"></span>		
			</td>
      </tr>
      <tr>
        	<td align="left" height="30" style="font-size: 18px;" >Email</td>
       		 <td><input name="txtemail" type="text" id="txtemail" size="40" value="" />
      			  &nbsp;&nbsp;<font color="#FF6600">*</font><br />
		<span id="loimail" style="color:#FF0000;"></span>		</td>
      </tr>
      <tr>
       		 <td height="30" style="font-size: 18px;" >Giới Tính</td>
      	 	 <td>
			<select name="gioitinh">
				<option value="1">Chưa Xác Định</option>
				<option value="2" selected="selected">Nam</option>
				<option value="3">Nữ</option>
				
			</select>		
			</td>
      </tr>
	   <tr>
        	<td height="30" style="font-size: 18px;" >Địa Chỉ</td>
       		 <td><textarea name="txtdc" cols="43" rows="2" id="txtdc" style="border-right:none;" ></textarea>
				 &nbsp;&nbsp;<font color="#FF6600">*</font>
		<br />
		<span id="loidiachi" style="color:#FF6600;"></span>		</td>
      </tr>
      <tr>
        	<td align="left"style="font-size: 18px;" >Nội Dung</td>
       		 <td><textarea name="txttquai" cols="43" rows="5" id="txttquai" style="border-right:none;"></textarea>
       		 &nbsp;&nbsp;<font color="#FF6600">*</font><br />
				<span id="loitquai" style="color:#FF6600;"></span>		
			</td>
      </tr>
      <tr>
		  <td></td>
        <td class="gui1" >
		 	
			
			<input name="goiham" type="hidden" value="lienhe" />
			<input name="view" type="hidden" value="xllienhe" />

			 <input class="gui" type="submit" name="Submit" value="Gửi Đi"  onclick="kiemtra()"/>	
	
		</td>     
      </tr>
    </table>
  </form>

				</td>
			</tr>
		</table>
		
				</td>
		</tr>
  </table>
</div>
