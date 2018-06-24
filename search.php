<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_admin"])){

?>
 
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width">
	<meta name= "description" content ="Selamat Datang di Web Prodia">
	<meta name= "keywords" content= "pokoknya mah visi misi singkatnya weh">
	<meta name= "author" content="Rizkhita Dong"> 
	<title>Laboratorium Klinik Prodia Banjaran | Cek Hasil Lab Online </title>
	<link rel="stylesheet"type="text/css" href="badanweb.css">

		
  
  </head>	
 <body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><img src="prodia.png"></br>
				<span class="highlight"></h1></span>
	</div>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentanglab.php">Tentang Prodia</a></li>
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>

	<div class="container">
		<section id="main">
				
<form name="formcari" method="post" action="searching.php">
<table width="330" border="0" align="center" cellpadding="0">

<br></br>
<tr >
<td height="25" colspan="3">
<strong><h1> Cari Data Pasien<h1> </strong>
</td>
</tr>
<tr> <td>  Nama : </td>
<td> <input type="text" name="name"> </td>
</tr>
<td></td>
<td><br><button type="SUBMIT" name="SUBMIT" id="SUBMIT" value="searching" >CARI</button></td>
</table>
</form>
				<br>
				<li><a href="as_admin.php">Back</a></li>
				<br><br><br><br>
<style type="text/css">
form table{
	text-align: center;
	background: orange;
	padding-top:50px; 
	padding-right:50px;
	padding-bottom:50px;
	padding-left: 50px; 
	border-radius: 15px;

}

form table button{
	text-align: center;
	background: gray;
	color: black; 
	border-radius: 15px;
	margin-right: 30px;

}

</style>


		</section>
   </div>



   
	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>
<?php } else{
header("location: login_pasien.php");	
}?>