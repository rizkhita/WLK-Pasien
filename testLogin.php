<?php
 require_once "PHPUnit/Framework/TestCase.php";

 class testLogin extends PHPUnit_Framework_TestCase
 {
 //test penambahan...
	 public function testlog()
	 {
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
	                $_SESSION["nama_admin"] = $login_fetch_array["username"];
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
	 }
 }
}
?>