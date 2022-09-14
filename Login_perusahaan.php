<?php
session_start();
include "koneksi_perusahaan.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <!--navbar#-->
    <header>
        <div class="container">
            <div class="headerlogo"><img class="logo" src="logo.png"></div>
            <div id='search-box'>
                <a href="CariLowongan.php">
                    <form style="border-radius: 10px;" action='/search' id='search-form' method='get' target='_top'>
                        <input id='search-text' name='q' placeholder='Masukan keyword ...' type='text'/>
                        <button id='search-button' type='submit'>
                            <span>Search</span>
                        </button>
                    </form>
                </a>
            </div>
            <div class="headerlist">
                    <a href="beranda.html">Beranda</a>
                    <a href='#pasang'>Pasang Lowongan</a>
                    <a href='#cari'>Cari Lowongan</a>
                    <a href='about.html'>About team</a>
                <div class="daftar">
                    <a href="#daftar">Daftar</a>
                </div>
                <div class="masuk">
                    <a href="Login.html">Masuk</a>
                </div>
            </div>
        </div>
    </header>
    <div class="topwrapper">
        <div class="container">
            <h2>Masuk</h2>
            <div class="loginbox">
                <div class="loginclient">
                    <form action="" method="post">
                        <h3>Masuk sebagai Perusahaan</h3>
                        <p>Email</p>
                        <div class="texta">
                            <input type="email" name="email" value="example@gmail.com" required>
                        </div>
                        <p>Password</p>
                        <div class="texta">
                            <input type="password" name="password" required>
                        </div>
                        <p>
                            <input type="checkbox">Show Password<br>
                        </p>
                        <p>
                            <input type="submit" name="login" id="submit" value="Masuk">
                        </p>
                        <p>Lupa Password <a href="#">Klik Disini!</a></p>
                        <p>Masuk sebagai Kandidat<a href="Login_kandidat.php">Klik Disini!</a></p>
                        <p>Belum punya akun ? <a href="#">Klik Disini!</a> untuk daftar terlebih dahulu</p>
                    </form>
                </div>
                <div class="loginadmin">
                    <form action="">
                        <h3>Masuk sebagai Admin</h3>
                        <p>Username / ID</p>
                        <div class="texta">
                            <input type="text" name="email" value="example@gmail.com" required>
                        </div>
                        <p>Password</p>
                        <div class="texta">
                            <input type="password" name="password" required>
                        </div>
                        <p>
                            <input type="checkbox">Show Password<br>
                        </p>
                        <p>
                            <input type="submit" name="login" id="submit" value="Masuk">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
            echo "<script>
            window.alert('Maaf username dan password anda salah');
            </script>";
        }
    } 
    ?>
    <footer>
        <div class="footer">
            <table align="center" >
                <tr>
                    <th align="center" rowspan="2"><div style="width:0px; height:150px;border:1px grey solid;"></div></th>
                    <th>Tentang I Tech</th>
                    <th align="center" rowspan="2"><div style="width:0px; height:150px;border:1px grey solid;"></div></th>   
                    <th>Tentang kami</th>
                    <th align="center" rowspan="2"><div style="width:0px; height:150px;border:1px grey solid;"></div></th>   
                    <th></th>
                    <th align="center" rowspan="2"><div style="width:0px; height:150px;border:1px grey solid;"></div></th>   
                </tr>
                <tr>
                    <td width="400px" class="desk">
                        <p> I TechHire.id merupakan web layanan penyedia lowongan pekeraan barbasis web,
                            yang berfokus pada rekrutmen di bidang IT untuk mempermudah mencari pekerjaan
                            dan perekrutan karyawan.
                        </p>
                    </td>
                    <td>
                <pre>
                    <a href="">Hubungi Kami</a></li><br>
                    <a href="">Pusat Bantuan</a></li><br>
                    <a href="">Kebijakan dan Privasi</a>
                </pre>
                    </td>
                    <td width="350px">
                        <ul>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li><br>
                            <p align=center>Hak Cipta © 2022 ITech.ID</p>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><hr color="grey" width="350px"></td>
                    <td></td>
                    <td><hr color="grey" width="300px"></td>
                    <td></td>
                    <td><hr color="grey" width="320px"></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </footer>
</body>
</html>

