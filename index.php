<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">

    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang fallback jika gambar tidak dimuat */
            background-image: url('dist/img/suzy-background.jpg'); /* URL gambar latar belakang */
            background-size: cover; /* Menyesuaikan gambar dengan ukuran halaman */
            background-position: center; /* Posisi gambar di tengah halaman */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
        }
    </style>

    <title>Login</title>
</head>

<body>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-4 login-form">
                <header class="text-center">
                    Selamat Datang
                </header>

                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email">

                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                <a href="#" class="text-decoration-none text-center" style="color:#fc0303;"><strong>Lupa password?</strong></a>
                <button class="signin" onclick="login()">Masuk</button>
                <button class="signin-google" onclick="login()">
                    <img src="assets/img/google.png" alt="">
                    Masuk dengan Google
                </button>

                <div class="text-center">
                    <span class="d-inline">Tidak memiliki akun? <a href="#" class="d-inline text-decoration-none">Daftar
                            disini
                            gratis!</a> </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="assets/js/popup.js"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
