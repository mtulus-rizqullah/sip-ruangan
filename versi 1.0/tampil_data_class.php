<?php
//buat variabel dari setiap field name form produk
$Ruangan= mysqli_real_escape_string($conect, $_POST['ruangan']);    //varibel field nama
$Nama_Peminjaman= mysqli_real_escape_string($conect, $_POST['nama_peminjaman']);    //varibel field stok
$Kelas= mysqli_real_escape_string($conect, $_POST['kelas']);  //varibel field deskripsi
$NIM= mysqli_real_escape_string($conect, $_POST['nim']);        //varibel field harga
$Tanggal_Peminjaman= mysqli_real_escape_string($conect, $_POST['tanggal_peminjaman']);  //varibel field kategori
$Tanggal_Pengembalian= mysqli_real_escape_string($conect, $_POST['tanggal_pengembalian']);       //varibel field berat
$Tujuan= mysqli_real_escape_string($conect, $_POST['tujuan']);     //varibel field diskon

if(isset($_POST['Simpan'])){
 $save=mysqli_query($conect, "INSERT INTO kelas (Ruangan,Nama Peminjaman,Kelas,NIM,Tanggal Peminjaman,Tangaal Pengembalian,Tujuan,)
    values ('','$Ruangan','$Nama_Peminjaman','$Kelas','$Tanggal_Peminjaman','$Tanggal_Pengembalian','$Tujuan')");
    if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='produk.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='input.php'</script>";
    }
}
?>