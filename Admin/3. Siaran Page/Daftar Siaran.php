
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laporan</title>
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
            overflow: hidden;
            overflow-y: scroll;
            height:75vh;
            border:1px solid black;
            border-radius: 20px;
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

        .hey9 {
            display: flex;
            justify-content: center;
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
            overflow: clip;
            
        }

        .hey13 {
            background-color:white;
            border-radius: 20px;
        }

        #hey14 {
            width: 100%;
            display: flex;
            justify-content: center;
            border-radius: 20px;
            height:7vh;
            align-items: center;
            margin-top: -7px;
        }

        .hey15 {
            margin-top: 18px;
            
        }

        .hey16 {
            border-radius: 20px;
            border: 1.5px solid black;
            padding-top:5px;
            padding-left:10px;
            background-color: white;
            margin-top:-5px;
            color:black;
            padding-right: 10px;

        }

        .hey16:active {
            background-color: #ccc;
            color:black;
        }

        a {
            text-decoration: none;
        }

        .hidden {
            display: none;
        }

        a {
            color:black;
        }

        a:hover {
            color:black;
        }

        .all-elements2 {
            margin-top: 10px;
            overflow: hidden;
            overflow-y: scroll;
            height:73vh;
            border:1px solid black;
            border-radius: 20px;
        }

        .hey11b {
            border:1px solid black;
        }

        .hey17 {
            width : 75px;
            height: 75px;
            position: absolute;
            bottom: 0;
            right:0;
            margin-bottom: 50px;
            margin-right: 30px;
            
        }

        .hey18 {
            font-size: 65px;
        }

        #hey19 {
            border:1px solid black;
            background-color:salmon;
            border-radius:50px;
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
                                    <a class="nav-link hey3" href="../12. Dashboard/Dashboard.php">
                                    <ion-icon name="home-outline" class="ion-icon" href="../12. Dashboard/Dashboard.php"></ion-icon><span
                                            class="icon-text" href="../12. Dashboard/Dashboard.php">DASHBOARD</span>
                                    </a>
                                </li>
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
                            <h2 class="hey9 mx-auto"> DAFTAR SIARAN</h2>
                        </div>

                        <div class="hey13">
                        <div class="all-elements">
                       
                        <?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tb_siaran WHERE status = 'belum' ORDER BY tanggal DESC");

if (!$query) {
    die('SQL Error: ' . mysqli_error($koneksi));
}

while ($data = mysqli_fetch_assoc($query)) {
?>
    <form method="post" action="Siaran Selesai.php">
        <div class="hey12">
            <h4><?php echo $data['judul']; ?></h4>
            <p><?php echo $data['deskripsi']; ?></p>
            <p class="text-end"><?php echo $data['tanggal']; ?></p>
        </div>
<?php
}
?>
    </form>             
                        </div>


                    
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>                  
                        </div>
                        </div>
                    </div>
                </main>
<!---------------------------------------------------------- UPDATE TERBARU --------------------------------------------->
<main role="main" class="col-md-12 d-block d-md-none">

<div class="content">
    <div class="report-heading hey11">
        <h2 class="hey9 mx-auto"> DAFTAR SIARAN</h2>
    </div>

    <div class="hey13">
    <div class="all-elements">
   
    <?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tb_siaran WHERE status = 'belum' ORDER BY tanggal DESC");

if (!$query) {
    die('SQL Error: ' . mysqli_error($koneksi));
}

while ($data = mysqli_fetch_assoc($query)) {
?>
    <form method="post" action="Siaran Selesai.php">
        <div class="hey12">
            <h4><?php echo $data['judul']; ?></h4>
            <p><?php echo $data['deskripsi']; ?></p>
            <p class="text-end"><?php echo $data['tanggal']; ?></p>
        </div>
<?php
}
?>
</form>             
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
