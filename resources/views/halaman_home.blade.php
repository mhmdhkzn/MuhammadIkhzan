<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Wisata Dunia</title>
    <style>

        
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset('images/bckground.webp') }}') no-repeat center/cover fixed;
            color: white;
        }


        /* NAVBARR */
        .navbar {
            width: 100%;
            background: rgba(0,0,0,0.6);
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 15px 40px;
            position: fixed;
            top: 0;
            z-index: 100;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        /* HEADER */
        .header {
            text-align: center;
            padding-top: 100px;
            padding-bottom: 20px;
            background: rgba(0,0,0,0.5);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        /* GRID */
        .container {
            width: 90%;
            margin: auto;
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        /* CARD */
        .card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: .4s ease;
        }

        .card:hover img {
            transform: scale(1.08);
        }

        .card-title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 12px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            font-size: 18px;
        }
    </style>
</head>
<body>


    <!-- NAVBAR -->

    <div class="navbar">
        <div>
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </div>
        <div>2301010083 - MUHAMMAD IKHZAN (GANJIL)</div>
        <div>2301010130 - I MADE ARYA WIBAWA (GENAP)</div>
    </div>


    <!-- HEADER -->
    <div class="header">
        <h1>Halaman ini dibuat oleh 2301010083 - MUHAMMAD IKHZAN</h1>
    </div>

    
    <!-- GRID GAMBAR -->
    <div class="container">

        <div class="card">
            <img src="{{ asset('images/acropolis.jpg') }}" alt="Foto">

            <div class="card-title">Acropolis, Yunani</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/shibuya.jpg') }}" alt="Foto">
            <div class="card-title">Shibuya, Jepang</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/cappadocia.webp') }}" alt="Foto">
            <div class="card-title">Cappadocia, Turki</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/giza.webp') }}" alt="Foto">
            <div class="card-title">Giza, Mesir</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/garuda.jpg') }}" alt="Foto">
            <div class="card-title">Garuda Wisnu Kencana, Bali</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/huayana.jpg') }}" alt="Foto">
            <div class="card-title">Huayana, Peru</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/jumeirah.jpg') }}" alt="Foto">
            <div class="card-title">Jumeirah, Abu Dhabi</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/newyork.jpg') }}" alt="Foto">
            <div class="card-title">New York, US</div>
        </div>

        <div class="card">
            <img src="{{ asset('images/niagara.jpg') }}" alt="Foto">
            <div class="card-title">Niagara, Kanada</div>
        </div>

    </div>

</body>
</html>
