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

        #form-container {
            position: absolute;
            top: 12px;
            left: 50px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 1000;
            width:350px;
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

        .hey3 {
            display:flex;
            justify-content:center;
            padding-bottom:5px;
            padding-top:5px;
        }

        .hey4 {
            width:100%;
        }
     </style>
</head>
<body> 
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
<div id="form-container">
<a class="btn btn-danger hey4" href="Komentar Laporan.php?id=<?php echo $id_laporan; ?>">KEMBALI</a>
</div>
<div id="map"></div>
</body>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <script>
    var customMap;
    var myMarker;

    // Initialize the map and marker with custom parameters
    function initializeMap() {
        // Get latitude and longitude from URL parameters
        var urlParams = new URLSearchParams(window.location.search);
        var initialLatitude = parseFloat(urlParams.get('latitude')) || 1.1865988494755573;
        var initialLongitude = parseFloat(urlParams.get('longitude')) || 104.00995155945176;
        var initialLatLng = [initialLatitude, initialLongitude];

        var initialZoom = parseInt(urlParams.get('zoom')) || 13;

        customMap = L.map('map').setView(initialLatLng, initialZoom);

        // Use OpenStreetMap tile layer
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(customMap);

        myMarker = L.marker(initialLatLng).addTo(customMap);
    }

    // Call initializeMap when the page loads
    initializeMap();

    // Update marker function
    function updateMarker() {
        // Get values from input fields
        var latitude = parseFloat(document.getElementById('latitude').value);
        var longitude = parseFloat(document.getElementById('longitude').value);

        // Check if the values are valid numbers
        if (!isNaN(latitude) && !isNaN(longitude)) {
            // Update marker position
            myMarker.setLatLng([latitude, longitude]);

            // Update map view to the new marker position
            customMap.setView([latitude, longitude], customMap.getZoom());
        }
    }
</script>


</html>