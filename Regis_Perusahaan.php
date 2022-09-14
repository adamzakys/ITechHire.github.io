<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Regisstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="headerlogo"><img class="logo" src="logo.png"></div>
            <div id='search-box'>
                <form action='/search' id='search-form' method='get' target='_top'>
                    <input id='search-text' name='q' placeholder='Masukan keyword ...' type='text'/>
                    <button id='search-button' type='submit'>
                        <span>Search</span>
                    </button>
                </form>
            </div>
            <div class="headerlist">
                    <a href="beranda.html">Beranda</a>
                    <a href='#pasang'>Pasang Lowongan</a>
                    <a href='#cari'>Cari Lowongan</a>
                    <a href='#about'>About team</a>
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
            <h2 style="border-bottom: 2px solid #112B3C ;">Perusahaan</h2>
            <div class="isi" align="center">
                <div class="container">
                    <div class="main">
                        <div class="form">
                            <form action="Regis_Perusahaan.php" method="post">
                                <h2 style="text-align: center; color: whitesmoke;">Daftar Sebagai Perusahaan</h2>
                                <p style="border-bottom: 2px solid #112B3C; padding-bottom: 10px; color: #112B3C;">Login Information</p>
                                <p>
                                    Email Address<br>
                                    <input type="text" name="email" id="inp">
                                </p>
                                <p>
                                    Password<br>
                                    <input type="password" name="password" id="inp">
                                </p>
                                <p>
                                    Password Verify<br>
                                    <input type="password" name="cpassword" id="inp">
                                </p>
                                <p>
                                    <input type="checkbox" name="checkbox" id="checkbox">Show Password<br>
                                </p>
                                <p>
                                    <input type="submit" name="submit" value="Daftar" style=" border: none; background-color: #EC9B3B; font-weight: bold;border-radius: 5px; padding: 8px 13px;">
                                </p>
                            </form>
                        </div>
                        <div class="gm">
                            <img src="image/daftargm2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <?php
    include "koneksi_perusahaan.php";

    if (isset($_POST['submit'])) {
        if(registrasi_perusahaan($_POST) > 0 ){
            echo "<script>
                    window.confirm('Registrasi Berhasil');
                </script>";
        }else{
            mysqli_error($conn);
        }
    }
    ?>

</body>
</html>