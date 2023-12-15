<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../../2. Login Page/LoginPage.html");
    exit();
}

$nama = $_SESSION['user'];

// Mengambil data admin termasuk akun_id
$query_admin = mysqli_query($koneksi, "SELECT admin_id, nama, no_hp, alamat, tgl_lahir FROM tb_admin WHERE nama = '$nama'");

if (!$query_admin) {
    die('SQL Error: ' . mysqli_error($koneksi));
}

$data_admin = mysqli_fetch_assoc($query_admin);
$_SESSION['admin_data'] = $data_admin;

// Mengambil peran akun dan akun_id
$query_akun = mysqli_query($koneksi, "SELECT akun_id, role FROM tb_akun WHERE username = '$nama'");

if (!$query_akun) {
    die('SQL Error: ' . mysqli_error($koneksi));
}

$data_akun = mysqli_fetch_assoc($query_akun);
$_SESSION['akun_data'] = $data_akun;

$akun_id = $_SESSION['akun_data']['akun_id'];

$query_admin_terbaru = mysqli_query($koneksi, "SELECT admin_id, nama, no_hp, alamat, tgl_lahir FROM tb_admin WHERE admin_id = '$akun_id'");
if (!$query_admin_terbaru) {
    die('SQL Error: ' . mysqli_error($koneksi));
}
$data_admin_terbaru = mysqli_fetch_assoc($query_admin_terbaru);
$_SESSION['admin_data'] = $data_admin_terbaru;

$query_akun_terbaru = mysqli_query($koneksi, "SELECT akun_id,username,password,role FROM tb_akun WHERE akun_id = '$akun_id'");

