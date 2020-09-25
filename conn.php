<?php

$connect = mysqli_connect('localhost','root','','company_profile');

// cara pertama :
if ($connect)
    echo "berhasil";
    else 
    echo "gagal";

// if (!$connect)
//     exit ('Gagal Koneksi ke database');
    
?>