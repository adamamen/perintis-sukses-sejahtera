@extends('frontend.layouts.app')

@section('content')
    <!-- Product Category -->
    <div class="container py-5">
        <div class="product-category">
            <div style="display: flex; justify-content: center; align-items: center; gap: 90px;">
                <h2><i class="fa-solid fa-check text-red-500" style="color: red"></i> Sale</h2>
                <h2><i class="fa-solid fa-check text-red-500" style="color: red"></i> Repair</h2>
                <h2><i class="fa-solid fa-check text-red-500" style="color: red"></i> Rental</h2>
            </div><br><br>
            <h6 class="text-uppercase" style="color: black">Product Category</h6>
            <h2 class="title">We Provide Type of Product</h2>
        </div>
        <div class="product-list">
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-1.jpg') }}" alt="Air Compressor">
                <h5>Air Compressor</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-2.jpg') }}" alt="Airless Painting">
                <h5>Airless Painting</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-3.jpg') }}" alt="Diesel Generator">
                <h5>Diesel Generator</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-4.jpg') }}" alt="Drilling & Tapping Machine">
                <h5>Drilling & Tapping Machine</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-5.jpg') }}" alt="Gas Cutting Machine">
                <h5>Gas Cutting Machine</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-6.jpg') }}" alt="Hydraulic Punch Machine">
                <h5>Hydraulic Punch Machine</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-1.jpg') }}" alt="Lifting Equipment">
                <h5>Lifting Equipment</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-2.jpg') }}" alt="Safety Equipment">
                <h5>Safety Equipment</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-3.jpg') }}" alt="Tools">
                <h5>Tools</h5>
            </div>
            <div class="product-item">
                <img src="{{ asset('apex-1.0.0/img/service-4.jpg') }}" alt="Welding Equipment">
                <h5>Welding Equipment</h5>
            </div>
        </div>
        <br>
        <div class="button-container">
            <a href="{{ route('explore_products') }}" class="explore">Explore Products</a>
        </div>
    </div>
    <!-- Product Category End -->

    <!-- Top Selling Product -->
    <div class="container my-5">
        <div class="top-selling-product"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <h6 class="text-uppercase">Top Selling Product</h6>
            <h2 class="title">Our High Demand Products</h2>
        </div><br>

        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 justify-content-center">
            <div class="col">
                <div class="card border-0 text-center">
                    <img src="apex-1.0.0/img/fact-1.jpg" class="card-img-top img-fluid" alt="Product 1">
                    <div class="card-body">
                        <h6 class="fw-bold">PRO ARC-200S/250S - Master</h6>
                        <p class="text-muted">Welding Machine</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center">
                    <img src="apex-1.0.0/img/fact-2.jpg" class="card-img-top img-fluid" alt="Product 2">
                    <div class="card-body">
                        <h6 class="fw-bold">CMD35 - Unibor</h6>
                        <p class="text-muted">Magnetic Drill</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center">
                    <img src="apex-1.0.0/img/fact-3.jpg" class="card-img-top img-fluid" alt="Product 3">
                    <div class="card-body">
                        <h6 class="fw-bold">CUT-100i - Isotech</h6>
                        <p class="text-muted">Plasma Cutting Machine</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center">
                    <img src="apex-1.0.0/img/fact-4.jpg" class="card-img-top img-fluid" alt="Product 4">
                    <div class="card-body">
                        <h6 class="fw-bold">RSR-2500 - Isotech</h6>
                        <p class="text-muted">Welding Machine</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center">
                    <img src="apex-1.0.0/img/fact-4.jpg" class="card-img-top img-fluid" alt="Product 5">
                    <div class="card-body">
                        <h6 class="fw-bold">RSR-2500 - Isotech</h6>
                        <p class="text-muted">Welding Machine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Selling Product End -->

    <!-- Find More About Our Brands -->
    <div class="container-fluid my-5">
        <div class="find-more-about-our-brands"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <h2 class="title">Find More About Our Brands</h2>
        </div>

        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 justify-content-center">
            <div class="col">
                <div class="card border-0 text-center shadow-sm p-3">
                    <img src="apex-1.0.0/img/fact-1.jpg" class="card-img-top img-fluid" alt="Product 1">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center shadow-sm p-3">
                    <img src="apex-1.0.0/img/fact-2.jpg" class="card-img-top img-fluid" alt="Product 2">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center shadow-sm p-3">
                    <img src="apex-1.0.0/img/fact-3.jpg" class="card-img-top img-fluid" alt="Product 3">
                </div>
            </div>
            <div class="col">
                <div class="card border-0 text-center shadow-sm p-3">
                    <img src="apex-1.0.0/img/fact-4.jpg" class="card-img-top img-fluid" alt="Product 4">
                </div>
            </div>
        </div>
    </div>
    <!-- Find More About Our Brands End -->

    <!-- We Provide Brands -->
    <div class="container-fluid my-5">
        <div class="we-provide-brands text-center">
            <h6 class="text-uppercase">Brand</h6>
            <h2 class="title">We Provide Brands</h2>
        </div>

        <!-- Carousel -->
        <div id="brandCarousel" class="carousel slide mt-4 carousel-container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="apex-1.0.0/img/fact-1.jpg" class="img-fluid" alt="Brand 1">
                        <img src="apex-1.0.0/img/fact-2.jpg" class="img-fluid" alt="Brand 2">
                        <img src="apex-1.0.0/img/fact-3.jpg" class="img-fluid" alt="Brand 3">
                        <img src="apex-1.0.0/img/fact-4.jpg" class="img-fluid" alt="Brand 4">
                        <img src="apex-1.0.0/img/fact-1.jpg" class="img-fluid" alt="Brand 5">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <img src="apex-1.0.0/img/fact-4.jpg" class="img-fluid" alt="Brand 6">
                        <img src="apex-1.0.0/img/fact-3.jpg" class="img-fluid" alt="Brand 7">
                        <img src="apex-1.0.0/img/fact-2.jpg" class="img-fluid" alt="Brand 8">
                        <img src="apex-1.0.0/img/fact-1.jpg" class="img-fluid" alt="Brand 9">
                        <img src="apex-1.0.0/img/fact-3.jpg" class="img-fluid" alt="Brand 10">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Button Explore -->
        <div class="text-center mt-4">
            <button class="explore">Explore Brands</button>
        </div>
    </div>
    <!-- We Provide Brands End -->
@endsection
