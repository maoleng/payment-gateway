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
                    @foreach ($products as $product)
                    <div class="card ecommerce-card">
                        <div class="item-img">
                            <a href="{{ route('detail', $product['information']->id) }}">
                                <img src="{{ $product['information']->image }}" alt="img-placeholder" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-name">
                                <h6 class="mb-0"><a href="{{ route('detail', $product['information']->id) }}" class="text-body">{{ $product['information']->name }}</a></h6>
                                <span class="item-company">Bởi <a href="#" class="company-name">{{ $product['information']->company_name }}</a></span>
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        {!! starRating($product['information']->rate) !!}
                                    </ul>
                                </div>
                            </div>
                            <div class="item-quantity">
                                <span class="quantity-title">Số lượng:</span>
                                <div data-id="{{ $product['information']->id }}" data-price="{{ $product['information']->price }}" class="quantity-counter-wrapper">
                                    <div class="input-group">
                                        <input id="i-quantity-{{ $product['information']->id }}" type="text" class="quantity-counter" value="{{ $product['amount'] }}" />
                                    </div>
                                </div>
                            </div>
                            <span class="delivery-date text-muted">Giao vào, {{ now()->addDays(random_int(3, 5))->toFormattedDateString() }}</span>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 id="h4-price-{{ $product['information']->id }}" class="item-price">{{ prettyPrice($product['sum_price']) }}</h4>
                                    <p class="card-text shipping">
                                        <span class="badge rounded-pill badge-light-success">Miễn phí giao hàng</span>
                                    </p>
                                </div>
                            </div>
                            <button type="button" data-id="{{ $product['information']->id }}" class="btn-remove_cart btn btn-light mt-1 remove-wishlist">
                                <i data-feather="x" class="align-middle me-25"></i>
                                <span>Xóa</span>
                            </button>
                        </div>
                    </div>
                    @endforeach
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
                                        <div id="div-price_products" class="detail-amt">{{ prettyPrice($price_products) }}</div>
                                    </li>
                                    <li class="price-detail">
                                        <div class="detail-title">Thuế</div>
                                        <div id="div-tax" class="detail-amt">{{ prettyPrice($tax) }}</div>
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
                                        <div id="div-total" class="detail-amt fw-bolder">{{ prettyPrice($total) }}</div>
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
                                        <strong>{{ prettyPrice($price_products) }}</strong>
                                    </div>
                                </li>
                                <li class="price-detail">
                                    <div class="details-title">Thuế</div>
                                    <div class="detail-amt">
                                        <strong>{{ prettyPrice($tax) }}</strong>
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
                                    <div class="detail-amt fw-bolder">{{ prettyPrice($total) }}</div>
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
    <script>
        $(document).ready(function() {
            $('.btn-remove_cart').on('click', function() {
                $.ajax({
                    url: '{{ route('remove_cart') }}',
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: $(this).data('id'),
                    }
                }).done(function() {
                    updateCartSummarize()
                })
            })
            $('.btn.btn-primary.bootstrap-touchspin-up').on('click', function () {
                cartChange($(this).parent().parent().parent())

            })
            $('.btn.btn-primary.bootstrap-touchspin-down').on('click', function () {
                cartChange($(this).parent().parent().parent(), 'decrease')
            })

            function updateCartSummarize() {
                $.ajax({
                    url: '{{ route('cart_summarize') }}'
                }).done(function (data) {
                    $('#div-price_products').text(prettyMoney(data.price_products))
                    $('#div-tax').text(prettyMoney(data.tax))
                    $('#div-total').text(prettyMoney(data.total))
                })
            }

            function cartChange(product, type = 'increase') {
                const product_id = product.data('id')
                const price = product.data('price')
                const quantity = $('#i-quantity-' + product_id).val()
                const pretty_money = prettyMoney(quantity * price)

                $('#h4-price-' + product_id).text(pretty_money)
                $.ajax({
                    url: '{{ route('add_to_cart') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: product_id,
                        type: type,
                    }
                }).done(function() {
                    updateCartSummarize()
                })
            }

            function prettyMoney(price)
            {
                return price.toLocaleString('it-IT', {style : 'currency', currency : 'VND'})
            }
        })
    </script>
@endsection
