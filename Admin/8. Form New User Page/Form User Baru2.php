<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    // Jika belum, redirect ke halaman login
    header("Location: ../../2. Login Page/LoginPage.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buat User Baru</title>
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
            background-color: rgba(255, 255, 255, 0.8);
            height: 93vh;
            overflow: hidden;
            
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
            height:78;
            margin-top: -5px;
            
            
        }

        form {
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            height: 76vh;
            overflow: hidden;
            overflow-y:scroll ;
            border:1px solid black;
        }

        .report-heading {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .all-elements {
        
            height:76vh;
        }

        .hey1 {
            min-height: 90vh ;
            height: 93vh;
            border-right:1px solid black;
            border-radius: 20px 0 0 20px;
        
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
            color : black;
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
            font-size: 20px;
            letter-spacing: 0.2px;
        }

        .hilang {
            color:transparent;
            background-color: white;
        }

        .custom-width {
      width: 98%; /* Atur lebar 100% */
      height: 44px;
      margin-top: 8px;
      max-width: 10000px; /* Atur lebar maksimum jika perlu */
      font-family: "Arial"
    }

    .hey18 {
        width: 1000px;

    }

    .hey19 {
        margin-top: 8px;
        width: 35%;
        height: 45px;
        margin-right:6px;
        border-radius: 20px;
    }

    .hidden {
            display: none;
        }

    .hidden2 {
        display: none;
    } 

    .custom-width2 {
      width: 100%; /* Atur lebar 100% */
      height: 44px;
      margin-top: 8px;
      max-width: 1091px; /* Atur lebar maksimum jika perlu */
      font-family: "Arial"}

      .hey20{
        margin-top: 5px;
        height: 77vh;
        overflow: scroll;
        background-color:white;
        border:1px solid black;
        border-radius:15px;
        
      }

      .hey22 {
        height: 30px;
      }

      .hey31 {
        margin-left:10px;
      }

      a {
        color:white;
      }

      .hey23 {
    position: fixed;
    left: 50%;
    transform: translateX(-50%); 
    justify-content: center; 
}
    </style>
    
</head>
<div class="alert alert-warning alert-dismissible fade show hey23" role="alert">
  <strong>Hai <?php echo $_SESSION['user']; ?></strong>, Silahkan Isi Kembali Kolom Yang Kosong !!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
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
                            <h2 class="mx-auto d-block"> BUAT USER BARU</h2>
                        </div>

                        <div class="hey20">
                        <table class="table">

        <form id="myForm" method="post">
        <table class="hey31">
            <!-- ... Bagian lain dari form ... -->
            <tr>
                <td class="hey17">Role</td>
                <td></td>
                <td class="hey17">:</td>
                <td class="hey18">
                    <select id="roleSelect" name="role" class="form-control custom-width" onchange="updateFormAction()">
                        <option value=""selected></option>
                        <option value="admin">Admin</option>
                        <option value="masyarakat" >Masyarakat</option>
                        <option value="rt_rw">RT/RW</option>
                        <option value="security">Security</option>
                    </select>
                </td>
            </tr>
        <tr>
            <td class="hey17">Kewarnegaraan</td>
            <td></td>
            <td class="hey17">:</td>
            <td class="hey18">
                <select name="warga_negara" class="form-control custom-width">
                    <option value=""selected></option>
                    <option value="asing">Asing</option>
                    <option value="indonesia">Indonesia</option>
                </select>
            </td>
        </tr>
                                  <tr>
                                    <td class="hey17">Username</td>
                                    <td class="hilang">ppppp</td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="username" class="form-control custom-width"></td>
                                  </tr>
                                  <tr>
                                    <td class="hey17">Password</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="password" class="form-control custom-width"></td>
                                  </tr>
                                  <tr>
                                    <td class="hey17">NIK</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="nik" class="form-control custom-width"></td>
                                  </tr> <tr>
                                    <td class="hey17">Nama</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="nama" class="form-control custom-width"></td>
                                  </tr> <tr>
                                    <td class="hey17">No Hp</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="no_hp"class="form-control custom-width"></td>
                                  </tr><tr>
                                    <td class="hey17">Alamat</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="alamat" class="form-control custom-width"></td>
                                  </tr><tr>
                                    <td class="hey17">Tanggal Lahir</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="date" name="tgl_lahir" class="form-control custom-width"></td>
                                  </tr>
                                </table>
                                <button type="submit" class="hey19 float-end btn btn-primary">KIRIM</button>
                              </form>
        
                </div>

                </main>
                

            </div>
        </div>
    </div>



<!------------------------------------------- UPDATE TERBARU ------------------------------------------------------------>
<main role="main" class="col-md-12 d-block d-md-none">

                    <div class="content">
                        <div class="report-heading hey11">
                            <h2 class="mx-auto d-block"> BUAT USER BARU</h2>
                        </div>

                        <div class="hey20">
                        <table class="table">

        <form id="myForm" method="post">
        <table class="hey31">
            <!-- ... Bagian lain dari form ... -->
            <tr>
                <td class="hey17">Role</td>
                <td></td>
                <td class="hey17">:</td>
                <td class="hey18">
                    <select id="roleSelect" name="role" class="form-control custom-width" onchange="updateFormAction()">
                        <option value=""selected></option>
                        <option value="admin">Admin</option>
                        <option value="masyarakat" >Masyarakat</option>
                        <option value="rt_rw">RT/RW</option>
                        <option value="security">Security</option>
                    </select>
                </td>
            </tr>
        <tr>
            <td class="hey17">Kewarnegaraan</td>
            <td></td>
            <td class="hey17">:</td>
            <td class="hey18">
                <select name="warga_negara" class="form-control custom-width">
                    <option value=""selected></option>
                    <option value="asing">Asing</option>
                    <option value="indonesia">Indonesia</option>
                </select>
            </td>
        </tr>
                                  <tr>
                                    <td class="hey17">Username</td>
                                    <td class="hilang">ppppp</td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="username" class="form-control custom-width"></td>
                                  </tr>
                                  <tr>
                                    <td class="hey17">Password</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="password" class="form-control custom-width"></td>
                                  </tr>
                                  <tr>
                                    <td class="hey17">NIK</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="nik" class="form-control custom-width"></td>
                                  </tr> <tr>
                                    <td class="hey17">Nama</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="nama" class="form-control custom-width"></td>
                                  </tr> <tr>
                                    <td class="hey17">No Hp</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="no_hp"class="form-control custom-width"></td>
                                  </tr><tr>
                                    <td class="hey17">Alamat</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="text" name="alamat" class="form-control custom-width"></td>
                                  </tr><tr>
                                    <td class="hey17">Tanggal Lahir</td>
                                    <td></td>
                                    <td class="hey17">:</td>
                                    <td class="hey18"><input type="date" name="tgl_lahir" class="form-control custom-width"></td>
                                  </tr>
                                </table>
                                <button type="submit" class="hey19 float-end btn btn-primary">KIRIM</button>
                              </form>
        
                </div>

                </main>

    <script>
        function updateFormAction() {
            var roleSelect = document.getElementById('roleSelect');
            var form = document.getElementById('myForm');


            var selectedRole = roleSelect.options[roleSelect.selectedIndex].value;

            if (selectedRole === 'admin') {
                form.action = 'simpan_admin.php';
            } else if (selectedRole === 'masyarakat') {
                form.action = 'simpan_masyarakat.php';
            } else if (selectedRole === 'rt_rw') {
                form.action = 'simpan_rt_rw.php';
            } else if (selectedRole === 'security') {
                form.action = 'simpan_security.php';
            }
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>