if (!$query_akun_terbaru) {
    die('SQL Error: ' . mysqli_error($koneksi));
}
$data_akun_terbaru = mysqli_fetch_assoc($query_akun_terbaru);

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .body {
            background-image: url(Asset/background.png);
        }

        .wrapper {
            display: flex;
            margin: 20px;
            border-radius: 20px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.8);
            height: 93vh;
        }

        .sidebar h3 {
            font-size: 30px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .sidebar h3 span {
            color: blue;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #333;
        }

        .content {
            padding: 18px;
        }

        form {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            height: 70vh;
        }

        .report-heading {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .all-elements {
            margin-top: 10px;
           
            height:26vh;
        }

        .hey1 {
            min-height: 93vh ;
            border-right:1px solid black;
        }

        .ion-icon {
            font-size: 50px;
            margin-right: 8px;
            padding-left: 10%;
        }


        .hey2 {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .hey3 {
            display: flex;
            align-items: center;
        }

        .icon-text {
            display: inline-block;
        }

        .hey4 {
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            border-bottom:1px solid black;

        }

        .hey5 {
            justify-content: space-between;
        }

        .hey6 {
            color: black;
            font-size: 250%;
        }

        .hey7 {
            display: block;
        }

        .hey8 {
            align-items: center;
        }


        #hey10 {
            width:30%;
            height:8vh;
        }

        .hey11 {
            display:flex;
            justify-content: space-between;
            border:1px solid black;
        }
        
        .hey12 {
            width:100%;
            border-radius: 10px;
            padding:7px;
            margin-top:4.5px;
            margin-bottom:4.5px;
            border: 1px solid #302c2c;
            
        }

        #hey14 {
            width: 40%;
           
            border-radius: 20px;
            height:7vh;
            justify-content: center;
            align-items: center;
        }


        .hey17 {
            font-size: 27px;
            letter-spacing: 0.2px;
        }

        .hilang {
            color:transparent;
            background-color: white;
        }

        .custom-width {
      width: 100%; /* Atur lebar 100% */
      height: 55px;
      margin-top: 10px;
      max-width: 10000px; /* Atur lebar maksimum jika perlu */
      font-family: "Arial"
    }

    .hey18 {
        width: 10000px;
    }

    .hey19 {
        margin-top: 19px;
        width: 40%;
        height: 55px;
        border-radius: 20px;
    }

    .hey20 {
        margin-top: 10px;
        border-radius: 20px;
        border:1px solid black;
        width: 100%;
        height:70vh;
        margin-left: 0.5px;
        background-color: white;
    }

    .hey21 {
        border-radius: 50%;
        width:50%;
        margin-top:30px;
    }

    .hey22 {
        margin-top: 30px;
        background-color: aqua;
        width:100%;
        height: 40vh;
    }

    .hey23 {
        font-size: 30px;
    }

    .hey24 {
        background-color: white;
        margin-top: 10px;
        border-radius: 20px;
        border:1px solid black;
    }

    .hey25 {
        margin-top: -19px;
    }

    .hey26 {
        background-color: whitesmoke;
    }

    .hey27 {
        width: 20%;
        height:7vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrapper {
        overflow: hidden;
        overflow-y: scroll;
    }

    .hidden {
        display : none;
    }

    .hey27b {
        width: 30%;
        height:7vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    </style>
</head>

<body class="body">
    <div class="hey4 d-block d-md-none d-flex justify-content-between">
        <img src="Asset/Zamara(1).png" width="29%" class="">

        <div class="hey7">
            <a class="hey8" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <ion-icon name="menu-outline" class="hey6"></ion-icon>
            </a>

            <div class="col-md-6">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header hey8">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body hey8">
                        <div>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                <li class="nav-item">
                                    <a class="nav-link hey3" href="../12. Dashboard/Dashboard.php">
                                    <ion-icon name="home-outline" class="ion-icon" href="../12. Dashboard/Dashboard.php"></ion-icon><span
                                            class="icon-text" href="../12. Dashboard/Dashboard.php">DASHBOARD</span>
                                    </a>
                                </li>
                                    <a class="nav-link hey3" href="../9. Profile Page/Profile Page.php">
                                        <ion-icon name="person-circle-outline" class="ion-icon" href="../9. Profile Page/Profile Page.php"></ion-icon><span
                                            class="icon-text" href="../9. Profile Page/Profile Page.php">PROFILE</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link hey3" href="../5. Daftar Laporan Page/Daftar Laporan.php">
                                        <ion-icon name="chatbox-outline" class="ion-icon" href="../9. Profile Page/Profile Page.php"></ion-icon></ion-icon><span
                                            class="icon-text" href="../5. Daftar Laporan Page/Daftar Laporan.php">LAPORAN</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link hey3" href="../3. Siaran Page/Daftar Siaran.php">
                                        <ion-icon name="barcode-outline" class="ion-icon" href="../9. Profile Page/Profile Page.php"></ion-icon></ion-icon><span
                                            class="icon-text" href="../3. Siaran Page/Daftar Siaran.php">SIARAN</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link hey3" href="../11. Daftar Akun Page/Daftar Akun.php">
                                        <ion-icon name="add-circle-outline" class="ion-icon" href="../11. Daftar Akun Page/Daftar Akun.php"></ion-icon></ion-icon><span
                                            class="icon-text" href="../11. Daftar Akun Page/Daftar Akun.php">AKUN BARU</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper d-none d-md-block">
        <div class="container-fluid ">
            <div class="row">
                <!-- Sidebar -->
                <nav class="col-md-2 d-none d-md-block bg-light sidebar hey1">
                    <div class="sidebar-sticky">
                        <img src="Asset/Zamara.png" class="img-fluid hey2" alt="Zamara Logo">
                        <ul class="nav flex-column">
                        <li class="nav-item">
                                    <a class="nav-link hey3" href="../12. Dashboard/Dashboard.php">
                                    <ion-icon name="home-outline" class="ion-icon" href="../12. Dashboard/Dashboard.php"></ion-icon><span
                                            class="icon-text d-none d-xl-block" href="../12. Dashboard/Dashboard.php">DASHBOARD</span>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link hey3" href="../9. Profile Page/Profile Page.php">
                                    <ion-icon name="person-circle-outline" class="ion-icon" href="../9. Profile Page/Profile Page.php"></ion-icon><span
                                        class="icon-text d-none d-xl-block" href="../9. Profile Page/Profile Page.php">PROFILE</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hey3" href="../5. Daftar Laporan Page/Daftar Laporan.php">
                                    <ion-icon name="chatbox-outline" class="ion-icon" href="../5. Daftar Laporan Page/Daftar Laporan.php"></ion-icon></ion-icon><span
                                        class="icon-text d-none d-xl-block" href="../5. Daftar Laporan Page/Daftar Laporan.php">LAPORAN</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hey3" href="../3. Siaran Page/Daftar Siaran.php">
                                    <ion-icon name="barcode-outline" class="ion-icon" href="../3. Siaran Page/Daftar Siaran.php"></ion-icon></ion-icon><span
                                        class="icon-text d-none d-xl-block" href="../3. Siaran Page/Daftar Siaran.php">SIARAN</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hey3" href="../11. Daftar Akun Page/Daftar Akun.php">
                                    <ion-icon name="add-circle-outline" class="ion-icon" href="../11. Daftar Akun Page/Daftar Akun.php"></ion-icon></ion-icon><span
                                        class="icon-text d-none d-xl-block" href="../11. Daftar Akun Page/Daftar Akun.php">AKUN BARU</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <!-- Content -->
                <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

                    <div class="content">
                        <div class="report-heading hey11">
                            <h2 class="mx-auto d-block"> PROFILE</h2>
                        </div>
                        <section style="background-color: #eee;">
                            <div class="container py-5 hey24">
                                <div class="row">
                                <div class="col-lg-4 hey25">
                                  <div class="card mb-4 hey26">
                                    <div class="card-body text-center">
                                      <img src="Asset/Profile.png" alt="avatar"
                                        class="rounded-circle img-fluid" style="width: 150px;">
                                      <h5 class="my-3"><?php echo $_SESSION['user'];?></h5>
                                      <p class="text-muted mb-1">Batam</p>
                                      <p class="text-muted mb-4">Warga Negara Indonesia</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-8 ">
                                  <div class="card mb-4 hey26">
                                    <div class="card-body">
                                      <div class="row ">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Nama</p>
                                        </div>                                        
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['nama']; ?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['alamat']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['tgl_lahir']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">No Hp</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['no_hp']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_akun_terbaru['role']?></p>
                                        </div>
                                   
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
<!------------------------------------------------------------ UPDATE TERBARU ------------------------------------------------------------->
    <main role="main" class="col-md-12 d-block d-md-none">

                    <div class="content">
                        <div class="report-heading hey11 ">
                            <h2 class="mx-auto d-block"> PROFILE</h2>
                        </div>
                        <section style="background-color: ;">
                            <div class="container py-5 hey24">
                                <div class="row">
                                <div class="col-lg-4 hey25">
                                  <div class="card mb-4 hey26">
                                    <div class="card-body text-center">
                                      <img src="Asset/Profile.png" alt="avatar"
                                        class="rounded-circle img-fluid" style="width: 150px;">
                                      <h5 class="my-3"><?php echo $_SESSION['user']?></h5>
                                      <p class="text-muted mb-1">Batam</p>
                                      <p class="text-muted mb-4">Warga Negara Indonesia</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-8 ">
                                  <div class="card mb-4 hey26">
                                    <div class="card-body">
                                      <div class="row ">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Nama</p>
                                        </div>                                        
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['nama']; ?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['alamat']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['tgl_lahir']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">No Hp</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_admin_terbaru['no_hp']?></p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0"><?php echo $data_akun_terbaru['role']?></p>
                                        </div>
                                   
                                      </div>
                                    </div>

                                </div>
                              </div>
                            </div>
                          </section>
                          </div>
                        </div>
                    </div>
                </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>