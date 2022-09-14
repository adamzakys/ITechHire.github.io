<?php

$conn = mysqli_connect("localhost","root","","perusahaan");

function registrasi_perusahaan($data){
    global $conn;

    $email = $data["email"];
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $cpassword = mysqli_real_escape_string($conn,$data["cpassword"]);

    //cek email
    $result = mysqli_query($conn,"SELECT email FROM akun_perusahaan WHERE email = '$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                window.alert('Email sudah terdaftar!');
            </script>";
        return false;
    }
    $result2 = mysqli_query($conn,"SELECT email FROM akun_perusahaan WHERE email = '$email'");
    if(mysqli_fetch_assoc($result2)){
        echo "<script>
                window.alert('Email sudah terdaftar!');
            </script>";
        return false;
    }
    
     
    // validasi password

    if ($password !== $cpassword){
        echo "<script>
                window.alert('Password Yang Anda Masukkan Tidak Sama!');
            </script>";
        return false;
    }
    
    //enkripsi password
    $password = md5($password); 

    //tambah data ke database
    mysqli_query($conn,"INSERT INTO akun_perusahaan VALUES('','$email','$password')");

    mysqli_affected_rows($conn);
    echo "<script>
                window.confirm('Registrasi Berhasil');
            </script>";
}
?>