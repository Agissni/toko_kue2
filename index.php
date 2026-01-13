<?php 
include 'config.php'; // Memanggil koneksi database
include 'header.php'; // Memanggil header dan navbar
?>

    <section id="home" class="hero">
        <div class="container">
            <h1>La Dolce Raya</h1>
            <p>Rayakan Lebaranmu dengan Kue Berkualitas!</p>
            <a href="#menu" class="btn btn-custom-cokelat btn-lg fw-bold">Lihat Menu</a>
        </div>
    </section>

    <section id="menu" class="section" style="background-color: #fdf2e9; padding: 60px 0;"> 
    <div class="container">
        <h2 class="text-center mb-5 fw-bold" style="color: #522b05;">Menu Kue Kami</h2>
        
        <div class="row justify-content-center">
            
            <div class="col-md-4 mb-4">
                <div class="card cake-card border-0 shadow-sm" style="border-radius: 15px;">
                    <img src="https://i.pinimg.com/736x/20/85/71/20857151b59c16adf380de94e716de7e.jpg" class="card-img-top" alt="Kue Nastar" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #522b05;">Kue Nastar</h5>
                        <p class="card-text text-muted">Kue nastar klasik wisman.</p>
                        <p class="fw-bold" style="color: #d4a373; font-size: 1.2rem;">Rp 85.000 - Rp 110.000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card cake-card border-0 shadow-sm" style="border-radius: 15px;">
                    <img src="https://i.pinimg.com/736x/ac/75/fe/ac75fe78dbdf85f6b1a12c705dbd5b7e.jpg" class="card-img-top" alt="Kue Kastangel" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #522b05;">Kue Kastangel</h5>
                        <p class="card-text text-muted">Kue kastangel keju edam & cheddar.</p>
                        <p class="fw-bold" style="color: #d4a373; font-size: 1.2rem;">Rp 90.000 - Rp 120.000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card cake-card border-0 shadow-sm" style="border-radius: 15px;">
                    <img src="https://i.pinimg.com/736x/f3/df/fa/f3dffaf7d5db005674918708092764f8.jpg" class="card-img-top" alt="Kue Putri Salju" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #522b05;">Kue Putri Salju</h5>
                        <p class="card-text text-muted">Putri salju lembut dengan balutan gula halus premium.</p>
                        <p class="fw-bold" style="color: #d4a373; font-size: 1.2rem;">Rp 75.000 - Rp 95.000</p>
        </div> 
    </div> 
</section>


    <section id="about" class="section" style="background-color: #fdf2e9; padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
    <div class="col-md-5">
        <h2 class="fw-bold" style="color: #522b05;">Tentang Kami</h2>
        <div style="width: 15px; height: 15px; background-color: #fcb69f; border-radius: 50%; margin-bottom: 20px;"></div>
        
        <p class="mt-3 fs-5" style="color: #3d1f03; line-height: 1.8;">
            Kami adalah toko kue tradisional yang siap melayani pelanggan. 
            Menggunakan bahan-bahan premium dan resep turun-temurun untuk memastikan 
            setiap gigitan kue kami memberikan kebahagiaan di hari raya Anda.
        </p>
        <p class="text-muted">Kualitas dan rasa adalah prioritas utama kami di setiap toplesnya.</p>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-6 text-end">
    <div style="width: 15px; height: 15px; background-color: #fcb69f; border-radius: 50%; display: inline-block; margin-bottom: 10px;"></div>
    
    <br> <img src="logo.kue.jpeg" class="img-fluid rounded-4 shadow" alt="Logo Toko Kue" style="max-width: 350px; width: 100%; height: auto;">
    </div>
    </div>
    </section>

<?php include 'footer.php'; // Memanggil footer ?>