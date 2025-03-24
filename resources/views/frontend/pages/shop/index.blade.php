@extends('frontend.layouts.app')

@section('content')
    <!-- Our Brands -->
    <div class="container-fluid my-5">
        <div class="find-more-about-our-brands"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <h2 class="title"> Product Page</h2>
        </div>
    </div>
    <!-- Our Brands End -->

    {{-- Welding Machine Section  --}}
    <div class="container-fluid my-5">
        <div class="row flex-row-reverse">
            <div class="col-xl-9 col-lg-8">
                {{-- <div class="as-sort-bar">
                    <div class="row g-sm-0 gy-20 justify-content-between align-items-center">
                        <div class="col-md">
                            <p class="woocommerce-result-count">
                                Showing 1 - 12 of 30 Results
                            </p>
                        </div>

                        <div class="col-md-auto">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="single-select style2" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">
                                        Default Sorting
                                    </option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">
                                        Sort by price: high to low
                                    </option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-auto">
                            <div class="nav" role="tablist">
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid"
                                    role="tab" aria-controls="tab-grid" aria-selected="true"><i
                                        class="fa-solid fa-list"></i></a>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab"
                                    data-bs-target="#tab-list" role="tab" aria-controls="tab-grid"
                                    aria-selected="false"><i class="fa-solid fa-grid"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                        <div class="row gy-30">
                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_1.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Castrol EDGE A3/B4</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_2.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Brembo Disc Brake S2</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_3.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Super 5M Rechargeable</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_5.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Ball bearing Rolling</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_6.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Toyota Oil Filter Motor</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_7.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Panda OZ Wheel & Tire</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_4.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Lotus OZ Group Wheel</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_8.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Car Vehicle Automatic</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_9.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">BMW Brake Liver</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_10.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Special Hydraulic</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_11.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Special Hydraulic</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_12.png" alt="Product Image" />
                                        <div class="actions">
                                            <a class="icon-btn" href="cart.html"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="shop-details.html">Fast Aloy Wheel</a>
                                        </h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel"
                        aria-labelledby="tab-shop-list">
                        <div class="row gy-25">
                            @foreach ($products as $product)
                                <div class="col-xl-4 col-sm-6">
                                    <div class="as-product">
                                        {{-- <span class="tag">NEW</span> --}}
                                        <div class="actions">
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            {{-- <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span> --}}
                                        </div>
                                        <div class="product-img">
                                            <img src="{{ asset('uploads/' . $product->main_picture_url) }}"
                                                alt="product image" />
                                        </div>
                                        <div class="product-content">
                                            <p class="meta"></p>
                                            <h4 class="product-title h5">
                                                <a href="shop-details.html">{{ $product->name }}</a>
                                            </h4>
                                            <span class="price">Rp. {{ number_format($product->price, 2) }}</span>
                                            <a class="as-btn style3"
                                                href="{{ route('product.detail', ['slug' => $product->slug]) }}">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{ $products->links() }}

            </div>

            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword" />
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="#">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget widget_top_rated_products">
                        <h4 class="widget_title">Popular Product</h4>
                        <ul class="product_list_widget">
                            @foreach ($productsTop as $product)
                                <li class="recent-post">
                                    <div class="media-img">
                                        <a href="shop-details.html">
                                            <img src="{{ asset('uploads/' . $product->main_picture_url) }}" alt="thumb"
                                                width="70" height="70" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="recent-post-title h5">
                                            <a href="shop-details.html">{{ $product->name }}</a>
                                        </h4>
                                        <span class="price">Rp. {{ number_format($product->price, 2) }}</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
    {{-- STEEL BEVEL & PRESSURE PAINT End --}}
@endsection


@push('modal')
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white position-relative">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img">
                            <img src="assets/img/product/product_1_1.png" alt="Product Image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$125.00</p>
                        <h2 class="product-title">Brembo Disc Brake S2</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of 5 based
                                    on <span class="rating">1</span> customer rating</span>
                            </div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">2</span>
                                customer reviews)</a>
                        </div>
                        <p class="text">
                            Syndicate customized growth strategies prospective human capital
                            leverage other's optimal e-markets without transparent catalysts
                            for change.
                        </p>
                        <div class="checklist">
                            <ul>
                                <li>
                                    <i class="far fa-circle-check"></i> Lifetime structural, one
                                    year face finish warranty
                                </li>
                                <li>
                                    <i class="far fa-circle-check"></i>Mapped from “Center Caps”
                                    under ” tment” tab
                                </li>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100"
                                    name="quantity" value="1" title="Qty" />
                                <button class="quantity-plus qty-btn">
                                    <i class="far fa-chevron-up"></i>
                                </button>
                                <button class="quantity-minus qty-btn">
                                    <i class="far fa-chevron-down"></i>
                                </button>
                            </div>
                            <button class="as-btn">Add to Cart</button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">wheel-fits-chevy-camaro</span></span>
                            <span class="posted_in">Category:
                                <a href="shop.html" rel="tag">Tires & Wheels</a></span>
                            <span>Tags: <a href="shop.html">automotive parts</a><a href="shop.html">wheels</a></span>
                        </div>
                    </div>
                    <button title="Close (Esc)" type="button" class="mfp-close">
                        ×
                    </button>
                </div>
            </div>
        </div>
    </div>
@endpush
