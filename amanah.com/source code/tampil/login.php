<?php 
$koneksi = mysqli_connect("localhost", "root", "", "rpl");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_POST["masuk"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)===1){
    if($password == $row["password"]){
    echo '<script>
           alert("Login sukses");
         </script>';
		 header("Location: dashboard.php");
    }else{
    echo '<script>
           alert("Password salah");
         </script>';
    }
}else{
    echo '<script>
           alert("Login gagal");
    </script>';
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Amanah.com</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/css.css">
	<link id="favicon" rel="shortcut icon" type="image/png" href="../../asset/icon/am.jpg">
</head>
<body >
<div class="atas">
	<div class="bungkus">
		<div class="kiri">
			<h3>Amanah</h3>
		</div>
		<div class="kanan">
<form action = "" method = "post">	
        <div class="user">
				<div class="judul">
					Username
				</div>
				<div class="input">
					<input type="text" name="username">
				</div>
			</div>
			<div class="user">
				<div class="judul">
					Kata sandi
				</div>
				<div class="input">
					<input type="password" name="password">
				</div>			
                <!-- <div class="lupa">
					<a href="#">Lupa akun?</a>
				</div> -->
			</div>
			<div class="user" >
				<div class="judul">
				</div>
			</div>
			<div class="input">
				<button type = "submit" name="masuk" value="masuk">Masuk</button>
			</div>
</form>
		</div>

	</div>
	
</div>
<div class="content">
	<div class="bc">
		<div class="kr">
			<div class="jd">
			</div>
			<div class="gm">
				<img src="../../asset/icon/fix.png">
			</div>
		</div>
		<div class="kn">
			<div class="at">
				<h2>Register</h2>
			</div>
			<div class="it" style="display: flex;margin-top: 20px;">
				<div class="it1" style="margin-right: 7px;">
					<input type="text" name="nd" placeholder="Nama">
				</div>
			</div>
			<div class="it">
				<div class="it1">
					<input type="text" name="nr" placeholder="Kata Sandi">
				</div>
			</div>
			<div class="it">
				<div class="it1">
					<input type="text" name="kt" placeholder="Nomor Handphone">
				</div>
			</div>
			<div class="it" style="margin-top: 30px;">		
			</div>
			<div class="it">
				<p>Dengan mengklik Create, Anda menyetujui Ketentuan, Kebijakan Data dan Kebijakan Cookie kami.</p>
			</div>
			<div class="it">
				<button>CREATE</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>