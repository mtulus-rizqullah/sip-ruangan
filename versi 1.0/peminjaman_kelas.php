<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIPR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="halaman_user.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">TUTORIAL</a></li>
                        <li class="nav-item"><a class="nav-link" href="nontifikasi.php">NONTIFIKASI</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKUN</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">PENGATURAN</a></li>
                                <li><a class="dropdown-item" href="index.php">LOGOUT</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header--><div class="col-lg-12 text-center mt-5">
          
          <h1>Input Data Peminjaman</h1>
          <h4>Class Room</h4>
          <form method="post" action="nontifikasi.php">
            <table cellpadding="8">
              <tr>
                <td>Ruangan</td>
                <td><input type="text" name="ruangan"></td>
              </tr>
              <tr>
                <td>Nama Peminjaman</td>
                <td><input type="text" name="nama_peminjaman"></td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td><input type="text" name="Kelas"></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
              </tr>
              <tr>
                  <td>Tanggal Peminjaman</td>
                  <td><input type="date" name="tanggal_peminjaman"></td>
                  </tr>
              <tr>
                <td>Tanggal Pengembalian</td>
                <td><input type="date" name="tanggal_pengembalian"></td>
                </tr>
                <tr>
                <td>Tujuan</td>
               <td><textarea name="tujuan"></textarea></td>
              </tr>
            </table>
            </form>
            <hr>
            </form>
            <input type="submit" value="Ajukan">
            <input type="button" value="Batal">
          </form>