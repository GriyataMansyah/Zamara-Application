<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Siaran</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .body {
            background-image: url(Asset/background.png);
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            margin: 18px;
            margin-top: 12px;
            border-radius: 20px;
            box-sizing: border-box;
            background: linear-gradient(180deg, #AC0000 0%, #FF004C 99.99%, rgba(255, 0, 0, 0.96) 100%);
            height: 96vh;
        }

        .kepala {
            height: 12vh;
            width: 97%;

            margin-top: 8px;
            margin-left: 8px;
            margin-right: 8px;
            background-color: white;
            

        }

        .badan {
            height: 77vh;
            background-color: white;
            width: 97%;
            margin-top: 6px;
            margin-left: 8px;
            margin-right: 8px;
        }

        .hey1 {
            margin-top: 6px;
            margin-left: 8px;
            margin-right: 8px;
            
            height: 8vh;
            width: 95%;
        }

        #hey2 {
            width: 90%;
            height:6.5vh;
            
        }

        .hey3 {
            color: #000;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-family: Overlock SC;
            font-size: 35px;
            font-style: normal;
            font-weight: 400;
            display: flex;
            align-items:center;
            justify-content: center;
            height:11vh;
            
        }

        .hey3b {
            color: #000;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-family: Overlock SC;
            font-size: 35px;
            font-style: normal;
            font-weight: 400;
            display: flex;
            align-items:center;
            justify-content: center;
            height:11vh;
            background-color:red;
            
        }

        .hey4 {
            width: 120px;
            position: absolute;
            margin-top: 30px;
            top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
            
        }

        .hey5 {
            font-size: 2000%;
        }

        .hey6 {
            color: #000;

font-family: Palanquin;
font-size: 38px;
font-style: normal;
font-weight: 400;

        }

        .hey6b {
            color: #000;

font-family: Palanquin;
font-size: 26px;
font-style: normal;
font-weight: 400;

        }
    </style>
</head>

<body class="body">

    <div class="wrapper d-none d-md-block">

        <div class="kepala rounded mx-auto d-block">
            <h6 class="hey3 ">LAPORAN DARURAT</h6>
        </div>

        <div class="badan rounded mx-auto d-block">
        <ion-icon name="radio-outline" class="mx-auto d-block hey5" ></ion-icon>
            <p class="hey6 text-center">SISTEM SEDANG MEMBERIKAN LAPORAN KEPADA SEMUA PENGGUNA</p>
        </div>
        <div class="hey1 rounded mx-auto d-block">
            <button class="btn btn-primary mx-auto d-block" id="hey2" onclick="location.href='../5. Daftar Laporan Page/Daftar Laporan.php'">HENTIKAN</button>
        </div>

    </div>
<!----------------------------------- UPDATER TERBARU -------------------------------------------->
<div class="col-md-12 d-block d-md-none">
<div class="kepala rounded mx-auto d-block">
            <h6 class="hey3b ">LAPORAN DARURAT</h6>
        </div>

        <div class="badan rounded mx-auto d-block">
        <ion-icon name="radio-outline" class="mx-auto d-block hey5" ></ion-icon>
            <p class="hey6b text-center">SISTEM SEDANG MEMBERIKAN LAPORAN KEPADA SEMUA PENGGUNA</p>
        </div>
        <div class="hey1 rounded mx-auto d-block">
            <button class="btn btn-primary mx-auto d-block" id="hey2" onclick="location.href='../5. Daftar Laporan Page/Daftar Laporan.php'">HENTIKAN</button>
        </div>
    </div>


    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>