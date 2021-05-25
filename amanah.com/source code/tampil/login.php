<?php 
$koneksi = mysqli_connect("localhost", "root", "", "rpl");
<<<<<<< HEAD
if(isset($_POST["nama"])){
	$nama = $_POST["nama"];
	$katasandi = $_POST["katasandi"];
	$nope = $_POST["nope"];
	$cekquery = mysqli_query($koneksi, "SELECT * FROM user where username = '$nama'");
	$cekuser = mysqli_fetch_assoc($cekquery);

if ($nama != $cekuser["username"]) {
	$masuk = mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nama', '$katasandi', '$nope')");
	
		echo '<script>
           alert("Akun berhasil dibuat!");
         </script>';
		 header("Location: login.php");

}else{
	echo '<script>
           alert("Sudah ada akun yang terdaftar!");
         </script>';
	}

}

=======

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
>>>>>>> DaftarBarang
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
<<<<<<< HEAD
<form action = "masuk.php" method = "post">	
=======
<form action = "" method = "post">	
>>>>>>> DaftarBarang
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
<<<<<<< HEAD

<form action= "" method =  "post">
			<div class="it" style="display: flex;margin-top: 20px;">
				<div class="it1" style="margin-right: 7px;">
					<input type="text" name="nama" placeholder="Nama">
=======
			<div class="it" style="display: flex;margin-top: 20px;">
				<div class="it1" style="margin-right: 7px;">
					<input type="text" name="nd" placeholder="Nama">
>>>>>>> DaftarBarang
				</div>
			</div>
			<div class="it">
				<div class="it1">
<<<<<<< HEAD
					<input type="text" name="katasandi" placeholder="Kata Sandi">
=======
					<input type="text" name="nr" placeholder="Kata Sandi">
>>>>>>> DaftarBarang
				</div>
			</div>
			<div class="it">
				<div class="it1">
<<<<<<< HEAD
					<input type="text" name="nope" placeholder="Nomor Handphone">
=======
					<input type="text" name="kt" placeholder="Nomor Handphone">
>>>>>>> DaftarBarang
				</div>
			</div>
			<div class="it" style="margin-top: 30px;">		
			</div>
			<div class="it">
<<<<<<< HEAD
				<p>Dengan mengklik Create, Anda menyetujui Ketentuan.</p>
			</div>
			<div class="it">	
			<button type= "submit">CREATE</button>
			</div>
</form>
=======
				<p>Dengan mengklik Create, Anda menyetujui Ketentuan, Kebijakan Data dan Kebijakan Cookie kami.</p>
			</div>
			<div class="it">
				<button>CREATE</button>
			</div>
>>>>>>> DaftarBarang
		</div>
	</div>
</div>
</body>
</html>