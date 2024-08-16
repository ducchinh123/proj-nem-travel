<?php
/*
    Template Name: Order Khách Sạn
*/
?>
<?php
include 'inc/head.php';
?>
    <link rel="stylesheet" href="//res.ivivu.com/payment/css/iVIVU.Payment1.css?v=12.57">
    <link rel="stylesheet" href="//res.ivivu.com/payment/css/layout.css?v=12.57">
    <!-- <link rel="stylesheet" href="//res.ivivu.com/payment/css/iVIVU.PaymentVoucher.css?v=12.57"> -->
    <link rel="stylesheet" href="//res.ivivu.com/payment/vendor/ivivu_icons/ivivu_icons.min.css">
    <link href="//res.ivivu.com/payment/vendor/vvcon/style.css?v=12.57" rel="stylesheet">

<body data-page="" class="thankyou ng-scope" ng-app="payment" ng-controller="main.ctrl">
    <div id="layer_body" class="display-none"
        style="position: absolute; width: 100%; z-index: 999; background: white; opacity: 0.4; height: 642%;"></div>
    <!-- BEGIN HEADER -->
    <header>
        <div class="container payment-hidden-on-mobile">
            <a class="site-logo" href="/" title="">
              
            <img src="https://nemtravel.vn/wp-content/uploads/2024/08/1-removebg-preview-123.png?time=<?= time() ?>"
            alt="ivivu" class="loading" data-was-processed="true" style="height: 43px;">

                <span class="hidden logo-caption verticalLine hidden-xs hidden-sm">đặt tour và khách sạn trực
                    tuyến</span>
            </a>

            <a href="javascript:;" class="mobi-toggler menu-toggle hover-opacity-8 hidden-xs">
                <i class="sprites icn-menu-list"></i>
            </a>
            <!-- BEGIN HOTLINE -->
            <ul class="hotline pull-right hidden-xs">
                <li><a class="hotline" href="tel:1900 1870"><i class="glyphicon glyphicon-earphone icon-phone"></i> 0846218218</a></li>
              

                <!--<li class="menu-phone sprites icn-menu-phone"></li>
                <li class="menu-arrow sprites icn-menu-arrow"></li>-->
            </ul>
            <!-- END HOTLINE -->
            <!-- BEGIN NAVIGATION -->
            <p style="color: #fff;padding-top: 20px; font-size: 20px; position: relative;left: -15px;"
                class="visible-xs">Thông tin người đặt</p>
            <div class="header-navigation pull-left font-transform-inherit">
                <ul>
                    <li class="">
                        <a href="#" class="">
                            <span class="tempMarginPaymentHeader">Thông tin người đặt</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END NAVIGATION -->

        </div>

        <div class="container payment-hidden-on-desktop">
            <div class="header-mobile">
                <div>
                    <span class="vvcon-ic_back" style="color: #fff" ng-click="onBackHeaderMobile()"></span>
                </div>
                <p class="payment-m-title-header mb-0 ng-binding">Yêu cầu đặt phòng</p>
                
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <main class="main" style="position: relative">
        <!-- HEY GUY! I'M HERE -->
        <div class="container">
            <input id="totalroom" name="totalroom" type="hidden" value="1">
            <div class="nopadding col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="nopadding col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden">
                    <div class="nopadding pay-breadcrumb clearfix " id="paymentNavigation">
                        <div class="step-payment">
                            <div class="vremoveSpacing col-xs-4 col-sm-4 col-md-4">
                                <div class="step-1 text-center">
                                    <div class="bread-wrap step1 active" id="past_0">
                                        <div class="target">
                                            <div>
                                                <div></div>
                                                <div id="next_passt">1</div>
                                            </div>
                                        </div>
                                        <div class="title">Đặt phòng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="vremoveSpacing col-xs-4 col-sm-4 col-md-3">
                                <div class="step-2 text-center">
                                    <div class="bread-wrap step2" id="passt_1">
                                        <div class="target">
                                            <div>
                                                <div></div>
                                                <div id="next_passt_1">2</div>
                                            </div>
                                        </div>
                                        <div class="title">Thanh toán</div>
                                    </div>
                                </div>
                            </div>
                            <div class="vremoveSpacing col-xs-4 col-sm-4 col-md-4">
                                <div class="step-3 text-center">
                                    <div class="bread-wrap step3" id="past_2">
                                        <div class="target">
                                            <div>
                                                <div></div>
                                                <div id="next_passt_2">3</div>
                                            </div>
                                        </div>
                                        <div class="title">Hoàn tất</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden"
                    value="{&quot;hotel&quot;:{&quot;hotelId&quot;:&quot;648218&quot;,&quot;roomName&quot;:&quot;Superior Pool View&quot;,&quot;hotelName&quot;:&quot;Khách sạn Wyndham Garden Grandworld Phú Quốc&quot;,&quot;hotelType&quot;:&quot;Khách sạn (Hotel)&quot;,&quot;hotelCode&quot;:&quot;wyndham-garden-grandworld-phu-quoc&quot;,&quot;hotelRating&quot;:4,&quot;regionName&quot;:&quot;Phú Quốc&quot;,&quot;totalRoom&quot;:1,&quot;totalAdult&quot;:1,&quot;totalChild&quot;:0,&quot;jsonObject&quot;:null,&quot;checkIn&quot;:&quot;2024-08-15&quot;,&quot;checkOut&quot;:&quot;2024-08-16&quot;}}"
                    id="_coupon">
                <input type="hidden" value="648218" id="hotelID">
                <input type="hidden" value="2024-08-15" id="checkintime">
                <input type="hidden" value="2024-08-16" id="checkouttime">
                <input type="hidden" value="114181" id="hotelRegionId">
                <input type="hidden" value="1" id="numberaduslts">
                <input type="hidden" value="0" id="numberchidls">
                <input type="hidden"
                    value="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"
                    id="sup">
                <input type="hidden"
                    value="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"
                    id="_______view_ste">
                <input type="hidden" id="____pre">
                <input type="hidden" value="2139000" id="____totalPrice">
                <input type="hidden" value="CQAAAB+LCAAAAAAABAAzMjS2NDAw0DMAAITa6E0JAAAA" id="____total">
                <input type="hidden" value="1" id="___totalroom">
                <input type="hidden" id="______koko">
                <input type="hidden"
                    value="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"
                    id="transactionid">
                <input type="hidden" value="True" id="_______xml">
                <input type="hidden" value="1" id="onepay_gate">
                <input type="hidden" value="Internal" id="supplier">
                <input type="hidden" value="https://www.ivivu.com/khach-san-phu-quoc/wyndham-garden-grandworld-phu-quoc"
                    id="backurl">
                <input type="hidden" id="ispenaltyfree">
                <div class="row" id="setp_1">


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 v-margin-top-15" id="bookingPayment">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="bookingInfo">
                                <div class="row">


                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right fullscreen-mb"
                                        ng-style="{display: paymentObject.paymentStepStart == 1 || windowWidth > 767 ? 'initial' : 'none'}"
                                        style="display: initial;">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel">
                                            <br>
                                            <div id="hotelDetail"
                                                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                <div class="payment-m-info">
                                                    <div class="payment-m-img payment-hidden-on-desktop">
                                                        <img src="https://cdn1.ivivu.com/images/2023/05/31/11/wggpq-exterior-6-cr___3k8hl6____horizontal.webp?o=jpg"
                                                            alt="Avatar">
                                                    </div>
                                                    <div class="payment-m-name-address">
                                                        <div class="title-hotel vspacingbottom10">
                                                            <h2>
                                                                Khách sạn Wyndham Garden Grandworld Phú Quốc <i
                                                                    class="sprites v-icn-star-40 hotelItemRatingIcon"></i>
                                                            </h2>
                                                        </div>
                                                        <div class="address-hotel">
                                                            <i class="glyphicon glyphicon-map-marker"></i>
                                                            <span>
                                                                Bãi Dài, Gành Dầu, Phú Quốc, tỉnh Kiên Giang </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="payment-m-divider payment-hidden-on-desktop"
                                                    style="margin-top: 16px; margin-bottom: 8px"></div>

                                                <div class="content-hotel payment-hidden-on-mobile">
                                                    <i class="vvcon-calendar_today"></i>
                                                    <span>
                                                        T5, 15/08/2024 → T6, 16/08/2024 · 1 đêm
                                                    </span>
                                                </div>

                                                <div class="payment-hidden-on-desktop">
                                                    <div class="payment-m-time-wrapper">
                                                        <div class="payment-m-time-item">
                                                            <p class="payment-m-time-label mb-0">Nhận phòng</p>
                                                            <p class="payment-m-time-value mb-0 ng-binding">15-08-2024
                                                            </p>
                                                        </div>
                                                        <div class="payment-m-time-item">
                                                            <p class="payment-m-time-label mb-0">Trả phòng</p>
                                                            <p class="payment-m-time-value mb-0 ng-binding">16-08-2024
                                                            </p>
                                                        </div>
                                                        <div class="payment-m-time-item">
                                                            <p class="payment-m-time-label mb-0">Số đêm</p>
                                                            <p class="payment-m-time-value mb-0">1</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="payment-m-divider payment-hidden-on-desktop"
                                                    style="margin-top: 10px; margin-bottom: 12px"></div>



                                                <div class="content-hotel payment-hidden-on-mobile">
                                                    <i class="vvcon-places_meeting_room"></i>
                                                    <span>
                                                        1 Phòng Superior Pool View · Gồm ăn sáng + bữa ăn trưa hoặc tối
                                                    </span>
                                                </div>

                                                <div class="payment-hidden-on-desktop">
                                                    <p class="payment-m-room-name">Superior Pool View</p>
                                                </div>

                                                <div class="content-hotel payment-hidden-on-mobile">
                                                    <i style="font-weight: bold;"
                                                        class="vvcon-ic_ivivu_user_people"></i>
                                                    <span>
                                                        1 người lớn · 0 trẻ em </span>
                                                </div>
                                                <div class="payment-hidden-on-desktop mb-4">
                                                    <div class="payment-m-person-number">
                                                        <i class="vvcon-ic_ivivu_user_people"></i>
                                                        <span>
                                                            1 phòng | 1 người lớn | 0 trẻ em
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="payment-hidden-on-desktop mb-4">
                                                    <div>
                                                        <i class="vvcon-ic_food"></i>
                                                        <span>
                                                            Gồm ăn sáng + bữa ăn trưa hoặc tối
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="booking-cancel-rules payment-hidden-on-mobile">
                                                    <p><b>- Sau 12:00 PM ngày T3, 13-08-2024</b> <b></b> sẽ bị tính phí
                                                        là: <b class="vcolor-info">2.139.000 VND</b></p>
                                                </div>
                                            </div>

                                            <div
                                                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing payment-hidden-on-mobile">
                                                <div class="horizontalLine"></div>
                                            </div>
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing vspacingbottom15 payment-hidden-on-mobile">
                                                <div class="title-hotel vspacingbottom10">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                                        <div class="row">

                                                        </div>
                                                    </div>
                                                    <h2 class="pull-left">Tổng cộng thanh toán </h2>



                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="row">

                                                    <div
                                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                            <span>Khách sạn</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">

                                                            <span class="totalPrice" id="totalhotel">2.139.000
                                                                VND</span>

                                                        </div>
                                                    </div>

                                                    <div style="display:none"
                                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5"
                                                        id="pannertoure">
                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                            <span>Tours</span>
                                                        </div>
                                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing">
                                                            <span class="totalPrice" id="totaltour">0 VND</span>
                                                        </div>
                                                    </div>

                                                    <div style="display:none"
                                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5"
                                                        id="promo-price">
                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                            <span>Sử dụng mã giảm giá</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                            <span class="totalPrice" id="totalpromo"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="horizontalLine"></div>
                                                    </div>

                                                    <div id="useUserPoint" style="display: none;">
                                                        <div class="col-xs-12">
                                                            <label class="ivivuPoint-checkbox">
                                                                <span class="point-text"></span>
                                                                <input type="checkbox" id="usePoint-checkbox"
                                                                    onclick="checkUserPoint()" unchecked="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div id="discount_voucher"
                                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                        <!-- ngIf: codeVoucher && codeVoucher != '' -->
                                                        <div
                                                            class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                            <span class="totalPrice ng-binding" id="discountStr"></span>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom5">
                                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 vremoveSpacing">
                                                            <span>Tổng tiền</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-5 col-sm-5 col-md-5 col-lg-5 vremoveSpacing text-right">
                                                            <span class="totalPrice ng-pristine ng-untouched ng-valid"
                                                                id="totalhotelall" data-price="2.139.000 VND"
                                                                ng-model="totalAmount">2.139.000 VND</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <span class="taxIncluded">Giá đã bao gồm thuế &amp; phí.</span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <input type="hidden" id="tourselectcttc">
                                    </div>

                                    <div class="clearfix payment-hidden-on-desktop"></div>

                                    <div ng-style="{display: paymentObject.paymentStepStart == 1 || windowWidth > 767 ? 'initial' : 'none'}"
                                        style="display: initial;">
                                        <div class="booking-cancel-rules-mobile payment-hidden-on-desktop">
                                            <div class="container">
                                                <p><b>- Sau 12:00 PM ngày T3, 13-08-2024</b> <b></b> sẽ bị tính phí là:
                                                    <b class="vcolor-info">2.139.000 VND</b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div ng-style="{display: paymentObject.paymentStepStart == 1 || windowWidth > 767 ? 'initial' : 'none'}"
                                        style="display: initial;">
                                        <div class="payment-hidden-on-desktop mt-8 bg-white"
                                            id="input-use-point-wrapper" style="display: none;">
                                            <div class="container">
                                                <div id="user-point-switcher-container" style="display: none">
                                                    <div class="payment-switcher-wrapper">
                                                        <span class="vvcon-ivvpoint-color"></span>
                                                        <span>Sử dụng iVIVU point</span>
                                                        <span id="reduced-amount"></span>
                                                        <div class="payment-switcher-container ml-auto"
                                                            id="user-point-switcher" ng-click="onToggleUsePoint()">
                                                            <div class="payment-switcher-circle"></div>
                                                        </div>
                                                    </div>
                                                    <div class="payment-m-divider payment-hidden-on-desktop"
                                                        style="margin-top: 16px"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div ng-style="{display: paymentObject.paymentStepStart == 1 || windowWidth > 767 ? 'initial' : 'none'}"
                                        style="display: initial;">
                                        <div class="payment-hidden-on-desktop mt-8 bg-white">
                                            <div class="container">
                                                <!-- ngIf: codeVoucher && codeVoucher != '' -->
                                                <div class="total-price-wrapper">
                                                    <span class="total-price-text">Tổng cộng</span>
                                                    <span
                                                        class="totalPrice total-price-value ng-pristine ng-untouched ng-valid"
                                                        id="totalhotelall2" data-price="2.139.000 VND"
                                                        ng-model="totalAmount">2.139.000</span>
                                                </div>
                                                <div class="total-price-include-text">
                                                    <span class="taxIncluded">Giá đã bao gồm thuế &amp; phí.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>







                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 fullscreen-mb payment-mobile-booking-info"
                                        id="bookerInfo"
                                        ng-style="{display: (paymentObject.paymentStepStart == 2 || windowWidth > 767) ? 'block' : 'none'}"
                                        style="display: block;">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                            <div id="bookerInfoProfile"
                                                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel">
                                                <br>

                                                <div class="title-hotel vspacingbottom10 payment-hidden-on-mobile">
                                                    <h2>
                                                        Thông tin người đặt
                                                        <br>
                                                        <span>Vui lòng điền đầy đủ thông tin</span>
                                                    </h2>
                                                </div>


                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                                                    id="user-booking-info">


                                                    <div class="row vspacingbottom10 payment-hidden-on-mobile">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Danh xưng:</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">

                                                            <div
                                                                class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                <input id="gender-male1" value="0" type="radio"
                                                                    ng-click="onSelectGender('1')" name="ctitle">
                                                            </div>
                                                            <div
                                                                class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                <span>Anh</span>
                                                            </div>

                                                            <div
                                                                class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                <input id="gender-female1" value="1" type="radio"
                                                                    ng-click="onSelectGender('0')" name="ctitle">
                                                            </div>
                                                            <div
                                                                class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                <span>Chị</span>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <!-- ngIf: !paymentObject.isRequestPhase -->
                                                    <div class="row vspacingbottom10 payment-hidden-on-desktop">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Danh xưng</span>
                                                            <div class="gender-wrapper">
                                                                <button
                                                                    ng-class="{'active': paymentObject.gender == '1'}"
                                                                    ng-click="onSelectGender('1')">
                                                                    Anh
                                                                </button>
                                                                <button
                                                                    ng-class="{'active': paymentObject.gender == '0'}"
                                                                    ng-click="onSelectGender('0')">
                                                                    Chị
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10 ">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel payment-hidden-on-mobile">
                                                            <span>Họ và tên đầy đủ:</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel payment-hidden-on-desktop">
                                                            <!-- ngIf: paymentObject.isRequestPhase --><span
                                                                ng-if="paymentObject.isRequestPhase" class="ng-scope">Họ
                                                                tên</span><!-- end ngIf: paymentObject.isRequestPhase -->
                                                            <!-- ngIf: !paymentObject.isRequestPhase -->
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing ">
                                                            <input placeholder="VD: Nguyen Van A" type="text"
                                                                class="form-control input-sm auto-name-fill"
                                                                id="customername">
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span class="label-required">Số điện thoại liên hệ</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing ">
                                                            <input placeholder="Nhập số điện thoại" type="number"
                                                                class="form-control input-sm" id="phone">
                                                        </div>
                                                    </div>
                                                    <div class="row vspacingbottom10">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                            <span>Email</span>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                            <input placeholder="Nhập email" type="email"
                                                                class="form-control input-sm" id="email">
                                                        </div>
                                                    </div>

                                                    <div class="row vspacingbottom10">
                                                        <div
                                                            class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel hidden-xs">
                                                            <span></span>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing">

                                                            <input id="registercustomerorther" type="checkbox"
                                                                class="customizedCheckbox display-none">

                                                            <label for="registercustomerorther"
                                                                class="labelRegisterAnotherCustomer display-none">Tôi
                                                                đặt phòng cho người khác</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="display-none" id="registercustomerortherform">
                                                    <div class="title-hotel vspacingbottom10">
                                                        <h2>Thông tin khách nhận phòng</h2>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row vspacingbottom10">
                                                            <div
                                                                class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Danh xưng:</span>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                                <div
                                                                    class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                    <input checked="checked" type="radio" value="0"
                                                                        name="ltitle">
                                                                </div>
                                                                <div
                                                                    class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                    <span>Anh</span>
                                                                </div>
                                                                <div
                                                                    class="col-sm-1 col-xs-1 col-md-1 col-lg-1 vremoveSpacing">
                                                                    <input type="radio" value="1" name="ltitle">
                                                                </div>
                                                                <div
                                                                    class="col-sm-3 col-xs-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                    <span>Chị</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom10">
                                                            <div
                                                                class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Họ và tên đầy đủ:</span>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing ">
                                                                <input type="text" class="form-control input-sm"
                                                                    id="leadingname">
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom10">
                                                            <div
                                                                class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Điện thoại:</span>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing ">
                                                                <input type="text" class="form-control input-sm"
                                                                    id="lphone">
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom10">
                                                            <div
                                                                class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing spanLabel">
                                                                <span>Email:</span>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-9 col-md-9 col-lg-9 vremoveSpacing input-name-people">
                                                                <input type="email" class="form-control input-sm"
                                                                    id="lemail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="clearfix"></div>
                                                <div id="registercustomerortherformhodonhhhh">


                                                    <div class="title-hotel vspacingbottom6">
                                                        <h2 class="title-hotel-custom">Yêu cầu đặc biệt</h2>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                        <div class="row vspacingbottom15 hidden">
                                                            <div
                                                                class="col-xs-4 col-sm-3 col-md-3 col-lg-3 vremoveSpacing">
                                                                <div class="vspacingright15">
                                                                    <span>Thời gian nhận phòng dự kiến:</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xs-8 col-sm-9 col-md-9 col-lg-9 vremoveSpacing ">

                                                                <input type="text" class="form-control input-sm"
                                                                    id="hoursddd">
                                                            </div>
                                                        </div>
                                                        <div class="row vspacingbottom15">
                                                            <div class="col-xs-12  vremoveSpacing  ">
                                                                <textarea
                                                                    placeholder="Nếu quý khách có yêu cầu đặc biệt, vui lòng cho chúng tôi biết tại đây"
                                                                    class="form-control input-sm form-control-area"
                                                                    id="recdudud"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-hidden-on-desktop">
                                                    <div>
                                                        <span class="consultant-text">Chọn nhân viên tư vấn từ</span>
                                                        <div class="consultant-wrapper">
                                                            <button
                                                                ng-class="{'active': paymentObject.consultantFrom == 'SG'}"
                                                                ng-click="onSelectConsultant('SG')">
                                                                TP.HCM
                                                            </button>
                                                            <button
                                                                ng-class="{'active': paymentObject.consultantFrom == 'HN'}"
                                                                ng-click="onSelectConsultant('HN')">
                                                                Hà Nội
                                                            </button>
                                                            <button
                                                                ng-class="{'active': paymentObject.consultantFrom == 'CT'}"
                                                                ng-click="onSelectConsultant('CT')">
                                                                Cần Thơ
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <div id="booking-info-extra"
                                                class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel">

                                                <div
                                                    class="col-xs-12 vremoveSpacing vspacingbottom15 payment-hidden-on-mobile">
                                                    <div class="title-hotel vspacingbottom10">
                                                        <h2>Chọn nhân viên tư vấn từ</h2>
                                                    </div>

                                                    <div class="col-xs-12  no-padding v-btn-group-radio  ">
                                                        <div class="btn-group btn-group-justified"
                                                            data-toggle="buttons">
                                                            <label
                                                                class="btn btn-default btn-change-location location-hcm">
                                                                <input type="radio" name="options" autocomplete="off"
                                                                    checked="">
                                                                <span class="hidden-xs">Hồ Chí Minh</span>
                                                                <span class="visible-xs-inline">Tp.HCM</span>
                                                            </label>
                                                            <label
                                                                class="btn btn-default btn-change-location location-hn">
                                                                <input type="radio" name="options" autocomplete="off">
                                                                <span>Hà Nội </span>

                                                            </label>
                                                            <label
                                                                class="btn btn-default btn-change-location location-ct">
                                                                <input type="radio" name="options" autocomplete="off">
                                                                <span>Cần Thơ </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row payment-hidden-on-mobile">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <!--<div class="row continue-step">-->
                                                        <div class="clearfix">
                                                            <div class="payment-continue vremoveSpacing vspacingtop10 vspacingbottom10 width100"
                                                                ng-class="{'width100':banks.length == 0}">
                                                                <button id="btn_complete"
                                                                    class="btn btn-warning next-button">Yêu cầu đặt
                                                                    phòng</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="divSpacing"></div>
                        </div>


                    </div>
                </div>

                <div class="row display-none" id="step_2">
                    <div class="nopadding col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="payment-container">
                            <div class="row">
                                <!--Giam 20% the JCB-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <section class="pay-totalprice">
                                        <div class="totalprice-wrap clearfix">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 totalprice-left">
                                                <strong>Số tiền cần thanh toán</strong>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 totalprice-right">

                                                <strong id="total_prices_tong" data-price="2.139.000 VND">
                                                    2.139.000 VND
                                                </strong>


                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <section class="pay-method">

                                <article class="method-title">
                                    Chọn phương thức thanh toán:
                                </article>
                                <article class="method-wrap">


                                    <div class="mthd-item active" id="method_tranfer" data-method="42">
                                        <div class="mthd-head">
                                            <h2>Chuyển khoản ngân hàng</h2>

                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('tranfer')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <!--<p>Nội dung chuyển khoản: <b>[Mã đặt phòng] + [Số di động của quý khách]</b><br/>Click bên dưới để xem thông tin số tài khoản:</p>-->
                                            <ul class="bank-logo">
                                                <li lang="42" id="Vietcombank"
                                                    onclick="_Payment.ActiveBank('Vietcombank')"
                                                    class="bank-item active">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/1.vietcombank.png"
                                                            alt="Vietcombank">
                                                    </a>
                                                </li>
                                                <li lang="41" id="ACB" onclick="_Payment.ActiveBank('ACB')"
                                                    class="bank-item ">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/2.acb.png"
                                                            alt="ACB">
                                                    </a>
                                                </li>
                                                <li class="bank-item " id="Viettinbank" lang="45"
                                                    onclick="_Payment.ActiveBank('Viettinbank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/3.viettinbank.png"
                                                            alt="Viettinbank">
                                                    </a>
                                                </li>
                                                <li class="bank-item " lang="44" id="Techcombank"
                                                    onclick="_Payment.ActiveBank('Techcombank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/4.techcombank.png"
                                                            alt="Techcombank">
                                                    </a>
                                                </li>
                                                <li class="bank-item " lang="50" id="HDBank"
                                                    onclick="_Payment.ActiveBank('HDBank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/hdb-icon.png"
                                                            alt="HDBank">
                                                    </a>
                                                </li>

                                            </ul>
                                            <ul class="bank-data">
                                                <li id="Vietcombank_data" class="bank-item active">
                                                    Ngân hàng Thương Mại Cổ Phần Ngoại Thương Việt Nam (VCB)
                                                    <br>
                                                    Chi nhánh Tp. Hồ Chí Minh
                                                    <br>
                                                    Số TK:
                                                    <b>007 1000 895 230</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li id="ACB_data" class="bank-item ">
                                                    Ngân hàng Á Châu (ACB)
                                                    <br>
                                                    Chi nhánh Tp. Hồ Chí Minh
                                                    <br>
                                                    Số TK:
                                                    <b>190862589</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li id="Viettinbank_data" class="bank-item ">
                                                    NH VietinBank
                                                    <br>
                                                    Chi Nhánh 03, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>1110 0014 2852</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li id="Techcombank_data" class="bank-item ">
                                                    NH TMCP Kỹ Thương Việt Nam (Techcombank)
                                                    <br>
                                                    Chi nhánh Trần Quang Diệu, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>19128840912016</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li id="HDBank_data" class="bank-item ">
                                                    Ngân hàng HDBANK
                                                    <br>
                                                    Chi nhánh Sài gòn
                                                    <br>
                                                    Số TK:
                                                    <b>052704070018649</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b> Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                            </ul>
                                            <ul class="bank-logo">
                                                <li class="bank-item " lang="43" id="dongabank"
                                                    onclick="_Payment.ActiveBank('dongabank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/5.dongabank.png"
                                                            alt="Đông Á Bank">
                                                    </a>
                                                </li>
                                                <li lang="47" class="bank-item" id="Agribank"
                                                    onclick="_Payment.ActiveBank('Agribank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/6.agribank.png"
                                                            alt="Agribank">
                                                    </a>
                                                </li>
                                                <li class="bank-item " lang="48" id="BIDV"
                                                    onclick="_Payment.ActiveBank('BIDV')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/7.bidv.png"
                                                            alt="BIDV">
                                                    </a>
                                                </li>
                                                <li class="bank-item " lang="46" id="Sacombank"
                                                    onclick="_Payment.ActiveBank('Sacombank')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/8.sacombank.png"
                                                            alt="Sacombank">
                                                    </a>
                                                </li>
                                                <li class="bank-item " lang="49" id="SCB"
                                                    onclick="_Payment.ActiveBank('SCB')">
                                                    <a href="javascript:;">
                                                        <img src="//res.ivivu.com/payment/img/banklogo/scb-icon.png"
                                                            alt="SCB">
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="bank-data">
                                                <li id="dongabank_data" class="bank-item">
                                                    NH TMCP Đông Á (DongABank)
                                                    <br>
                                                    Chi nhánh Lê Văn Sỹ, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>0139 9166 0002</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li class="bank-item " id="Agribank_data">
                                                    NH Agribank
                                                    <br>
                                                    Chi Nhánh 03, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>160 2201 361 086</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li class="bank-item " id="BIDV_data">
                                                    NH TM CP Đầu Tư và Phát Triển Việt Nam (BIDV)
                                                    <br>
                                                    Chi Nhánh 02, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>130 1000 147 4890</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li class="bank-item " id="Sacombank_data">
                                                    Ngân Hàng TMCP Sài Gòn Thương Tín (Sacombank)
                                                    <br>
                                                    Chi nhánh Cao Thắng, Tp.HCM
                                                    <br>
                                                    Số TK:
                                                    <b>060 0952 73354</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                                <li class="bank-item " id="SCB_data">
                                                    Ngân Hàng Sài Gòn (SCB)
                                                    <br>
                                                    Chi nhánh Phú Đông
                                                    <br>
                                                    Số TK:
                                                    <b>023 0109 7937 00001</b>
                                                    <br>
                                                    Chủ TK:
                                                    <b>Công ty Cổ Phần IVIVU.COM</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mthd-item" id="method_ivivu" data-method="2">
                                        <div class="mthd-head">
                                            <h2>Trực tiếp tại văn phòng iVIVU</h2>

                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('ivivu')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <b>Văn phòng tại TP. Hồ Chí Minh:</b> Lầu 2, Tòa nhà Anh Đăng, 215 Nam Kỳ
                                            Khởi Nghĩa, Phường 7, Quận 3, Tp.HCM.
                                            <br>
                                            Thời gian làm việc:
                                            <br>
                                            <ul class="dailytime">
                                                <li>Thứ 2 - Thứ 7: từ 07h30 đến 21h00</li>
                                                <li>Chủ Nhật: từ 07h30 đến 20h00</li>
                                                <li>
                                                    Hotline:
                                                    <a class="hotline-link" id="DeskHotlineNumber"
                                                        href="tel:19001870">1900 1870</a>
                                                </li>
                                            </ul>
                                            <br>
                                            <b>Văn phòng tại Hà Nội:</b> P308, Tầng 3, tòa nhà The One, số 2 Chương
                                            Dương Độ, P.Chương Dương, Q.Hoàn Kiếm, Hà Nội
                                            <br>
                                            Thời gian làm việc:
                                            <br>
                                            <ul class="dailytime">
                                                <li>Thứ 2 - Chủ nhật: từ 08h00 đến 20h00</li>
                                                <li>
                                                    Hotline:
                                                    <a class="hotline-link" id="DeskHotlineNumber"
                                                        href="tel:19002045">1900 2045</a>
                                                </li>
                                            </ul>
                                            <br>
                                            <b>Văn phòng tại Cần Thơ:</b> Tầng 7 - Tòa nhà STS - 11B Đại Lộ Hòa Bình, P.
                                            Tân An, Q. Ninh Kiều, TP. Cần Thơ.
                                            <br>
                                            Thời gian làm việc:
                                            <br>
                                            <ul class="dailytime">
                                                <li>Thứ 2 - Chủ nhật: từ 07h30 đến 21h00</li>
                                                <li>
                                                    Hotline:
                                                    <a class="hotline-link" id="DeskHotlineNumber"
                                                        href="tel:19002087">1900 2087</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mthd-item" id="method_payoo" data-method="3">
                                        <div class="mthd-head">
                                            <h2>
                                                Trực tiếp tại cửa hàng tiện lợi
                                                <img style="width: 50px;"
                                                    src="https://www.payoo.vn/website/static/css/image/payoo-logo.png">
                                                <br>
                                            </h2>

                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('payoo')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <ul class="dailytime">
                                                <li>
                                                    <p>iVIVU sẽ gửi xác nhận qua email sau khi Quý khách thanh toán.</p>
                                                </li>
                                                <li>
                                                    Để tìm cửa hàng gần nhất, hãy
                                                    <a target="_blank"
                                                        href="https://payoo.vn/mapv2/public/index.php?verify=true">xem
                                                        tại đây</a>
                                                </li>
                                                <li>
                                                    <br>
                                                    <img src="//res.ivivu.com/payment/img/payoo/payoo_store.png"
                                                        alt="payoo store">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mthd-item" id="method_payooqr" data-method="5">
                                        <div class="mthd-head">
                                            <h2>
                                                Thanh toán bằng mã QR
                                                <img style="width: 50px;"
                                                    src="https://www.payoo.vn/website/static/css/image/payoo-logo.png">
                                                <br>
                                            </h2>

                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('payooqr')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <ul>

                                                <li>
                                                    <img src="//res.ivivu.com/payment/img/payoo/help_qrcode.png"
                                                        style="width:100%; max-width:500px;" alt="payoo qr">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mthd-item " id="method_atm" data-method="1">
                                        <div class="mthd-head">
                                            <h2>
                                                Thẻ ATM nội địa
                                                <br>
                                                <small>Quý khách sẽ được chuyển tới OnePay để thanh toán.</small>

                                            </h2>
                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('atm')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <p style="color:red; display:none;" id="msg-onepay">Vui lòng chọn ngân hàng
                                                giao dịch!</p>
                                            <ul id="onepay-bank" class="onepay-bank-list bank-logo onepay-bank">
                                                <li class="bank-item">
                                                    <img alt="VR Bank" bankid="27"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-00.png">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Vietcom Bank" bankid="1"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-01.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Techcom bank" bankid="2"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-22.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="TienPhong Bank" bankid="3"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-04.png">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Viettin Bank" bankid="4"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-16.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="VIB" bankid="5"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-15.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="DongA Bank" bankid="6"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-08.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="HD Bank" bankid="7"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-07.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="MB" bankid="8"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-11.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="VietA Bank" bankid="9"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-20.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Maritime Bank" bankid="10"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-02.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Eximbank" bankid="11"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-05.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="SHB" bankid="12"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-03.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="VP Bank" bankid="14"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-14.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="AnBinh Bank" bankid="15"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-13.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="SacomBank" bankid="16"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-09.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="NamA Bank" bankid="17"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-19.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Ocean Bank" bankid="18"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-10.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="BIDV" bankid="19"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-18.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Sea Bank" bankid="20"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-06.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="BacA Bank" bankid="22"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-17.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Navibank" bankid="23"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-21.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Agribank" bankid="24"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-23.jpg">
                                                </li>
                                                <li class="bank-item">
                                                    <img alt="Saigonbank" bankid="25"
                                                        src="//res.ivivu.com/payment/img/onepay/Bank-Icons-12.jpg">
                                                </li>



                                                <li class="bank-item">
                                                    <img alt="VietCapital" bankid="30"
                                                        src="//res.ivivu.com/payment/img/onepay/bank_30.png">
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="mthd-item" id="method_visa" data-method="0">
                                        <div class="mthd-head">
                                            <h2>
                                                Thẻ tín dụng (VISA, Master Card)
                                                <br>
                                                <small>Quý khách sẽ được chuyển tới OnePay để thanh toán.</small>

                                            </h2>

                                            <span>&nbsp;</span>
                                            <div class="checkmark" onclick="_Payment.Activemethod('visa')">
                                                <div>
                                                    <div class="chkfocus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mthd-body">
                                            <ul class="dailytime">
                                                <li>Chấp nhận thanh toán thẻ quốc tế Visa/Mastercard/American
                                                    Express/JCB </li>
                                                <li>
                                                    Xem hướng dẫn thanh toán
                                                    <a target="_blank"
                                                        href="https://www.onepay.vn/home/vi/tro-giup/huong-dan-thanh-toan.html">tại
                                                        đây</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="method-bottom">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                                                style="text-align: left;">
                                                <!--<div class="row continue-step">-->
                                                <div class="removeSpacing col-xs-12 col-sm-12 col-md-9 col-lg-8"
                                                    style="top: 3px;">
                                                    <input id="checkagreefins" type="checkbox"
                                                        class="customizedCheckbox">
                                                    <span class="customizedCheckboxLabel" id="showeerorifnoagree">Tôi
                                                        đồng ý các <a href="https://www.ivivu.com/dieu-kien-dieu-khoan"
                                                            target="_blank">điều khoản</a> đặt phòng và hủy phòng của
                                                        khách sạn và iVIVU.com</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                                    <button id="btn_finsh_payment"
                                                        class="btn btn-info next-button pull-right">Thanh toán và đặt
                                                        phòng ngay <i
                                                            class="glyphicon glyphicon-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </section>
                            <section class="pay-footer">
                                <form action="https://migs.mastercard.com.au/vpcpay" id="forsubmit" method="post"
                                    class="ng-pristine ng-valid">
                                    <input type="hidden" id="vpc_AccessCode" name="vpc_AccessCode" value="">
                                    <input type="hidden" id="vpc_Amount" name="vpc_Amount" value="">
                                    <input type="hidden" id="vpc_Card" name="vpc_Card" value="">
                                    <input type="hidden" id="vpc_CardExp" name="vpc_CardExp" value="">
                                    <input type="hidden" id="vpc_CardNum" name="vpc_CardNum" value="">
                                    <input type="hidden" id="vpc_CardSecurityCode" name="vpc_CardSecurityCode" value="">
                                    <input type="hidden" id="vpc_Command" name="vpc_Command" value="pay">
                                    <input type="hidden" id="vpc_Locale" name="vpc_Locale" value="vn">
                                    <input type="hidden" id="vpc_MerchTxnRef" name="vpc_MerchTxnRef" value="">
                                    <input type="hidden" id="vpc_Gateway" name="vpc_Gateway" value="">
                                    <input type="hidden" id="vpc_Merchant" name="vpc_Merchant" value="">
                                    <input type="hidden" id="vpc_OrderInfo" name="vpc_OrderInfo" value="">
                                    <input type="hidden" id="vpc_ReturnURL" name="vpc_ReturnURL" value="">
                                    <input type="hidden" id="sdhgfsdf" name="vpc_SecureHash" value="">
                                    <input type="hidden" id="vpc_Version" name="vpc_Version" value="">
                                    <input type="hidden" id="vpc_SecureHashType" name="vpc_SecureHashType" value="">
                                </form>
                            </section>
                        </div>
                        <div class="tragop-container" style="display:none;">
                            <div class="v-margin-bottom-25">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paymentPanel v-margin-bottom-25"
                                    style="display: inline-block;">
                                    <br>
                                    <div id="hotelDetail"
                                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                                        <div class="title-hotel vspacingbottom10">
                                            <h3>
                                                Khách sạn Wyndham Garden Grandworld Phú Quốc </h3>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 vremoveSpacing hotelImageDiv">
                                            <img src="https://cdn1.ivivu.com/images/2023/05/31/11/wggpq-exterior-6-cr___3k8hl6____horizontal.webp?o=jpg"
                                                class="img-responsive img-rounded" alt="">
                                        </div>

                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 right-info">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">

                                                <p class="checkin-p">
                                                    <i class="vvcon-ic_calendar"></i>
                                                    <span class="hightLight"> 15/08/2024 &nbsp;</span>
                                                </p>
                                                <p class="checkout-p">
                                                    <i class="vvcon-ic_arrow"></i>
                                                    <span class="hightLight"> 16/08/2024</span>
                                                </p>
                                            </div>
                                            <div class="pax-info">

                                                <p>
                                                    <i class="vvcon-ic_ivivu_user_people"></i> 1 người lớn | 0 trẻ em
                                                </p>
                                            </div>
                                            <div class="room-info">
                                                <div class="title-hotel">
                                                    <p>
                                                        <i class="vvcon-ic_food"></i> 1 x Superior Pool View
                                                    </p>
                                                    <p>

                                                        <i class="vicon vicon-check"></i> Gồm ăn sáng + bữa ăn trưa hoặc
                                                        tối
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="price-info">
                                                <strong data-price="2.139.000 VND" class="ng-binding">
                                                    2.139.000 VND
                                                </strong>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="clearfix"></div>
                            <section class="pay-method">
                                <article class="method-wrap">
                                    <div class="mthd-item " id="method_tragop" data-method="6">
                                        <div class="tragop-body">
                                            <h3>Chọn Ngân hàng trả góp</h3>
                                            <ul class=" bank-logo tragop-bank">
                                                <!-- ngRepeat: bank in banks -->
                                            </ul>
                                            <div class="card-type ng-hide"
                                                ng-show="bankselected &amp;&amp; bankselected.paymentMethods">
                                                <h3>Chọn loại thẻ</h3>
                                                <ul class=" bank-logo tragop-bank">
                                                    <!-- ngRepeat: card in bankselected.paymentMethods -->
                                                </ul>
                                            </div>
                                            <div class="removeSpacing col-xs-12 col-sm-12 col-md-12 ng-hide"
                                                style="top: 3px;" ng-show="cardselected">
                                                <br>
                                                <p for="checkagreefinstragop"
                                                    style="width: 95%; bottom: 0;  padding-left: 5px;"
                                                    class="customizedCheckboxLabel">* Quý khách sẽ không được thay đổi
                                                    hoặc huỷ đơn hàng vì bất kỳ lý do gì sau khi đơn hàng đã chuyển sang
                                                    trả góp.</p>

                                                <input id="checkagreefinstragop" type="checkbox" ng-model="agreetragop"
                                                    class="customizedCheckbox ng-pristine ng-untouched ng-valid"
                                                    style="float:left;margin: 2px 0;">
                                                <label for="checkagreefinstragop"
                                                    style="font-weight:normal;width: 90%; bottom: 0;  padding-left: 5px;"
                                                    class="customizedCheckboxLabel" id="showeerorifnoagreetragop">Tôi
                                                    đồng ý với các <a href="https://www.ivivu.com/chinh-sach-tra-gop"
                                                        target="_blank">điều khoản và điều kiện</a> về đặt phòng trên
                                                    website iVIVU.com</label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- ngIf: cardselected -->

                                        </div>
                                    </div>
                                </article>
                            </section>


                        </div>
                        <!-- BEGIN MODAL -->
                        <!-- END PRELOADER -->
                        <!-- BEGIN GLOBAL INFO -->


                    </div>
                </div>

            </div>

        </div>
        <div class="payment-hidden-on-desktop bg-white btn-next-step-container">
            <button class="btn-next-step ng-binding" id="btn-sticky-mobile" ng-click="onClickStickyButton($vent)">Tiếp
                tục</button>
        </div>

        <!--data-keyboard="false"data-backdrop="static"-->
        <div class="modal fade" id="exampleModal" data-toggle="modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button ng-click="Exit(isDetail)" type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row padding-row">
                            <!--them phan detail ve-->
                            <!--DETAIL VOUCHER-->
                            <div class="col-xs-12">
                                <div class="row">

                                    <!-- ngIf: errorMsg && errorMsg != '' -->
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <input class="input_code input--voucher" id="input_voucher"
                                            placeholder="Nhập mã giảm giá">
                                    </div>
                                    <div class="col-xs-4">
                                        <button id="approve_voucher" class="btn--voucher">Áp dụng</button>
                                    </div>
                                </div>

                                <!-- ngIf: isDetail && voucherDetail != null -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <input type="hidden" value="0" id="checkbapapap">
            <input type="hidden" id="memberId">
            <input type="hidden" id="memberPoint">

            <div id="hdd_bl_em" style="display:none">
                0925970694,0358396912,0523642507,0339245748,0383556491,0867169216,0392348273,0339659838,0862187124,0865879042,0397978623,0335019619,0373019689,0364983235,0364826853,0354585037,0334767589,0326086407,0342445698,0327579544,0326329622,0326058847,0326047176,0352318304,0366936125,0354677730,0367978874,0867327369,0372545427,0366999473,0334749967,0359510954,0332457682,0968276010,0325419629,0387339400,0346583147,0523691173,0564350635,thaozin23021995@gmail.com,0364264537,0379844541,0359951712,anhdungz16789@gmail.com,0999999999,0936782525,0909088127,thanglon499@gmail.com,0388236863,tunghuongduc3241@gmail.com,0902270468,a.ippunk@gmail.com,dwiananda1106@gmail.com,zezera1p@yandex.com,andiippunk27@gmail.com,rorocidul1@yandex.com,ipoto1@yandex.com,ninoni1@yandex.com,totoha1p@yandex.com,penampunng.hyper@yandex.com,kokolat1@yandex.com,lahbegini@yandex.com,eddiesisney8@gmail.com,ippunk2727@gmail.com,a.ippunk@gmail.com,perjaka551@gmail.com,dwi.ananda51@gmail.com,risetterus1@gmail.com,ippunknanda@gmail.com,agentraveloka10@gmail.com,a.ippunk@gmail.com,teccomu277@gmail.com,4086182167,lahbegini@yandex.com,4582759503,7084308380,2405503447,2405503447,4143072871,traveldiscon@yahoo.com,a.ippunk@gmail.com,teccomu26@gmail.com,perjaka551@gmail.com,0-ousters-coops@icloud.com,811111111111,0385788925,phamtrinh69x@gmail.com,0987236963,nguyenthanhtuanvere@gmail.com,tungk56@gmail.com,dinhhuynhphuongdung@gmail.com,thaohoanglxag@gmail.com,ngoccmaii234@gmail.com,nguyentantruc8113@gmail.com,blueskylansedetiankong@gmail.com,tester.testcase0508@gmail.com,meyeu1991@gmail.com,n1m2n1m2345@gmail.com,nnminhvy@gmail.com,conccon45@gmail.com,bao.ngoc170901@gmail.com,minhchau.ng91@gmail.com,nhathao23age@gmail.com,hao.nguyen@chudu24.com,nhathaoc1@gmail.com,cunglaomyfriend@yahoo.com.vn,n.lananh@gmail.com,linhhphann88@gmail.com,adenphan94@gmail.com,nhatthuy0606@gmail.com,thuytran06699@gmail.com,minhthao1027@gmail.com,lonelyrain939@gmail.com,dailythuychi79@gmail.com,dieuhanhtour@goldenage.vn,loanpham1903@gmail.com,booking02@hopefultravel.vn,huda@lordeyal.com,anhdb2801@gmail.com,muavexemzu2@gmail.comm,trinhnhn1001@gmail.com,nguyntrinh964@yahoo.com,lamhuynhvi21@gmail.com,daoduytam1986@gmail.com,phanhonglan21@gmail.com,caosuperhp1999@gmail.com,hddlk24@gmail.com,hongvihoang128@gmail.com,queanhdoan17@gmail.com,trang.ntm2303@gmail.com,oanhkieu38@gmail.com,luongntc2702@gmail.com,khanhnm1@gmail.com,jenlee0212@gmail.com,tntnguyen155@gmail.com,op1@vacationleisure.vn,vanxuanvitv@gmail.com,trangmylinh127@gmail.com,nguyenthuythanhtruc1012@gmail.com,thuyle98.ttl@gmail.com,aloewood_19@yahoo.com,chinghieu@yahoo.com,ruanxiangxiang3993@gmail.com,nhumaipham95@gmail.com,tuyettrinh204@gmail.com,linh@gmail.com,bachtrinh.travel@gmail.com,sunflowers7991@yahoo.com,handkerchief9x@gmail.com,bichngocbui88@gmail.com,michaelhoang911@gmail.com,xiangnguyen93@gmail.com,tuyettrinh204@chudu24.com,ptmt06042@gmail.com,ngocquyen.triphunter@gmail.com,truyengiatoan@gmail.com,xiangruan9339@gmail.com,cuong.pham8521@gmail.com,hoanglan0302@gmail.com,luckyclover.2410@gmail.com,ruanshiguixiang9339@gmail.com,nlmlinh610@gmail.com,huonganh268@gmail.com,ruanguixiang9339@gmail.com,ruanshiguixiang3993@gmail.com,hoanmyshb@gmail.com,thaonguyentp71@gmail.com,ruan.guixiang93@gmail.com,Bbnguyen50@gmail.com,votebts3010@gmail.com,thanhhan.nguyen0306@gmail.com,huonganh@begodi.com,Vegiare.sieutietkiem@gmail.com,dothingoclieu55@gmail.com,Vukhanhly1987@gmail.com,thunghiem@gmail.com,vothidiemkieu.env@gmail.com,votebts3015@gmail.com,khoikorea93@gmail.com,ruanxiang93@gmail.com,V.thao2991990@yahoo.com,H.vu2010@gmail.com,vuthihoa201804@gmail.com,Tbminh3112@yahoo.com,nuu.panda@gmail.com,kimthoa.nguyenthi0312@gmail.com,ritaon94@gmail.com,tronghuu3080@gmail.com,marynguyen1912@gmail.com,phuonganhhuynh08@yahoo.com.vn,tour.lezgotravel@gmail.com,leloan.lhong@gmail.com,lehong_anh12@yahoo.com,ngohoangnhatquyen@gmail.com,nhungtt@smartlink.com.vn,butikhali94@gmail.com,christsai3103@gmail.com,n.nhan.nguyen7789@gmail.com,djzzadz@gmail.com,nguyenngocthienan99099@gmail.com,vothidiemkieu.env@gmail.com,cuchoa.le73@gmail.com,vit_cap@yahoo.com,quynhthusam@gmail.com,suongmai099@gmail.com,ngocnh.92@gmail.com,bex434171@gmail.com,theanhnguyen95.24@gmail.com,Abc@yahoo.com,huyen@travelite.vn,ha@travelite.vn,limkhoa@gmail.com,be.mom.ivv93@gmail.com,votebts3012@gmail.com,votebts3014@gmail.com,votebts3011@gmail.com,trangnguyen321994@gmail.com,lgquocthai@gmail.com,gsbuihien.bikhung@gmail.com,nguyentqhuong3993@gmail.com,hanguyen.travelite@gmail.com,ruanshiguixiang93@gmail.com,chaupham2581990@gmail.com,duongbuiminh97@gmail.com,thuylinh290693@gmail.com,sen.le.cv89@gmail.com,leduy9181@gmail.com,trung.nguyen.hoang86@gmail.com,senle.cv@gmail.com,Gialongboy@gmail.com,vinh.nguyen@chudu24.com,nguyenquehuong.nn@gmail.com,kanarichan45@gmail.com,dangmyhanh09@gmail.com,ldnhat24@gmail.com,tronghuu2606@gmail.com,nguyenhuyen71094@gmail.com,ty.thutran@gmail.com,sieunhanhvm@gmail.com,myhanh.qtkd@gmail.com,ni.tran19081989@gmail.com,lacyle15102002@gmail.com,test@yopmail.com,jacqueline.tuongvi@gmail.com,lieutuquyen80@yahoo.com.vn,vvip87@yahoo.com,Salonhieu0199@yahoo.com,Dohuyen1181989@gmail.com,Ngankimhuynh@yahoo.com.vn,La.pham89@gmail.com,hoiphunuthixabuonho@gmail.com,haryonetwork@gmail.com,andialdiano99@mailnesia.com,krasimiraham@gmail.com,krasimiraham@gmail.com,l4580n@gmail.com,l4580n@gmail.com,resultsamsi@gmail.com,danzasano@gmail.com,danzasano@gmail.com,danzasano@gmail.com,justnoob100@gmail.com,sayatidaktau717@gmail.com,sayatidaktau717@gmail.com,iniemailsaya717@gmail.com,prestonvshobe@yahoo.com,samriz0012@gmail.com,sayatidaktau717@gmail.com,prestonvshobe@yahoo.com,zamronisu@gmail.com,zamronisu@gmail.com,wandasenpai@gmail.com,zamronisu@gmail.com,dainlove_4@yahoo.com,wandasenpai@gmail.com,dainlove_4@yahoo.com,rebeccanufer316@gmail.com,zamronisu@gmail.com,rebeccanufer316@gmail.com,danzasano@gmail.com,rebeccanufer316@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,zamronisu@gmail.com,rebeccanufer316@gmail.com,zamronisu@gmail.com,danzasano@gmail.com,zamronisu@gmail.com,danzasano@gmail.com,wandasenpai@gmail.com,wandasenpai@gmail.com,guzmanbg2891@mailnesia.com,fajarfch@mailnesia.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order@yandex.com,Voc.order@yandex.com,Voc.order@yandex.com,Voc.order@yandex.com,Voc.order@yandex.com,Voc.order2@yandex.com,samriz0012@gmail.com,krasimiraham@gmail.com,rebeccanufer316@gmail.com,rebeccanufer316@gmail.com,prestonvshobe@yahoo.com,voc.order@yandex.com,voc.order@yandex.com,voc.order2@yandex.com,voc.order2@yandex.com,voc.order@yandex.com,voc.order@yandex.com,voc.order2@yandex.com,voc.order@yandex.com,voc.order2@yandex.com,voc.order2@yandex.com,voc.order@yandex.com,voc.order2@yandex.com,voc.order2@yandex.com,voc.order@yandex.com,voc.order2@yandex.com,prestonvshobe@yahoo.com,prestonvshobe@yahoo.com,voc.order@yandex.com,akumantanmu99@yahoo.com,sayatidaktau717@gmail.com,prestonvshobe@yahoo.com,resultsamsi@gmail.com,danzasano@gmail.com,danzasano@gmail.com,kimcillesoposengelekhayo@gmail.com,krasimiraham@gmail.com,resultsamsi@gmail.com,akumantanmu99@yahoo.com,Voc.order@yandex.com,dewintha.wulandari@gmail.com,prestonvshobe@yahoo.com,prestonvshobe@yahoo.com,resultsamsi@gmail.com,resultsamsi@gmail.com,akumantanmu99@yahoo.com,samsiful_rizal@yahoo.com,resultsamsi@gmail.com,andyaldian1995@gmail.com,akumantanmu99@yahoo.com,krasimiraham+999@gmail.com,akumantanmu99@yahoo.com,krasimiraham+998@gmail.com,p_rullz@yahoo.com,p_rullz@yahoo.com,p_rullz@yahoo.com,stellavanancia51@gmail.commlinhthao26@gmail.com,krasimiraham@gmail.com,akumantanmu99@yahoo.com,hn@dulichcaosu.com,dainlove_4@yahoo.com,bocahmedan001@gmail.com,bocahmedan001@gmail.com,wandasenpai@gmail.com,rizkyravaneli@gmail.com,rikrik@yopmail.com,rikrik@yopmail.com,rikrik@yopmail.com,BLONGKER4@GMAIL.COM,blongker4@gmail.com,blongker4@gmail.com,blongker4@gmail.com,BLONGKER4@GMAIL.COM,BLONGKER4@GMAIL.COM,krasimiraham@gmail.com,krasimiraham@gmail.com,krasimiraham+99@gmail.com,akumantanmu99@yahoo.com,iniemailsaya717@mailnesia.com,iniemailsaya717@mailnesia.com,samsiful_rizal@yahoo.com,prestonvshobe@yahoo.com,wendi.satria17@gmail.com,samsifulrizal@gmail.com,krasimiraham@gmail.com,krasimiraham@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryojackson@gmail.com,haryojackson@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.comm,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,haryonetwork@gmail.com,haryonetwork@gmail.com,haryojackson@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,prestonvshobe@yahoo.com,resultsamsi@gmail.com,resultsamsi@gmail.com,krasimiraham@gmail.com,joybuttercup@mailnesia.com,wendyciaz@yahoo.com,dainlove_4@yahoo.com,danzasano@gmail.com,danzasano@gmail.com,zamronisu@gmail.com,dainlove_4@yahoo.com,dainlove_4@yahoo.com,syamsul@yopmail.com,wendyciaz@yahoo.com,justnoob201@gmail.com,samriz0012@gmail.com,akumantanmu99@yahoo.com,krasimiraham@gmail.com,krasimiraham@gmail.com,krasimiraham@gmail.com,krasimiraham@gmail.com,nath.wendy509@gmail.com,nath.wendy509@gmail.com,wendyciaz@yahoo.com,krasimiraham@gmail.com,krasimiraham@gmail.com,mozilla.firegan@yandex.com,akumantanmu99@yahoo.com,resultsamsi@gmail.com,amstraus@aol.com,amstraus@aol.com,akumantanmu99@yahoo.com,justnoob200@gmail.com,Elizabethjgwidt@gmail.com.com,Elizabethjgwidt@gmail.com.com,Elizabethjgwidt@gmail.com.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,wendyciaz@yahoo.com,dewintha.wulandari@gmail.com,wendi.satria1703@gmail.com,dewintha.wulandari@gmail.com,wendi.satria1703@gmail.com,dewintha.wulandari@gmail.com,wendi.satria1703@gmail.com,wendyciaz@yahoo.com,dewintha.wulandari@gmail.com,wendyciaz@yahoo.com,dewintha.wulandari@gmail.com,wendi.satria1703@gmail.com,wendi.satria1703@gmail.com,dewintha.wulandari@gmail.com,dewintha.wulandari@gmail.com,jancok123@yopmail.com,Elizabethjgwidt@gmail.com,jhonro999@gmail.com,Elizabethjgwidt@gmail.com,jhonro999@gmail.com,jhonro999@gmail.com,jhonro999@gmail.com,admin@untouchable1st.com,admin@untouchable1st.com,jhonro999@gmail.com,admin@untouchable1st.com,elizabethjgwidt@gmail.com,ayu729511@gmail.com,Boys.thirteen14@gmail.com,azizzuhri717@mailnesia.com,boys.thirteen14@gmail.com,zbigniew_fraszczak@mailnesia.com,result.l.o.en@gmail.com,re.sultloen@gmail.com,wandasenpai@gmail.com,result.l.o.en@gmail.com,blongker4@gmail.com,setor2018@gmail.com,BLONGKER4@GMAIL.COM,banyokradagelo@gmail.com,dewintha.wulandari@gmail.com
            </div>
            <div id="hdd_bl_cc" style="display:none">4563533038077666</div>
            <div id="div_json" style="display:none"></div>

        </div>
    </main>
    <div class="screen hide" id="menu-home" data-screen="">
    </div>
    <div class="screen hide" data-screen="">
    </div>
    <div class="popup modal fade" id="showerrormodal" tabindex="-1" role="dialog" aria-labelledby=""
        aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Thông Báo</h4>

                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer"></div>

            </div>
        </div>
    </div>
    <div class="popup modal fade" tabindex="-1" role="dialog" id="showsessiondata" aria-labelledby=""
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Thông báo</p>
                </div>
                <div class="modal-body">
                    <p>Phiên giao dịch của bạn đã hết </p>
                    <p>Vui lòng nhấp <a href="https://ivivu.com"> vào đây để về trang chủ</a></p>
                </div>
                <div class="modal-footer"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
        </div>
    </div>
    <div class="popup modal fade" tabindex="-1" role="dialog" id="showpolicy" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Thông Báo</h4>

                </div>
                <div class="modal-body">
                    Vui lòng nhấp chọn chấp nhận Điều khoản và điều kiện để tiếp tục
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</body>