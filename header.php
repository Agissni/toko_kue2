<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(253, 210, 166, 0.6), rgba(82, 43, 5, 0.73)), url('kue_semua.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero h1 { font-size: 3.5rem; color: #ffffff; font-weight: bold; text-shadow: 2px 2px 10px rgba(0,0,0,0.8); }
        .hero p { font-size: 1.5rem; color: #f8f9fa; text-shadow: 1px 1px 5px rgba(0,0,0,0.8); }
        .section { padding: 60px 0; }
        .cake-card { border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: 0.3s; border-radius: 15px; overflow: hidden; }
        .cake-card:hover { transform: translateY(-10px); }
        .cake-card img { height: 200px; object-fit: cover; }
        
        /* Navbar Gradasi Peach */
        .navbar-custom { 
            background: linear-gradient(to right, #ffecd2, #fcb69f) !important; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .nav-link { font-weight: 600; }

        /* Mengubah tombol kuning (btn-warning) menjadi cokelat kue */
        .btn-custom-cokelat {
         background-color: #522b05 !important; /* Warna cokelat tua senada Hero */
        color: white !important;
        border: none;
        padding: 12px 30px;
        border-radius: 50px; /* Membuat tombol lonjong/rounded */
        transition: 0.3s;
        }

        .btn-custom-cokelat:hover {
         background-color: #3d1f03 !important;
        transform: scale(1.05); /* Efek membesar sedikit saat disentuh */
        }

        .nav-link.btn-custom-cokelat {
         background-color: transparent !important; /* Awalnya tidak ada warna */
         color: #000000 !important; /* Tulisan awal warna hitam */
         }

        .nav-link.btn-custom-cokelat:hover {
        background-color: #522b05 !important; /* Jadi cokelat saat disentuh */
         color: white !important; /* Tulisan jadi putih saat disentuh */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="#">🕌 🍪 ✨ La Dolce Raya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-dark ms-lg-3 px-3 text-dark" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ms-lg-3 px-3 text-dark" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ms-lg-3 px-3 text-dark" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-dark ms-lg-3 px-3 text-dark" href="#contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-custom-cokelat text-dark ms-lg-3 px-3" href="login.php">Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>