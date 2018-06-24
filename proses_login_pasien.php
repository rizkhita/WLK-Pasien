<!--- <?php
include ("koneksi.php");
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['user']) || empty($_POST['pass'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['user'];
		$password=$_POST['pass'];
		// Membangun koneksi ke database
		
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Seleksi Database
		
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from pasien where password='$password' AND username='$username'");
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; 
				$user=$_SESSION['id_pas'];// Membuat Sesi/session
				header("location: as_pasien.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}

		$query = mysql_query("select * from admin where password='$password' AND username='$username'");
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: as_admin.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}
				 // Menutup koneksi
	}
}
?> 