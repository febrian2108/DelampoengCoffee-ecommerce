@extends('frontend.layouts.master')

@section('title', 'Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            <form class="form" method="POST" action="{{ route('cart.order') }}">
                @csrf
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="checkout-form">
                            <h2>Make Your Checkout Here</h2>
                            <p>Please register in order to checkout more quickly</p>
                            <!-- Form -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>First Name<span>*</span></label>
                                        <input type="text" name="first_name" placeholder=""
                                            value="{{ old('first_name') }}" value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Last Name<span>*</span></label>
                                        <input type="text" name="last_name" placeholder="" value="{{ old('lat_name') }}">
                                        @error('last_name')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address<span>*</span></label>
                                        <input type="email" name="email" placeholder="" value="{{ old('email') }}">
                                        @error('email')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="number" name="phone" placeholder="" required
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>City<span>*</span></label>
                                        <select name="country" id="country">
                                            <option value="ID">Indonesia</option>
                                            <option value="JKT">Jakarta</option>
                                            <option value="BDG">Bandung</option>
                                            <option value="SBY">Surabaya</option>
                                            <option value="MKS">Makassar</option>
                                            <option value="MLG">Malang</option>
                                            <option value="BGR">Bogor</option>
                                            <option value="SMR">Samarinda</option>
                                            <option value="TGR">Tangerang</option>
                                            <option value="BDJ">Banjarmasin</option>
                                            <option value="MDN">Medan</option>
                                            <option value="JMB">Jambi</option>
                                            <option value="PDK">Padang</option>
                                            <option value="SLO">Solo</option>
                                            <option value="YGY">Yogyakarta</option>
                                            <option value="DPK">Depok</option>
                                            <option value="MLK">Maluku</option>
                                            <option value="MLI">Maluku Utara</option>
                                            <option value="BKS">Bekasi</option>
                                            <option value="BDL">Bandar Lampung</option>
                                            <option value="PKY">Palangka Raya</option>
                                            <option value="PLM">Palembang</option>
                                            <option value="BPN">Balikpapan</option>
                                            <option value="BWI">Batam</option>
                                            <option value="PKN">Pekanbaru</option>
                                            <option value="BJM">Banjar</option>
                                            <option value="KDR">Kendari</option>
                                            <option value="GTO">Gorontalo</option>
                                            <option value="MJU">Manokwari</option>
                                            <option value="KDI">Kendari</option>
                                            <option value="JBR">Jember</option>
                                            <option value="RGT">Rengat</option>
                                            <option value="PBU">Pulau Bunyu</option>
                                            <option value="TPI">Tapin</option>
                                            <option value="TGR">Tangerang</option>
                                            <option value="NGO">Ngawi</option>
                                            <option value="KTB">Kutai Barat</option>
                                            <option value="WOW">Wonogiri</option>
                                            <option value="OKU">Ogan Komering Ulu</option>
                                            <option value="MND">Mandailing Natal</option>
                                            <option value="SDR">Sidoarjo</option>
                                            <option value="MND">Mandailing Natal</option>
                                            <option value="BDW">Badung</option>
                                            <option value="BMA">Boneo</option>
                                            <option value="LMG">Lamongan</option>
                                            <option value="RGO">Rangkasbitung</option>
                                            <option value="GEB">Gresik</option>
                                            <option value="LWR">Luwuk</option>
                                            <option value="MJA">Majalengka</option>
                                            <option value="BJL">Bojonegoro</option>
                                            <option value="MLG">Magelang</option>
                                            <option value="GRS">Gorontalo</option>
                                            <option value="PLB">Palembang</option>
                                            <option value="KDR">Kendari</option>
                                            <option value="BNA">Banyuwangi</option>
                                            <option value="PWK">Purwakarta</option>
                                            <option value="SLO">Salatiga</option>
                                            <option value="KRW">Karawang</option>
                                            <option value="BSN">Banten</option>
                                            <option value="MSK">Majalengka</option>
                                            <option value="SRA">Samarinda</option>
                                            <option value="SPE">Sidoarjo</option>
                                            <option value="SLE">Samarinda</option>
                                            <option value="WNG">Wangi-Wangi</option>
                                            <option value="TAB">Tabalong</option>
                                            <option value="PSB">Pasir Pangaraian</option>
                                            <option value="MJK">Majalengka</option>
                                            <option value="DPN">Depok</option>
                                            <option value="GUN">Gunung Kidul</option>
                                            <option value="KUL">Kulon Progo</option>
                                            <option value="PSU">Pulau Sangihe</option>
                                            <option value="PWI">Purwakarta</option>
                                            <option value="POS">Ponorogo</option>
                                            <option value="KTG">Kutai Timur</option>
                                            <option value="BDG">Bandung</option>
                                            <option value="JPA">Jepara</option>
                                            <option value="WPK">Wonopringgo</option>
                                            <option value="BWT">Batam</option>
                                            <option value="TUB">Tuban</option>
                                            <option value="KDL">Kendal</option>
                                            <option value="BTL">Batulicin</option>
                                            <option value="PRD">Prabumulih</option>
                                            <option value="SMN">Semarang</option>
                                            <option value="YKU">Yogyakarta</option>
                                            <option value="KWD">Kendal</option>
                                            <option value="MNK">Manokwari</option>
                                            <option value="HJU">Hulu Sungai Utara</option>
                                            <option value="MOO">Moo</option>
                                            <option value="TBU">Tebing Tinggi</option>
                                            <option value="SRE">Sukabumi</option>
                                            <option value="KBO">Kebumen</option>
                                            <option value="KLT">Klaten</option>
                                            <option value="SWI">Sidoarjo</option>
                                            <option value="BJI">Bojonegoro</option>
                                            <option value="MGA">Magelang</option>
                                            <option value="GRN">Gorontalo</option>
                                            <option value="PMB">Pemalang</option>
                                            <option value="TAL">Tulang Bawang</option>
                                            <option value="MTR">Mataram</option>
                                            <option value="BKT">Bekasi</option>
                                            <option value="BWI">Banyuwangi</option>
                                            <option value="KRW">Karawang</option>
                                            <option value="BWI">Banyuwangi</option>
                                            <option value="RGT">Rengat</option>
                                            <option value="RGT">Rengat</option>
                                            <option value="RGT">Rengat</option>
                                            <option value="SMN">Semarang</option>
                                            <option value="KTG">Kutai Timur</option>
                                            <option value="BDG">Bandung</option>
                                            <option value="JPA">Jepara</option>
                                            <option value="WPK">Wonopringgo</option>
                                            <option value="BWT">Batam</option>
                                            <option value="TUB">Tuban</option>
                                            <option value="KDL">Kendal</option>
                                            <option value="BTL">Batulicin</option>
                                            <option value="PRD">Prabumulih</option>
                                            <option value="SMN">Semarang</option>
                                            <option value="YKU">Yogyakarta</option>
                                            <option value="KWD">Kendal</option>
                                            <option value="MNK">Manokwari</option>
                                            <option value="HJU">Hulu Sungai Utara</option>
                                            <option value="MOO">Moo</option>
                                            <option value="TBU">Tebing Tinggi</option>
                                            <option value="SRE">Sukabumi</option>
                                            <option value="KBO">Kebumen</option>
                                            <option value="KLT">Klaten</option>
                                            <option value="SWI">Sidoarjo</option>
                                            <option value="BJI">Bojonegoro</option>
                                            <option value="MGA">Magelang</option>
                                            <option value="GRN">Gorontalo</option>
                                            <option value="PMB">Pemalang</option>
                                            <option value="TAL">Tulang Bawang</option>
                                            <option value="MTR">Mataram</option>
                                            <option value="BKT">Bekasi</option>
                                            <option value="BWI">Banyuwangi</option>
                                            <option value="KRW">Karawang</option>
                                            <option value="BWI">Banyuwangi</option>
                                            <option value="RGT">Rengat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Address Line 1<span>*</span></label>
                                        <input type="text" name="address1" placeholder=""
                                            value="{{ old('address1') }}">
                                        @error('address1')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" name="address2" placeholder=""
                                            value="{{ old('address2') }}">
                                        @error('address2')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" name="post_code" placeholder=""
                                            value="{{ old('post_code') }}">
                                        @error('post_code')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <!--/ End Form -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="order-details">
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>CART TOTALS</h2>
                                <div class="content">
                                    <ul>
                                        <li class="order_subtotal" data-price="{{ Helper::totalCartPrice() }}">Cart
                                            Subtotal<span>Rp.{{ number_format(Helper::totalCartPrice(), 2) }}</span></li>
                                        <li class="shipping">
                                            Shipping Cost
                                            @if (count(Helper::shipping()) > 0 && Helper::cartCount() > 0)
                                                <select name="shipping" class="nice-select">
                                                    <option value="">Select your address</option>
                                                    @foreach (Helper::shipping() as $shipping)
                                                        <option value="{{ $shipping->id }}" class="shippingOption"
                                                            data-price="{{ $shipping->price }}">{{ $shipping->type }}:
                                                            Rp.{{ $shipping->price }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <span>Free</span>
                                            @endif
                                        </li>

                                        @if (session('coupon'))
                                            <li class="coupon_price" data-price="{{ session('coupon')['value'] }}">You
                                                Save<span>Rp.{{ number_format(session('coupon')['value'], 2) }}</span></li>
                                        @endif
                                        @php
                                            $total_amount = Helper::totalCartPrice();
                                            if (session('coupon')) {
                                                $total_amount = $total_amount - session('coupon')['value'];
                                            }
                                        @endphp
                                        @if (session('coupon'))
                                            <li class="last" id="order_total_price">
                                                Total<span>Rp.{{ number_format($total_amount, 2) }}</span></li>
                                        @else
                                            <li class="last" id="order_total_price">
                                                Total<span>Rp.{{ number_format($total_amount, 2) }}</span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>Payments</h2>
                                <div class="content">
                                    <div class="checkbox">
                                        {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                        <form-group>
                                            <input name="payment_method" type="radio" value="cod"> <label> Cash On
                                                Delivery</label><br>
                                            <input name="payment_method" type="radio" value="paypal"> <label>
                                                PayPal</label>
                                        </form-group>

                                    </div>
                                </div>
                            </div>
                            <!--/ End Order Widget -->
                            <!-- Payment Method Widget -->
                            <div class="single-widget payement">
                                <div class="content">
                                    <img src="{{ 'backend/img/payment-method.png' }}" alt="#">
                                </div>
                            </div>
                            <!--/ End Payment Method Widget -->
                            <!-- Button Widget -->
                            <div class="single-widget get-button">
                                <div class="content">
                                    <div class="button">
                                        <button type="submit" class="btn">proceed to checkout</button>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--/ End Checkout -->
    <!-- End Shop Services -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
    <style>
        li.shipping {
            display: inline-flex;
            width: 100%;
            font-size: 14px;
        }

        li.shipping .input-group-icon {
            width: 100%;
            margin-left: 10px;
        }

        .input-group-icon .icon {
            position: absolute;
            left: 20px;
            top: 0;
            line-height: 40px;
            z-index: 3;
        }

        .form-select {
            height: 30px;
            width: 100%;
        }

        .form-select .nice-select {
            border: none;
            border-radius: 0px;
            height: 40px;
            background: #f6f6f6 !important;
            padding-left: 45px;
            padding-right: 40px;
            width: 100%;
        }

        .list li {
            margin-bottom: 0 !important;
        }

        .list li:hover {
            background: #F7941D !important;
            color: white !important;
        }

        .form-select .nice-select::after {
            top: 14px;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('frontend/js/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("select.select2").select2();
        });
        $('select.nice-select').niceSelect();
    </script>
    <script>
        function showMe(box) {
            var checkbox = document.getElementById('shipping').style.display;
            // alert(checkbox);
            var vis = 'none';
            if (checkbox == "none") {
                vis = 'block';
            }
            if (checkbox == "block") {
                vis = "none";
            }
            document.getElementById(box).style.display = vis;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.shipping select[name=shipping]').change(function() {
                let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
                let subtotal = parseFloat($('.order_subtotal').data('price'));
                let coupon = parseFloat($('.coupon_price').data('price')) || 0;
                // alert(coupon);
                $('#order_total_price span').text('Rp.' + (subtotal + cost - coupon).toFixed(2));
            });

        });
    </script>
@endpush
