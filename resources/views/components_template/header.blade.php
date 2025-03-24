<style>
    .navbar-nav .nav-link.active {
        color: red !important;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        color: red !important;
    }

    .img_logo img {
        height: 100%;
        object-fit: contain;
    }

    .img_logo {
        display: flex;
        align-items: center;
        height: 100%;
    }
</style>
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
{{-- <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                <small class="fa fa-phone-alt me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-envelope-open me-2"></small>
                <small>info@example.com</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-clock me-2"></small>
                <small>Mon - Fri : 09 AM - 09 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div> --}}
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <div class="img_logo">
                <img src="{{ asset('uploads/' . $global_setting->logo) }}" alt="{{ env('APP_NAME') }}" </div>

        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ $type_menu == 'home' ? 'active' : '' }}">Home</a>
            <a href="{{ route('product') }}"
                class="nav-item nav-link {{ $type_menu == 'product' ? 'active' : '' }}">Product</a>
            <a href="{{ route('brand') }}"
                class="nav-item nav-link {{ $type_menu == 'brand' ? 'active' : '' }}">Brand</a>
            <a href="{{ route('contact_us') }}"
                class="nav-item nav-link {{ $type_menu == 'contact_us' ? 'active' : '' }}">Contact Us</a>
            <a href="{{ route('about_us') }}"
                class="nav-item nav-link {{ $type_menu == 'about_us' ? 'active' : '' }}">About Us</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
