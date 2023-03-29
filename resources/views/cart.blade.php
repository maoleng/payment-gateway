@extends('theme.master')

@section('vendor_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
@endsection

@section('page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-number-input.css') }}">
@endsection

@section('content')
<div class="bs-stepper checkout-tab-steps">
    <!-- Wizard starts -->
    <div class="bs-stepper-header">
        <div class="step" data-target="#step-cart" role="tab" id="step-cart-trigger">
            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="shopping-cart" class="font-medium-3"></i>
                                </span>
                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Giỏ hàng</span>
                                    <span class="bs-stepper-subtitle">Những vật phẩm trong giỏ hàng của bạn</span>
                                </span>
            </button>
        </div>
        <div class="line">
            <i data-feather="chevron-right" class="font-medium-2"></i>
        </div>
        <div class="step" data-target="#step-address" role="tab" id="step-address-trigger">
            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="home" class="font-medium-3"></i>
                                </span>
                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Địa chỉ</span>
                                    <span class="bs-stepper-subtitle">Nhập địa chỉ nhận hàng</span>
                                </span>
            </button>
        </div>
        <div class="line">
            <i data-feather="chevron-right" class="font-medium-2"></i>
        </div>
        <div class="step" data-target="#step-payment" role="tab" id="step-payment-trigger">
            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="credit-card" class="font-medium-3"></i>
                                </span>
                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Thanh toán</span>
                                    <span class="bs-stepper-subtitle">Chọn phương thức thanh toán</span>
                                </span>
            </button>
        </div>
    </div>
    <!-- Wizard ends -->

    <div class="bs-stepper-content">
        <!-- Checkout Place order starts -->
        <div id="step-cart" class="content" role="tabpanel" aria-labelledby="step-cart-trigger">
            <div id="place-order" class="list-view product-checkout">
                <!-- Checkout Place Order Left starts -->
                <div class="checkout-items">
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0"><a href="app-ecommerce-details.html" class="text-body">Apple Watch Series 5</a></h6>
                                <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 25</span>
                            <span class="text-success">17% off 4 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$19.99</h4>
                                    <p class="card-text shipping">
                                        <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/2.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0">
                                    <a href="app-ecommerce-details.html" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                </h6>
                                <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 24</span>
                            <span class="text-success">7% off 1 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$4999.99</h4>
                                    <p class="card-text shipping">
                                        <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/3.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0"><a href="app-ecommerce-details.html" class="text-body">Apple iMac 27-inch</a></h6>
                                <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 27</span>
                            <span class="text-success">3% off 1 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$4499.99</h4>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/4.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0">
                                    <a href="app-ecommerce-details.html" class="text-body">OneOdio A71 Wired Headphones</a>
                                </h6>
                                <span class="item-company">By <a href="#" class="company-name">OneOdio</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 29</span>
                            <span class="text-success">5% off 2 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$599.99</h4>
                                    <p class="card-text shipping">
                                        <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/5.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0">
                                    <a href="app-ecommerce-details.html" class="text-body">Apple - MacBook Air® (Latest Model) - 13.3" Display - Silver</a>
                                </h6>
                                <span class="item-company">By <a href="#" class="company-name">Apple</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 30</span>
                            <span class="text-success">3% off 1 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$649.99</h4>
                                    <p class="card-text shipping">
                                        <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="app-ecommerce-details.html">
                                <img src="app-assets/images/pages/eCommerce/6.png" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0">
                                    <a href="app-ecommerce-details.html" class="text-body">Switch Pro Controller </a>
                                </h6>
                                <span class="item-company">By <a href="#" class="company-name">Sharp</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <span class="text-success mb-1">In Stock</span>
                            <div class="item-quantity">
                                <span class="quantity-title">Qty:</span>
                                <div class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input type="text" class="quantity-counter" value="1" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Delivery by, Wed Apr 30</span>
                            <span class="text-success">6% off 3 offers Available</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">$1999.99</h4>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Remove</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="heart" class="align-middle me-25"></i>
                                <span class="text-truncate">Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Checkout Place Order Left ends -->

                <!-- Checkout Place Order Right starts -->
                <div class="checkout-options">
                    <div class="card">
                        <div class="card-body">
                            <div class="price-details">
                                <h6 class="price-title">Giá trị đơn hàng</h6>
                                <ul class="list-unstyled">
                                    <li class="price-detail">
                                        <div class="detail-title">Tổng tiền sản phẩm</div>
                                        <div class="detail-amt">$598</div>
                                    </li>
                                    <li class="price-detail">
                                        <div class="detail-title">Thuế</div>
                                        <div class="detail-amt">$25</div>
                                    </li>
                                    <li class="price-detail">
                                        <div class="detail-title">Phí giao hàng</div>
                                        <div class="detail-amt discount-amt text-success">Miễn phí</div>
                                    </li>
                                </ul>
                                <hr />
                                <ul class="list-unstyled">
                                    <li class="price-detail">
                                        <div class="detail-title detail-total">Tổng cộng</div>
                                        <div class="detail-amt fw-bolder">$574</div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary w-100 btn-next place-order">Tiếp tục</button>
                            </div>
                        </div>
                    </div>
                    <!-- Checkout Place Order Right ends -->
                </div>
            </div>
            <!-- Checkout Place order Ends -->
        </div>
        <!-- Checkout Customer Address Starts -->
        <div id="step-address" class="content" role="tabpanel" aria-labelledby="step-address-trigger">
            <form id="checkout-address" class="list-view product-checkout">
                <!-- Checkout Customer Address Left starts -->
                <div class="card">
                    <div class="card-header flex-column align-items-start">
                        <h4 class="card-title">Địa chỉ nhận hàng</h4>
                        <p class="card-text text-muted mt-25">Hãy đảm bảo rằng địa chỉ của bạn chính xác</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-2">
                                    <label class="form-label" cfor="checkout-name">Họ và tên:</label>
                                    <input type="text" id="checkout-name" class="form-control" name="fname" placeholder="{{ env('OWNER_NAME') }}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-2">
                                    <label class="form-label" cfor="checkout-number">Số điện thoại:</label>
                                    <input type="number" id="checkout-number" class="form-control" name="mnumber" placeholder="0123456789" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-2">
                                    <label class="form-label" cfor="checkout-apt-number">Số nhà, tên đường:</label>
                                    <input type="number" id="checkout-apt-number" class="form-control" name="apt-number" placeholder="123 CMT8" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-2">
                                    <label class="form-label" cfor="checkout-landmark">Thành phố/Tỉnh:</label>
                                    <input type="text" id="checkout-landmark" class="form-control" name="landmark" placeholder="Hồ Chí Minh" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-next delivery-address">Tiếp tục</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Checkout Customer Address Ends -->
        <!-- Checkout Payment Starts -->
        <div id="step-payment" class="content" role="tabpanel" aria-labelledby="step-payment-trigger">
            <form id="checkout-payment" class="list-view product-checkout" onsubmit="return false;">
                <div class="payment-type">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h4 class="card-title">Tùy chọn phương thức thanh toán</h4>
                            <p class="card-text text-muted mt-25">Đảm bảo rằng bạn chọn đúng phương thức thanh toán</p>
                        </div>
                        <div class="card-body">
                            <ul class="other-payment-options list-unstyled">
                                <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" id="customColorRadio2" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio2"> Cổng thanh toán VNPAY </label>
                                    </div>
                                </li>
                                <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" id="customColorRadio3" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio3"> Cổng thanh toán Momo </label>
                                    </div>
                                </li>
                                <li class="py-50">
                                    <div class="form-check">
                                        <input type="radio" id="customColorRadio4" name="paymentOptions" class="form-check-input" />
                                        <label class="form-check-label" for="customColorRadio4"> Thanh toán trực tiếp </label>
                                    </div>
                                </li>
                            </ul>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary btn-next delivery-address">Tiếp tục</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="amount-payable checkout-options">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Giá trị đơn hàng</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled price-details">
                                <li class="price-detail">
                                    <div class="details-title">Tổng tiền 3 sản phẩm</div>
                                    <div class="detail-amt">
                                        <strong>$699.30</strong>
                                    </div>
                                </li>
                                <li class="price-detail">
                                    <div class="details-title">Thuế</div>
                                    <div class="detail-amt">
                                        <strong>$25</strong>
                                    </div>
                                </li>
                                <li class="price-detail">
                                    <div class="details-title">Phí vận chuyển</div>
                                    <div class="detail-amt discount-amt text-success">Miễn phí</div>
                                </li>
                            </ul>
                            <hr />
                            <ul class="list-unstyled price-details">
                                <li class="price-detail">
                                    <div class="details-title">Tổng cộng</div>
                                    <div class="detail-amt fw-bolder">$699.30</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Checkout Payment Ends -->
        <!-- </div> -->
    </div>
</div>
@endsection

@section('vendor_script')
    <script src="{{ asset('app-assets/vendojquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-checkout.js') }}"></script>
@endsection
