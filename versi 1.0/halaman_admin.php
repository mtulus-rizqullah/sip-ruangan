<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIPR Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles1.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SIPR</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="halaman_admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ruangan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Input_data_class.php">Class ROOM</a>
                                    <a class="nav-link" href="lnput_data_laporan.php">Laboran ROOM</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="konfirmasi.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-info-circle"></i></div>
                                Menuggu Konfirmasi
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">SIPR</div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-5 col-md-7">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">CLASSS ROOM</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Input_data_class.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-7">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">LABORAN ROOM</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Input_data_laboran.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Peminjaman
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Ruangan</th>
                                            <th>Nama Peminjaman</th>
                                            <th>Kelas</th>
                                            <th>NIM</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Tujuan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>IF 402</td>
                                            <td>Sukristiyo</td>
                                            <td>IF 4A Karyawan</td>
                                            <td>3311902212</td>
                                            <td>2021/08/15</td>
                                            <td>2021/08/16</td>
                                            <td>Pertemuan Kelompok KCB</td>
                                        </tr>
                                        <tr>
                                            <td>IF 406</td>
                                            <td>Rizky Saputra</td>
                                            <td>IF 4A Karyawan</td>
                                            <td>3311911021</td>
                                            <td>2021/08/14</td>
                                            <td>2021/08/15</td>
                                            <td>Pertemuan kelompok Jarkom</td>
                                        </tr>
                                        <tr>
                                            <td>IF 702</td>
                                            <td>Mutiara Samsida</td>
                                            <td>IF 4A Reguler</td>
                                            <td>3311901017</td>
                                            <td>2021/08/17</td>
                                            <td>2021/08/18</td>
                                            <td>Pratikum kelompok PPK</td>
                                        </tr>
                                        <tr>
                                            <td>IF 705</td>
                                            <td>Khadri Syahputra</td>
                                            <td>IF 4A Karyawan</td>
                                            <td>3311911013</td>
                                            <td>2021/08/18</td>
                                            <td>2021/08/19</td>
                                            <td>Pratikum kelompok Jarkom</td>
                                    </tbody>
                                    <?php
                                    include "connect.php";
                                    $sql = $pdo->prepare("SELECT * FROM kelas");
                                    $sql->execute();
                                    while($data = $sql->fetch()){
                                        echo "<tr>";
                                        echo "<td>".$data['Ruangan']."</td>";
                                        echo "<td>".$data['Nama Peminjaman']."</td>";
                                        echo "<td>".$data['Kelas']."</td>";
                                        echo "<td>".$data['NIM']."</td>";
                                        echo "<td>".$data['Tanggal Peminjaman']."</td>";
                                        echo "<td>".$data['Tanggal Pengembalian']."</td>";
                                        echo "<td>".$data['Tujuan']."</td>";                         
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIPR</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
