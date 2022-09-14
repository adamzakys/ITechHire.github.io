<?php
session_start();
include "koneksi_perusahaan.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<form action="" method="post">

	<ul>
		<li>
			<label for="email">Username :</label>
			<input type="email" name="email" id="email">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
	
</form>

<?php 
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = mysqli_query($conn,"SELECT * FROM akun_perusahaan WHERE email = '$email' AND password = md5 ('$password')");
    $cek = mysqli_num_rows($qry);
    if ($cek==1) {
        $_SESSION['userweb']=$email;
        header("location:Regis_kandidat.php");
        exit;
    }
    else {
        echo "Maaf username dan password anda salah";
    }
} 
?>





