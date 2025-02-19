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
        .navbar {
            background-color: #333;
            padding: 10px 0;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            padding-bottom: 5px;
            position: relative;
        }

        .navbar-nav .nav-link.active::after {
            content: "";
            width: 40%;
            height: 2px;
            background-color: red;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        /* About Us Section */
        .about-us {
            padding: 50px 20px;
            text-align: center;
        }

        .about-us h2 {
            font-weight: bold;
            position: relative;
            margin-bottom: 20px;
        }

        .about-us h2::after {
            content: "";
            width: 50px;
            height: 3px;
            background-color: red;
            display: block;
            margin: 10px auto;
        }

        /* CTA Section */
        .cta-box {
            background-color: #5c3cff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cta-box i {
            font-size: 24px;
        }
    </style>
</head>

<body>
    @include('components_template.header')

    <div class="container about-us">
        <h2>About Us</h2>
        <p>At PT. PERINTIS SUKSES SEJAHTERA, we are committed to being a leading distributor...</p>
    </div>

    <div class="container">
        <div class="cta-box">
            <div>
                <h4>Let’s Build Success Together!</h4>
                <p>We are ready to be your trusted partner in welding equipment and industrial solutions...</p>
            </div>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
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
</body>

</html>
