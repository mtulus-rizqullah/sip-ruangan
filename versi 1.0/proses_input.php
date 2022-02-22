<?php
include 'connect.php';

    $ruangan = $_POST['Ruangan'];
    $nama_peminjaman = $_POST['Nama Peminjaman'];
    $kelas = $_POST['Kelas'];
    $nim = $_POST['NIM'];
    $tanggal_peminjaman = $_POST['Tanggal Peminjaman'];
    $tangga_pengembalian = $_POST['Tanggal Pengembalian'];
    $tujuan = $_POST['Tujuan'];

    $sql = "INSERT INTO kelas VALUES(NULL,'$ruangan ','$nama_peminjaman','$kelas','$nim','$tanggal_peminjaman','$tangga_pengembalian',' $tujuan') ";
    
    $result = $conn->query($sql) or die("Cannot write");

    if($result){
        echo '<script language-"javascript">alert("Input berhasil ditambahkan.");
        document.location="input_data_class.php";</script>';
    }
    else {
        echo '<script language-"javascript">alert("Input gagal ditambahkan.");
        document.location="input_data_class.php";</script>';
    }

?>
