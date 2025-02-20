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
        .product-title {
            color: #000;
            font-weight: bold;
        }

        .price {
            color: blue;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-custom {
            margin: 5px;
        }
    </style>
</head>

<body>
    @include('components_template.header')

    <div class="container mt-5">
        <nav>
            <a href="{{ route('explore_products') }}">Product</a> > <a href="#"> <strong>TIG-300</strong></a>
        </nav>

        <div class="row align-items-center mt-4">
            <!-- Gambar Produk -->
            <div class="col-md-6 text-center">
                <img src="apex-1.0.0/img/fact-1.jpg" alt="TIG-300" class="img-fluid" />
            </div>

            <!-- Detail Produk -->
            <div class="col-md-6">
                <h1 class="product-title">TIG-300</h1>
                <h2 class="price">Rp 4.500.000</h2>
                <table class="table table-bordered mt-3">
                    <tr>
                        <th>Input Voltage (V)</th>
                        <td>3PH AC380V±15%, 50/60HZ</td>
                    </tr>
                    <tr>
                        <th>Input Current (A)</th>
                        <td>MMA: 11.5 / TIG: 9.6</td>
                    </tr>
                    <tr>
                        <th>Input Power Capacity (KVA)</th>
                        <td>MMA: 7.5 / TIG: 6.3</td>
                    </tr>
                    <tr>
                        <th>Output Current Range (A)</th>
                        <td>MMA: 10-210 / TIG: 10-230</td>
                    </tr>
                    <tr>
                        <th>Gas After-Flow Time (S)</th>
                        <td>5-10 (AUTO)</td>
                    </tr>
                    <tr>
                        <th>No-Load Voltage (V)</th>
                        <td>61</td>
                    </tr>
                    <tr>
                        <th>Rated Duty Cycle (%)</th>
                        <td>60</td>
                    </tr>
                    <tr>
                        <th>Efficiency (%)</th>
                        <td>85</td>
                    </tr>
                    <tr>
                        <th>Power Factor (COS dia.)</th>
                        <td>0.93</td>
                    </tr>
                    <tr>
                        <th>Electrode (MM)</th>
                        <td>1.6-5.0</td>
                    </tr>
                    <tr>
                        <th>Dimensions (MM)</th>
                        <td>485×210×380</td>
                    </tr>
                    <tr>
                        <th>Weight (KG)</th>
                        <td>20.5</td>
                    </tr>
                </table>
                <button class="btn btn-danger btn-custom">Shopee</button>
                <button class="btn btn-success btn-custom">Tokopedia</button>
                <button class="btn btn-primary btn-custom">WhatsApp</button>
                <button class="btn btn-info btn-custom">Email</button>
                <button class="btn btn-dark btn-custom">Request Quotation</button>
            </div>
        </div>

        <h4 class="mt-4">Description</h4>
        <ul>
            <li>Advanced Mosfet inverter technology, strong resistance to high voltage and high temperature</li>
            <li>With O.C & O.H protection, hot start</li>
            <li>Molten tungsten electrode non-contact HF arc start method, which holds burning through the thin
                workspace</li>
            <li>With O.C & O.H protection, for long-term use</li>
            <li>Capable of welding stainless steel and other easy oxidated nonferrous metal and alloy steel, such as
                MIG, TIG or another alloy</li>
        </ul>
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
