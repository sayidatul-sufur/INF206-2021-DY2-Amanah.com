<!DOCTYPE html>
<html>

<head>
	<title>Amanah.com</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/css.css">
	<link id="favicon" rel="shortcut icon" type="image/png" href="../../assets/icon/am.jpg">
</head>

<body>
	<div class="atas">
		<div class="bungkus">
			<div class="kiri">
				<h3>Amanah</h3>
			</div>
			<div class="kanan">
				<form action="masuk.php" method="post">
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
						<!-- <div class="lupa" name="level">
							<input type="checkbox">login sebagai Admin</input>
						</div> -->
					</div>

					<div class="user">
						<div class="judul">
						</div>
					</div>
					<div class="input">
						<button type="submit" name="masuk" value="masuk">Masuk</button>
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

				<form action="registrasi.php" method="post">
					<div class="it" style="display: flex;margin-top: 20px;">
						<div class="it1" style="margin-right: 7px;">
							<input type="text" name="username" placeholder="Nama">
						</div>
					</div>
					<div class="it">
						<div class="it1">
							<input type="password" name="katasandi" placeholder="Kata Sandi">
						</div>
					</div>
					<div class="it">
						<div class="it1">
							<input type="text" name="nope" placeholder="Nomor Handphone">
						</div>
					</div>
					<div class="it" style="margin-top: 30px;">
					</div>
					<div class="it">
						<p>Dengan mengklik Create, Anda menyetujui Ketentuan.</p>
					</div>
					<div class="it">
						<button type="submit">CREATE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>