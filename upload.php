<?php
include('koneksi.php');
if(isset($_POST['submit'])){

	$id_pas=$_POST['pasien'];
	$doc_name = $_POST['doc_name'];
	
	$name = $_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];

	if($name && $doc_name){

		$Location = "documents/$name";
		move_uploaded_file($tmp_name, $Location);
		$query = mysql_query("INSERT INTO documents (id_pas,name,path) VALUES ('$id_pas','$doc_name','$Location')") or die (mysql_error());
		header('Location:hasil_lab.php');
	}
	else

		die("Please select a file");
}
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


<table width="90px">
	<td width="30px">
	</td>
<td width="30px">
<form action="upload.php" method="post" enctype="multipart/form-data">
<br>Pilih Pasien : 
<select name="pasien">
    <option>---- Pilih ----</option>
    <?php

    $sql = mysql_query("SELECT * FROM pasien ORDER BY nama ASC");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo '<option value='.$data['id_pas'].'>'.$data['nama'].'</option>';
        }
    }
    ?>
</select>
<br>
<br>
Document Name
		<input type="text" name="doc_name">
		<br>
		<br><input type="file" name="myfile">
		<br>
		<br><input type="submit" name="submit" value="Upload">
<br>
</form>
</td>
<td width="30px">
	</td>
</table>

<style type="text/css">
table td form{
	background: orange;
	position: center;
	margin-left: 500px;
	margin-top: 100px;
	padding-top: 50px;
	padding-bottom:50px;
	padding-right:50px;
	padding-left:50px; 
	border-radius:15px; 

}
</style>
	
				<br></br>
				<br></br>
				<li><a href="as_admin.php">Back</a></li>




   
	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>