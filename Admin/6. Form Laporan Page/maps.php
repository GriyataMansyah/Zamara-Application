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
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <style>
        * {
            margin:0;
            padding:0;
        }

        #map { height: 100vh; }
        #map2 { height: 100vh; }

        #form-container {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 1000;
            width:350px;
        }

        #form-container {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 1000;
            width:370px;
        }

        #form-container2 {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 1000;
            width:95%;
        }

        .hey1 {
            font-size:12px;
            margin-top:-15px;
        }

        .hidden {
            display:none;
        }

        .hey2 {
            width:100%;
            height:10vh;
        }

        .hey22 {
            width:100%;
            height:10vh;
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top:-30px;
        }

        .hey3 {
            display:flex;
            justify-content:center;
            padding-bottom:5px;
            padding-top:5px;
        }

     </style>
</head>
<body>

    <div id="map"></div>

    <div id="form-container">
    <h3 class="hey3">BUAT LAPORAN</h3>

    <form id="location-form" method="post" action="simpan_laporan.php">
<hr>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="text" name="judul" required>
  <label for="floatingInput">JUDUL</label>
</div>

<div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" placeholder="text" name="deskripsi" required>
  <label for="floatingInput">DESKRIPSI</label>
</div>
<div>

<hr>
<p class="hey1">JANGAN LUPA TENTUKAN LOKASI DI MAPS !!!</p>
<br> 
<input class="hidden"type="text" name="username" placeholder="Masukkan akun_id" value="<?php echo $_SESSION['user'];?>">
<input class="hidden"type="text" name="jenis" placeholder="" value="tidak darurat">
<label class="hidden"for="latitude">Latitude:</label>
<input class="hidden"type="text" id="latitude" name="latitude">
<label class="hidden"for="longitude">Longitude:</label>
<input class="hidden"type="text" id="longitude" name="longitude">
<input class="hidden"type="text" name="status" value="proses">
        
        <button type="submit" class="btn btn-primary hey2">KIRIM</button>
    </form>
    </div>





</body>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>


<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    var customMap = L.map('map').setView([1.1865988494755573, 104.00995155945176], 13);

    // Use OpenStreetMap tile layer
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(customMap);

    var myMarker = L.marker([1.1865988494755573, 104.00995155945176]).addTo(customMap);

    customMap.on('click', function(event) {
        var newLatLng = event.latlng;
        myMarker.setLatLng(newLatLng);

        // Update input fields with new coordinates
        document.getElementById('latitude').value = newLatLng.lat;
        document.getElementById('longitude').value = newLatLng.lng;
    });
</script>

</html>