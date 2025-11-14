<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1505739776132-37b1f8ca9c89");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar-custom {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(6px);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            padding: 30px;
        }

        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.4);
            object-fit: cover;
        }

        .bio-box {
            background: rgba(255, 255, 255, 0.25);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(5px);
        }
    </style>

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
    <a class="navbar-brand fw-bold text-white" href="{{ route('home') }}">Home</a>
    <a class="navbar-brand fw-bold text-white ms-3" href="#">About</a>

        <div class="ms-auto text-white fw-semibold">
            2301010130 - I MADE ARYA WIBAWA (GENAP)
        </div>
    </nav>

    <div class="container text-center text-white mt-5">
        <h2 class="fw-bold">
            Halaman ini dibuat oleh: 2301010130 - I MADE ARYA WIBAWA (GENAP)
        </h2>
    </div>

    <!-- PROFILE SECTION -->
    <div class="container mt-5">
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-6">
                <div class="glass-card text-white text-center">
                    <img src="https://i.imgur.com/ymuWvYg.jpeg" class="profile-img mb-3">

                    <h4 class="fw-bold">MUHAMMAD IKHZAN</h4>
                    <p class="mb-4">2301010083</p>

                    <div class="bio-box text-start mx-auto" style="max-width: 400px;">
                        <strong>BIO</strong>
                        <p class="mt-2">
                            professional back end developer and occasionally AK47 bringer
                        </p>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
                <div class="glass-card text-white text-center">
                    <img src="https://i.imgur.com/k2M7K1L.jpeg" class="profile-img mb-3">

                    <h4 class="fw-bold">I MADE ARYA WIBAWA</h4>
                    <p class="mb-4">2301010130</p>

                    <div class="bio-box text-start mx-auto" style="max-width: 400px;">
                        <strong>BIO</strong>
                        <p class="mt-2">
                            Designing front-end is my passion sir 💖
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
</html>
