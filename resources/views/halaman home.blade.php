<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Wisata Dunia</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center/cover fixed;
            color: white;
        }

        .header-bg {
            background: rgba(0, 0, 0, 0.55);
            padding: 80px 20px 30px;
            text-align: center;
        }

        .card img {
            height: 240px;
            object-fit: cover;
            transition: .4s ease;
        }

        .card:hover img {
            transform: scale(1.07);
        }

        .title-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 12px;
            background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);
            color: white;
            font-size: 17px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Home</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

                <span class="navbar-text me-3">
                    2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI (GENAP)
                </span>

                <span class="navbar-text">
                    2301010097 - ARTHUR EMANUEL DEKKO (GANJIL)
                </span>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <div class="header-bg mt-5 pt-5">
        <h2>Halaman ini dibuat oleh 2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI</h2>
    </div>

    <!-- GRID GAMBAR -->
    <div class="container my-4">

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Acropolis_of_Athens_2019.jpg" class="card-img">
                    <div class="title-overlay">Acropolis, Yunani</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93" class="card-img">
                    <div class="title-overlay">Shibuya, Jepang</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1505739772430-262fb57cddc8" class="card-img">
                    <div class="title-overlay">Cappadocia, Turki</div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" class="card-img">
                    <div class="title-overlay">Giza, Mesir</div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1541417904950-b855846fe074" class="card-img">
                    <div class="title-overlay">Garuda Wisnu Kencana, Bali</div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" class="card-img">
                    <div class="title-overlay">Huayana, Peru</div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Palm_Jumeirah%2C_Dubai%2C_United_Arab_Emirates.jpg" class="card-img">
                    <div class="title-overlay">Jumeirah, Abu Dhabi</div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-4">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1528476513691-07fdbf533b0a" class="card-img">
                    <div class="title-overlay">New York, US</div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-md-12">
                <div class="card border-0 position-relative">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" class="card-img">
                    <div class="title-overlay">Niagara, Kanada</div>
                </div>
            </div>

        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
