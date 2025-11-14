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
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center/cover fixed;
            color: white;
        }

        /* NAVBAR */
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
            <a href="#">Home</a>
            <a href="#">About</a>
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
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Acropolis_of_Athens_2019.jpg">
            <div class="card-title">Acropolis, Yunani</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93">
            <div class="card-title">Shibuya, Jepang</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1505739772430-262fb57cddc8">
            <div class="card-title">Cappadocia, Turki</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
            <div class="card-title">Giza, Mesir</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1541417904950-b855846fe074">
            <div class="card-title">Garuda Wisnu Kencana, Bali</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606">
            <div class="card-title">Huayana, Peru</div>
        </div>

        <div class="card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Palm_Jumeirah%2C_Dubai%2C_United_Arab_Emirates.jpg">
            <div class="card-title">Jumeirah, Abu Dhabi</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1528476513691-07fdbf533b0a">
            <div class="card-title">New York, US</div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d">
            <div class="card-title">Niagara, Kanada</div>
        </div>

    </div>

</body>
</html>
