<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar  Laporan</title>
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

        .form {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            padding-top:10px;
            height: 67vh;
            overflow:scroll;
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
            display: inline-block;
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
        }

        .hey15 {
            margin-top: 18px;
            
        }

        .hey16 {
            border-radius: 20px;
            border: 1.5px solid black;
            padding-top:5px;
            background-color: white;
            margin-top:4px;
            padding:15px;            
        }

        .hey22 {
            width:85%;
            border:1px solid black;
            height: 9vh;
            border-radius: 20px;
            padding-top: 8px;
            padding-left: 30px;
            padding-right: 30px;
            margin:4px;
            
        }
        
        .hey23 {
            font-size: 20px;
        }

        .hey24 {
            margin-top: -10px;
        }

        .hey25 {
            width:100%;
            overflow: scroll;
        }

        .hey28 {
            width:100%;
            height:8vh;
            margin-top: -8px;
        }

        #hey29 {
            width:90%;
            height:6vh;
            margin-top:4px;
            background-color: #ccc;
            border-radius: 5px;
        }

        #hey30 {
            margin-top: -8px;
            width:8%;
        }

        .card{
            margin-top:5px;
            border:1px solid black;
        }

        .hidden {
            display : none;
        }
    </style>
</head>

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
                        </ul>
                    </div>
                </nav>

                <!-- Content -->
                <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">

                    <div class="content">
                        <div class="report-heading hey11">
                            <h2 class="mx-auto d-block"> KOMENTAR</h2>
                            
                        </div>

                        <div class="hey13">
                        <div class="all-elements">
                            <form class="form">

                            <?php
include 'koneksi.php';

// Ambil nilai id dari parameter URL
$id_laporan = $_GET['id'];

// Query untuk mendapatkan data laporan berdasarkan id
$query_laporan = mysqli_query($koneksi, "SELECT * FROM tb_laporan WHERE id_laporan='$id_laporan'");
$data_laporan = mysqli_fetch_assoc($query_laporan);

// Query untuk mendapatkan komentar berdasarkan id laporan
$query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_laporan='$id_laporan'");

?>
<?php
include 'koneksi.php';

// Ambil nilai id dari parameter URL
$id_laporan = $_GET['id'];

// Query untuk mendapatkan data laporan berdasarkan id
$query_laporan = mysqli_query($koneksi, "SELECT * FROM tb_laporan WHERE id_laporan='$id_laporan'");
$data_laporan = mysqli_fetch_assoc($query_laporan);

// Query untuk mendapatkan komentar berdasarkan id laporan
$query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_laporan='$id_laporan'");

?>
<label class="hidden" for="latitude">Latitude:</label>
<input class="hidden" type="text" id="latitude" name="latitude" oninput="updateMarker()" value="<?php echo $data_laporan['latitude']?>">
<label  class="hidden" for="longitude">Longitude:</label>
<input class="hidden" type="text" id="longitude" name="longitude" oninput="updateMarker()" value="<?php echo $data_laporan['longitude']?>">
<div class="hey16">
    <h4 class="text-start"><?php echo $data_laporan['judul']; ?></h4>
    <p class="text-start"><?php echo $data_laporan['deskripsi']; ?></p>
    <p class="text-end">
    <a href="maps.php?id=<?php echo $id_laporan; ?>&latitude=<?php echo $data_laporan['latitude']?>&longitude=<?php echo $data_laporan['longitude']?>">TAMPILKAN LOKASI</a>
</p>
    <!-- Menampilkan komentar -->
    
</div>                       
<hr><?php
while ($data_komentar = mysqli_fetch_assoc($query_komentar)) {
    ?>
    <div class="hey25">
        <div class="card">
            <div class="card-header">
                 <?php echo $data_komentar['username']; ?>
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $data_komentar['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <?php
}
?>
</form>
                            <form action="simpan komentar.php" method="post">
                             <div class="input-group mb-3">
                             <input type="hidden" name="id_laporan" value="<?php echo $data_laporan['id_laporan']; ?>">
                                <input type="text" class="hidden" name="username" value="<?php echo $_SESSION['user']; ?>">
                                <input type="text" name ="deskripsi" class="form-control" placeholder="Masukkan komentar anda ......" aria-label="Masukkan komentar anda ......" aria-describedby="basic-addon2" required>
                                <span class="input-group-text" id="basic-addon2"><button type="submit"class="btn btn-primary">KIRIM</button></span>
                              </div>
</form>
                        </div>

                    
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<!---------------------------------------------------------- UPDATE TERBARU ---------------------------------------------------->
<main role="main" class="col-md-12 d-block d-md-none">

<div class="content">
    <div class="report-heading hey11">
        <h2 class="mx-auto d-block"> KOMENTAR</h2>
        
    </div>

    <div class="hey13">
    <div class="all-elements">
        <form class="form">

        <?php
include 'koneksi.php';

// Ambil nilai id dari parameter URL
$id_laporan = $_GET['id'];

// Query untuk mendapatkan data laporan berdasarkan id
$query_laporan = mysqli_query($koneksi, "SELECT * FROM tb_laporan WHERE id_laporan='$id_laporan'");
$data_laporan = mysqli_fetch_assoc($query_laporan);

// Query untuk mendapatkan komentar berdasarkan id laporan
$query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_laporan='$id_laporan'");

?>
<?php
include 'koneksi.php';

// Ambil nilai id dari parameter URL
$id_laporan = $_GET['id'];

// Query untuk mendapatkan data laporan berdasarkan id
$query_laporan = mysqli_query($koneksi, "SELECT * FROM tb_laporan WHERE id_laporan='$id_laporan'");
$data_laporan = mysqli_fetch_assoc($query_laporan);

// Query untuk mendapatkan komentar berdasarkan id laporan
$query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_laporan='$id_laporan'");

?>
<label class="hidden" for="latitude">Latitude:</label>
<input class="hidden" type="text" id="latitude" name="latitude" oninput="updateMarker()" value="<?php echo $data_laporan['latitude']?>">
<label  class="hidden" for="longitude">Longitude:</label>
<input class="hidden" type="text" id="longitude" name="longitude" oninput="updateMarker()" value="<?php echo $data_laporan['longitude']?>">
<div class="hey16">
    <h4 class="text-start"><?php echo $data_laporan['judul']; ?></h4>
    <p class="text-start"><?php echo $data_laporan['deskripsi']; ?></p>
    <p class="text-end">
    <a href="maps.php?id=<?php echo $id_laporan; ?>&latitude=<?php echo $data_laporan['latitude']?>&longitude=<?php echo $data_laporan['longitude']?>">TAMPILKAN LOKASI</a>
</p>
    <!-- Menampilkan komentar -->

</div>                       
<hr><?php
while ($data_komentar = mysqli_fetch_assoc($query_komentar)) {
?>
<div class="hey25">
<div class="card">
<div class="card-header">
<?php echo $data_komentar['username']; ?>
</div>
<div class="card-body">
<p class="card-text"><?php echo $data_komentar['deskripsi']; ?></p>
</div>
</div>
</div>
<?php
}
?>
</form>
        <form action="simpan komentar.php" method="post">
         <div class="input-group mb-3">
         <input type="hidden" name="id_laporan" value="<?php echo $data_laporan['id_laporan']; ?>">
            <input type="text" class="hidden" name="username" value="<?php echo $_SESSION['user']; ?>">
            <input type="text" name ="deskripsi" class="form-control" placeholder="Masukkan komentar anda ......" aria-label="Masukkan komentar anda ......" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><button type="submit"class="btn btn-primary">KIRIM</button></span>
          </div>
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