<?php
    session_start();
    error_reporting(0);
    if (isset($_POST["login"])){
		include_once("koneksi.php");
        if (isset($_POST["uname"]) and isset($_POST["passwd"])) {
            $uname = $_POST["uname"];
            $passwd = $_POST["passwd"];
			
	            
	            $login_query  = mysql_query("select * from admin where username='$uname' and password='$passwd'");
	            $login_num_rows = mysql_num_rows($login_query);
				
				$login_query2  = mysql_query("select * from pasien where username='$uname' and password='$passwd'");
	            $login_num_rows2 = mysql_num_rows($login_query2);
	           
			    if ($login_num_rows > 0){
	                $login_fetch_array  = mysql_fetch_array($login_query);
	                $_SESSION["nama_admin"] = $login_fetch_array["id_admin"];
	                mysql_close();
	                header("location: as_admin.php");
	            }elseif ($login_num_rows2 > 0){
	                $login_fetch_array2  = mysql_fetch_array($login_query2);
	                $_SESSION["id_pas"]  = $login_fetch_array2["id_pas"];
	                $_SESSION["nama"] = $login_fetch_array2["nama"];
	                mysql_close();
	                header("location: as_pasien.php");
	            }else {
	                mysql_close();
	                session_destroy();
	                header("location: login_pasien.php?login=gagal");
	            }          
      }else{
		  mysql_close();
	                session_destroy();
	                header("location: login_pasien.php?login=gagal");
	  }
	}else{
?>
 
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width">
	<meta name= "description" content ="Selamat Datang di Web Al-Muhtar">
	<meta name= "keywords" content= "pokoknya mah visi misi singkatnya weh">
	<meta name= "author" content="Rizkhita Dong"> 
	<title>Laboratorium Klinik Al-Muhtar Banjaran | Cek Hasil Lab Online </title>
	<link rel="stylesheet"type="text/css" href="badanweb.css">

		
  
  </head>	
  <body>

  	<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><img src="prodia.png"></br>
				<span class="highlight"></h1></span>
	</div>
		<nav>
			<ul>
				<li class= "current"><a href="index.php">Beranda</a></li>
				<li><a href="tentanglab.php">Tentang Al-Muhtar</a></li>
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>


		<table width='95%' height='20%'>
			<td width='35%'>
			</td>
			<br><br><br><br><br>
			<td width='30%'>
	        <form action="login_pasien.php" method="post">
			<br>
			<br><label> <h2>Username : </h2></label>
			<input  name="uname" placeholder="masukan username anda..." type="text" >
			
			<label> <h2>Password : </h2></label>
			<input  name="passwd" placeholder="masukan password anda..." type="password" >
			<br><br><br><br><input type="submit" name="login" id="submit" value="LOGIN" >
			<br><br><br><br>
		  </form>

		  <?php
						if (isset($_GET["login"])){
							if ($_GET["login"] == 'gagal'){
								echo "<p id='gagal'>Login Gagal, Periksa Kembali Username dan Password Anda </p>";
							}
						}
					?>
		  </td>

		  <td width='30%'>
			</td>
		</table>

		<style type='text/css'>
	

		td form{
			background: gray;
			position: center;
			text-align: center;
			text-decoration: arial;
			border:3px #7386D5;
			border-radius: 15px;
		}
		td form input{
			
			position: center;
			text-align: center;
			color: black;
			border: 5px #7386D5;
			border-radius: 15px;
			height: 30px;
			width:200px; 
		}

		</style> 
	


       
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		</section>
   </div>



   
	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>

				</div>
			</div>	
		</body>
	</html>
<?php
    }
?>