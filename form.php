 <?php 
 if(isset($_POST['hoten'],$_POST['g-recaptcha-response'],$_POST['hoten2']) && $_POST['hoten'] && $_POST['hoten2'] && $_POST['g-recaptcha-response'])
 {
	 $respone = '03AHqfIOmNcFE0Ee5zOJqI73m8K-qFU1qpHufYYNFSkBkC1ZXgohRh-gmgmBMD5g1EtIh8_QaTjs4bVNE3xivrIftvAjSltB3N9b6mJQJfWKq805OFnM_Y0NpPFEpDhSfSksQbAnGt-Uv6ggEJFFqTk95fllqQfYAMRFV0FzdtMKLoLvLfvxSMiS2Ct6_BN3DMJZ4I0F1r2jojLcpOxDEGvYEBoMbjeyyxv_PRNJKyfwqB6mX5y4oVC39YmM2EhbqyuTBgHDOqy74YkFOinJ0yW8xUqLlnzNdv0Q';
	 //buoc dau tien di gui yeu cau len gg de xac dinh ng dung la robot hay k
	 $apiurl = 'https://www.google.com/recaptcha/api/siteverify?secret=6LfggG4UAAAAABMd__41ssyIPRzPTlxGwjyPC_Hc&response='.$respone.'&remoteip='.$_SERVER['SERVER_ADDR'];//$_POST['g-recaptcha-response']
	 //tien hành gửi và nhận ket qua tra về từ gg
 	 $jsongg = file_get_contents($apiurl); 
	$objcaptcha = json_decode($jsongg);
	//kiem tra trang thai robot
	if($objcaptcha->success)
	{
	 echo '<pre>',
	 print_r($_POST),print_r($_SERVER),
	  '</pre>';
	 echo 'xu  ly gi do';
	}else
	 echo 'Ban la robot';
 }
 
 //https://www.google.com/recaptcha/admin : link tao ma captcha
// https://developers.google.com/recaptcha/docs/verify link xem code huong dan
 
 
 
 //thu ham file_get_contents
 echo file_get_contents('https://vnexpress.net/tin-tuc/phap-luat')
 ?>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="hoten">Họ tên</label>
    <input type="text" name="hoten" id="hoten" />
  </p>
  <p>
    <label for="hoten2">Họ tên</label>
    <input type="text" name="hoten2" id="hoten2" />
</p>
<div class="g-recaptcha" data-sitekey="6LfggG4UAAAAAM_BdemrSsBKgs-x7lb6O4npUIZB"></div>
  <p>
    <input type="submit" name="gui" id="gui" value="Gửi" />
  </p>
</form>
