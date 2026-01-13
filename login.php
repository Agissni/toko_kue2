<?php
session_start();
include 'config.php'; // Memastikan terhubung ke database toko_kue2

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencari user di database
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['admin'] = $username;
        header("Location: index.php"); // Jika berhasil, balik ke halaman utama
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - La Dolce Raya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffecd2; display: flex; align-items: center; height: 100vh; }
        .login-card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 100%; max-width: 400px; margin: auto; }
        .btn-cokelat { background-color: #522b05; color: white; border-radius: 50px; }
        .btn-cokelat:hover { background-color: #3d1f03; color: white; }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center fw-bold mb-4" style="color: #522b05;">Admin Login</h3>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-cokelat w-100">Masuk</button>
            <a href="index.php" class="d-block text-center mt-3 text-muted">Kembali ke Beranda</a>
        </form>
    </div>
</body>
</html>