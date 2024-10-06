<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/029/905/736/non_2x/interior-of-modern-library-with-white-walls-wooden-floor-rows-of-bookcases-and-bookcases-3d-rendering-generative-ai-photo.jpg');
            /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .welcome-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 50px;
        }

        .welcome-title {
            font-family: 'Georgia', serif;
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-text {
            font-family: 'Arial', sans-serif;
            color: #34495e;
        }

        .btn-explore {
            background-color: #2c3e50;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .btn-explore:hover {
            background-color: #1a252f;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 welcome-container text-center">
                <h2 class="welcome-title">Welcome <?= $_SESSION['nama_siswa'] ?> on the Community Library website
                </h2>
                <p class="welcome-text"> We hope you enjoy your reading and learning experience in our library. Explore our collection of books and discover new knowledge.!</p>
                <a href="buku.php" class="btn btn-explore">explore</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
include "footer.php";
?>