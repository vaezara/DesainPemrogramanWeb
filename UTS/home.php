<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home Laundry Nova</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('nav a').click(function(e) {
                e.preventDefault();
                $('nav a').removeClass('bold');
                $(this).addClass('bold');
                window.location.href = $(this).attr('href');
            });
        });

        $(document).ready(function() {
            let currentSlide = 0;
            const slides = $('.slide img');
            const totalSlides = slides.length;

            function showSlide(index) {
                slides.hide();
                slides.eq(index).fadeIn();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }

            showSlide(currentSlide); // Show the first slide
            setInterval(nextSlide, 3000); // Change slide every 3 seconds
        });
    </script>
    <style>
        header {
            display: flex; 
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: palevioletred;
        }

        nav {
            display: flex;
        }

        nav a {
            margin-right: 10px; 

            color: white;
        }

        .bold {
            font-weight: bold;
        }

        .slide {
            padding: 10px;
            width: auto;
            height: auto;
            position: relative;
            margin-bottom: 20px;
            margin: 10px;
        }

        .slide img {
            width: 100%; 
            height: auto; 
        }

        h2 {
            margin: 0 20px 10px; 
            text-align: left;
            line-height: 1,5;
        }

        h3 {
            margin: 0 20px 30px; 
            text-align: left; 
            line-height: 1.5; 
            font-weight: normal;
        }

        footer {
            background-color: palevioletred;
            color: white; 
            text-align: center; 
            padding: 10px; 
            position: relative; 
            width: 100%; 
            margin-top: 20px;
        }
  </style>
</head>
<body>
    <header>
        <h1>Laundry Nova</h1>
        <nav>
            <a href="#">Home</a>
            <a href="cekharga.php">Cek Harga</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <script src="script.js"></script>

    <div class="slider">
        <div class="slide">
            <img src="img/banner1.jpg" alt="Banner 1">
            <img src="img/banner2.jpg" alt="Banner 2">
            <img src="img/banner3.jpg" alt="Banner 3">
        </div>
    </div>

    <h2>Laundry Nova</h2>
    <h3>Di Laundry Nova, kami memahami bahwa kehidupan yang sibuk sering kali membuat kita kesulitan
    menemukan waktu untuk merawat pakaian. Itulah sebabnya kami hadir untuk memberikan solusi laundry
    yang efisien dan berkualitas tinggi. Dengan pengalaman bertahun-tahun di industri laundry, kami
    berkomitmen untuk memberikan layanan terbaik kepada setiap pelanggan.
    Kami mengundang Anda untuk merasakan sendiri kualitas layanan kami. 
    Coba layanan kami hari ini dan nikmati kemudahan serta kenyamanan dari Laundry Nova. 
    Bergabunglah dengan ribuan pelanggan puas yang telah mempercayakan kebutuhan laundry mereka kepada kami.
</h3>

    <footer>
        <p>Hubungi kami di: 0899876543</p>
    </footer>
</body>
</html>