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
				<form action="proses_input_pasien.php" method="post">
			<table>
				
				<tr>
					<br><td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"/></td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat"/></td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Tempat, tanggal lahir</td>
					<td>:</td>
					<td><input type="text" name="ttl"/></td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Jenis kelamin</td>
					<td>:</td>
					<td><select name="jk" >
						<option value="perempuan">perempuan</option>
						<option value="laki-laki">laki-laki</option>
					</select>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Nomer Telepon</td>
					<td>:</td>
					<td><input type="text" name="tlp"/></td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Username</td>
					<td>:</td>
					<td><input type="text" name="user"/></td>
				</tr>
				<tr></tr>
				<tr>
					<br><td>Password</td>
					<td>:</td>
					<td><input type="text" name="pass"/></td>
				</tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
				<td><br><button type="submit" value="simpan" >SIMPAN</button>
			    </tr>

			</table>
		</form>
		<style type="text/css">
form table{
	padding-top: 50px;
	padding-bottom: 50px;
	padding-left: 50px;
	padding-right: 50px;
	position: center;
	margin-left: 300px;
	background: orange;
	border-radius: 15px;
}
form table button{
	background: gray;
	color: black;
	border-radius: 15px;
	position: left;
}

		</style>		

			
				<br></br>
				<br></br>
				<li><a href="as_admin.php" bgcolor="orange">Back</a></li>

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