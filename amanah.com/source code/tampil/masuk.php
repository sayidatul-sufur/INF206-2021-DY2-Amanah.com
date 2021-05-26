<?php 
$koneksi = mysqli_connect("localhost", "root", "", "amanah");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_POST["masuk"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    // var_dump(mysqli_num_rows($result));

if(mysqli_num_rows($result)==1){

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
