<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Apex - Home Repair Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="apex-1.0.0/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="apex-1.0.0/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="apex-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="apex-1.0.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="apex-1.0.0/css/style.css" rel="stylesheet" />
    <style>
        /* Reset Default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Container utama */
        .accordion-container {
            width: 100%;
            text-align: center;
            padding-top: 10px;
        }

        /* Title Section */
        .accordion-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            display: inline-block;
        }

        .accordion-title::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background-color: red;
            margin: 3px auto 0;
        }

        /* Navigasi Tab */
        .accordion-nav {
            display: flex;
            width: 100%;
            background-color: #333;
            justify-content: space-between;
            /* Pastikan tombol tersebar merata */
        }

        .accordion-nav button {
            flex: 1;
            /* Setiap tombol mengambil porsi yang sama */
            text-align: center;
            background: none;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            padding: 12px 0;
            /* Sesuaikan padding agar tidak terlalu besar */
            position: relative;
            transition: background-color 0.3s ease;
            border-right: 1px solid rgba(255, 255, 255, 0.3);
            /* Tambahkan garis pemisah */
        }

        /* Hilangkan garis pemisah di tombol terakhir */
        .accordion-nav button:last-child {
            border-right: none;
        }

        /* Hover Effect */
        .accordion-nav button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Garis bawah pada tombol aktif */
        .accordion-nav button.active::after {
            content: "";
            width: 50px;
            height: 3px;
            background-color: red;
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Konten yang ditampilkan */
        .content {
            display: none;
            padding: 15px;
            text-align: center;
            max-width: 800px;
            margin: 10px auto;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        /* Tampilkan konten aktif */
        .content.active {
            display: block;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .accordion-nav {
                flex-direction: column;
            }

            .accordion-nav button {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            }

            .accordion-nav button:last-child {
                border-bottom: none;
            }
        }


        .about-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            position: relative;
        }

        .about-title::after {
            content: "";
            width: 50px;
            height: 3px;
            background-color: red;
            display: block;
            margin: 8px auto;
        }
    </style>
</head>

<body>
    @include('components_template.header')

    <div class="accordion-container">
        <h2 class="about-title">About Us</h2>
    </div>

    <div class="accordion-nav">
        <button class="active" onclick="showContent('overview', this)">Overview</button>
        <button onclick="showContent('history', this)">History</button>
        <button onclick="showContent('growth', this)">Growth</button>
        <button onclick="showContent('industries', this)">Industries</button>
        <button onclick="showContent('commitment', this)">Commitment</button>
    </div>

    <div id="overview" class="content active">
        <p>At PT. PERINTIS SUKSES SEJAHTERA, we are committed to being a leading distributor of welding equipment...</p>
    </div>
    <div id="history" class="content">
        <p>Our company was originally established as CV. PERINTIS SUKSES in Bekasi, West Java...</p>
    </div>
    <div id="growth" class="content">
        <p>Over the years, we have expanded our product line to meet industry demands...</p>
    </div>
    <div id="industries" class="content">
        <p>We serve a wide range of industries including manufacturing, construction, and automotive...</p>
    </div>
    <div id="commitment" class="content">
        <p>Our commitment is to provide high-quality products, excellent service, and customer satisfaction...</p>
    </div>

    @include('components_template.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="apex-1.0.0/lib/wow/wow.min.js"></script>
    <script src="apex-1.0.0/lib/easing/easing.min.js"></script>
    <script src="apex-1.0.0/lib/waypoints/waypoints.min.js"></script>
    <script src="apex-1.0.0/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="apex-1.0.0/js/main.js"></script>
    <script>
        function showContent(id, element) {
            // Menyembunyikan semua konten
            document.querySelectorAll(".content").forEach(el => el.classList.remove("active"));
            document.getElementById(id).classList.add("active");

            // Menghapus status aktif dari semua tombol
            document.querySelectorAll(".accordion-nav button").forEach(btn => btn.classList.remove("active"));
            element.classList.add("active");
        }
    </script>
</body>


</html>
