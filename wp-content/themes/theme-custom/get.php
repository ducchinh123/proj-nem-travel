<?php
/*
    Template Name: TEST Page
*/
?>
<html lang="vi">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <!-- META TAG -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="dc.creator" content="iVIVU.com">
    <meta name="dc.title" content="iVIVU.com">
    <meta name="copyright" content="">
    <meta name="author" content="">
    <meta name="generator" content="Công ty TNHH MTV iVIVU">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FACEBOOK TAG -->
    <meta property="og:site_name" content="www.iVIVU.com">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:url" content="https://www.ivivu.com">
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="fb:app_id" content="">

    <!-- TITLE -->
    <title>iVIVU.com | Đặt phòng khách sạn toàn thế giới cho người Việt</title>
    <!-- CSS LINK -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

    <link rel="shortcut icon" href="//res.ivivu.com/payment/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="//res.ivivu.com/payment/vendor/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="//res.ivivu.com/payment/css/iVIVU.Payment1.css?v=12.57">
    <link rel="stylesheet" href="//res.ivivu.com/payment/css/layout.css?v=12.57">
    <!-- <link rel="stylesheet" href="//res.ivivu.com/payment/css/iVIVU.PaymentVoucher.css?v=12.57"> -->
    <link rel="stylesheet" href="//res.ivivu.com/payment/vendor/ivivu_icons/ivivu_icons.min.css">
    <link href="//res.ivivu.com/payment/vendor/vvcon/style.css?v=12.57" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="//res.ivivu.com/payment/img/favicon.ico" type="image/x-icon">

    <!-- CSS INSIDE -->
    <style>
        /*For angular css*/
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }

        /*End for angular css*/
        .v-btn-group-radio .btn-group .btn {
            font-weight: 400;
            font-size: 14px;
        }

        .v-btn-group-radio .btn-group .btn.btn-default {
            color: #6c707e;
            border-width: 1px;
            background: rgba(148, 151, 163, 0.05);
            border-color: rgba(148, 151, 163, 0.08);
            transition: all .3s linear;
        }

        .v-btn-group-radio .btn-group .btn.btn-default.active {
            box-shadow: none;
            color: #003C71;
            border-color: rgba(0, 60, 113, 0.7);
            background: rgba(0, 60, 113, 0.08);
        }

        .v-btn-group-radio .btn-group .btn.btn-default.active:hover {
            color: #003C71;
        }

        .v-btn-group-radio .btn-group .btn.btn-default.disabled {
            cursor: default;
            background: rgba(148, 151, 163, 0.05) !important;
            color: #6c707e !important;
        }

        .v-btn-group-radio .btn-group .btn.btn-default:hover {
            color: #003C71;
        }

        .v-btn-group-radio .btn-group .btn.btn-default:active {
            box-shadow: none;
        }

        @media (max-width: 768px) {
            .onepay-bank {
                text-align: center;
            }
        }

        .onepay-bank .bank-item {
            opacity: 1 !important;
            text-align: center;
            width: 84px;
            height: 40px;
        }

        .onepay-bank .bank-item.active {
            border: 2px solid #23BFD8 !important;
        }

        .onepay-bank .bank-item img {
            height: 100%;
            width: 90%;
        }

        .onepay-bank .bank-item {
            object-fit: contain;
        }

        .booking_pay_expire,
        .booking_pay_cancel,
        .booking_pay_ok {
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            overflow: hidden;
        }

        .booking_pay_expire img,
        .booking_pay_cancel img,
        .booking_pay_ok img {
            float: left;
            vertical-align: middle;
            margin-right: 0;
            width: 94px;
        }

        .booking_pay_expire h2,
        .booking_pay_cancel h2,
        .booking_pay_ok h2 {
            margin: 20px 0 3px 0;
            color: #cf1d0b;
            font-size: 20px;
            font-weight: 700;
        }

        .booking_pay_ok h2 {
            color: #a0c419;
        }

        .booking_pay_cancel .cfrm-info {
            padding: 0 0 0 94px !important;
        }

        #exampleModal .modal-header .close {
            margin-top: -10px;
        }

        @media (max-width: 768px) {

            .booking_pay_expire img,
            .booking_pay_cancel img,
            .booking_pay_ok img {
                display: none;
            }

            .booking_pay_cancel .cfrm-info {
                padding: 30px 0px 15px 0 !important;
            }

            .booking_pay_cancel .wrapper .cfrm-info {
                padding: 0px;
            }
        }
    </style>
    <script
        src="https://connect.facebook.net/signals/config/1505476653113156?v=2.9.164&amp;r=stable&amp;domain=pay.ivivu.com&amp;hme=61ff4e692c87a9a2ce7b19822df2b04638e3ca38b23c1be6c0f1945ccadb2ad5&amp;ex_m=69%2C118%2C104%2C108%2C60%2C4%2C97%2C68%2C16%2C94%2C86%2C50%2C53%2C167%2C170%2C182%2C178%2C179%2C181%2C29%2C98%2C52%2C75%2C180%2C162%2C165%2C175%2C176%2C183%2C127%2C40%2C34%2C139%2C15%2C49%2C189%2C188%2C129%2C18%2C39%2C1%2C42%2C64%2C65%2C66%2C70%2C90%2C17%2C14%2C93%2C89%2C88%2C105%2C51%2C107%2C38%2C106%2C30%2C91%2C26%2C163%2C166%2C136%2C28%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C56%2C61%2C63%2C73%2C99%2C27%2C74%2C9%2C8%2C78%2C47%2C21%2C101%2C100%2C102%2C95%2C10%2C20%2C3%2C19%2C83%2C55%2C81%2C33%2C72%2C0%2C92%2C32%2C80%2C85%2C46%2C45%2C84%2C37%2C5%2C87%2C79%2C43%2C35%2C82%2C2%2C36%2C62%2C41%2C103%2C44%2C77%2C67%2C109%2C59%2C58%2C31%2C96%2C57%2C54%2C48%2C76%2C71%2C24%2C110"
        async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        //ga('create', 'UA-61182265-1', 'ivivu.com', { 'allowLinker': true });
        //ga('require', 'linker');
        //ga('linker:autoLink', ['ivivu.com', 'pay.ivivu.com'], true);
        //ga('send', 'pageview');
        //ga('create', 'UA-61182265-4', { 'name': 'b' });
        //ga('b.send', 'pageview');
        //ga('set', 'currencyCode', 'VND');

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics add new 07-06-2022 -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-YRG1RN8JP1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-YRG1RN8JP1');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1505476653113156');
        fbq('track', "PageView");</script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1505476653113156&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>
<link rel="stylesheet" href="//res.ivivu.com/payment/css/iVIVU.Payment1.css?v=12.57">
<body data-page="" class="thankyou ng-scope" ng-app="payment" ng-controller="main.ctrl">
    <div id="layer_body" class="display-none"
        style="position: absolute; width: 100%; z-index: 999; background: white; opacity: 0.4; height: 642%;"></div>
    <!-- BEGIN HEADER -->
    <header>
        <div class="container payment-hidden-on-mobile">
            <a class="site-logo" href="https://www.ivivu.com/" title="">
                <i class="sprites ivivu-logo"></i>

                <span class="hidden logo-caption verticalLine hidden-xs hidden-sm">đặt tour và khách sạn trực
                    tuyến</span>
            </a>

            <a href="javascript:;" class="mobi-toggler menu-toggle hover-opacity-8 hidden-xs">
                <i class="sprites icn-menu-list"></i>
            </a>
            <!-- BEGIN HOTLINE -->
            <ul class="hotline pull-right hidden-xs">
                <li><a class="hotline" href="tel:1900 1870"><i class="glyphicon glyphicon-earphone icon-phone"></i> 1900
                        1870</a></li>
                <li>từ 7h30-21h hàng ngày</li>

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
                    value="{&quot;hotel&quot;:{&quot;hotelId&quot;:&quot;648218&quot;,&quot;roomName&quot;:&quot;Superior Room&quot;,&quot;hotelName&quot;:&quot;Khách sạn Wyndham Garden Grandworld Phú Quốc&quot;,&quot;hotelType&quot;:&quot;Khách sạn (Hotel)&quot;,&quot;hotelCode&quot;:&quot;wyndham-garden-grandworld-phu-quoc&quot;,&quot;hotelRating&quot;:4,&quot;regionName&quot;:&quot;Phú Quốc&quot;,&quot;totalRoom&quot;:1,&quot;totalAdult&quot;:1,&quot;totalChild&quot;:0,&quot;jsonObject&quot;:null,&quot;checkIn&quot;:&quot;2024-08-15&quot;,&quot;checkOut&quot;:&quot;2024-08-16&quot;}}"
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
                <input type="hidden" value="1242000" id="____totalPrice">
                <input type="hidden" value="CQAAAB+LCAAAAAAABAAzNDIxMjAw0DMAAO8vilUJAAAA" id="____total">
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
                    <div
                        class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center vspacingbottom15 vspacingtop5 hidden">
                        <p style="color:#00467E; font-size:20px;">
                            Chúc mừng bạn đã nhận được ưu đãi đặc biệt
                            <span style="color:#26BED6">-216.000 VND</span> cho lần đặt phòng này
                        </p>
                    </div>


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
                                                        1 Phòng Superior Room · Gồm ăn sáng
                                                    </span>
                                                </div>

                                                <div class="payment-hidden-on-desktop">
                                                    <p class="payment-m-room-name">Superior Room</p>
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
                                                            Gồm ăn sáng
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="booking-cancel-rules payment-hidden-on-mobile">
                                                    <p class="opacity07"><i class="vicon vicon-notice-info"></i> Không
                                                        hoàn huỷ hoặc thay đổi </p>
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

                                                            <span class="totalPrice" id="totalhotel">1.242.000
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
                                                                id="totalhotelall" data-price="1.242.000 VND"
                                                                ng-model="totalAmount">1.242.000 VND</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <span class="taxIncluded">Giá đã bao gồm thuế &amp; phí.</span>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <span class="subtractOTA">Tiết kiệm 216.000 VND</span>
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
                                                <p class="opacity07"><i class="vicon vicon-notice-info"></i> Không hoàn
                                                    huỷ hoặc thay đổi </p>
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
                                        <div class="payment-hidden-on-desktop mt-8 bg-white"
                                            style="padding-bottom: 74px">
                                            <div class="container">
                                                <!-- ngIf: codeVoucher && codeVoucher != '' -->
                                                <div class="total-price-wrapper">
                                                    <span class="total-price-text">Tổng cộng</span>
                                                    <span
                                                        class="totalPrice total-price-value ng-pristine ng-untouched ng-valid"
                                                        id="totalhotelall2" data-price="1.242.000 VND"
                                                        ng-model="totalAmount">1.242.000</span>
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

                                                <strong id="total_prices_tong" data-price="1.242.000 VND">
                                                    1.242.000 VND
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
                                                        <i class="vvcon-ic_food"></i> 1 x Superior Room
                                                    </p>
                                                    <p>

                                                        <i class="vicon vicon-check"></i> Gồm ăn sáng
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="price-info">
                                                <strong data-price="1.242.000 VND" class="ng-binding">
                                                    1.242.000 VND
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
   
    <!-- JAVASCRIPT -->
    <!-- BEGIN JAVASCRIPT -->
    <script src="//res.ivivu.com/payment/vendor/jquery/jquery-1.11.2.min.js?v=12.57"></script>
    <script src="//res.ivivu.com/payment//js/angular/angular.min.js"></script>
    <script src="//res.ivivu.com/payment//js/angular/angular-route.min.js"></script>
    <script src="//res.ivivu.com/payment/js/IVIVU.PAYMENT.js?v=12.57"></script>
    <!-- END JAVASCRIPT -->


    <script>
        const _alStatus = 'RQ';
        const _roomClassContracting = { "ClassID": "10906", "ClassEANID": "0", "ClassHbID": null, "ClassAgodaId": 0, "AgodaSearchId": 0, "ClassNameAgoda": "", "ClassLocationID": "0", "ClassName": "Superior Room", "ClassNameEAN": "", "ClassNameHBed": "", "CurrencyCode": "VND", "HotelOptionals": null, "IsOptional": false, "IsPromotion": true, "Rooms": [{ "Adults": 2, "AdultPax": 1, "AgreementID": 31962, "BBCode": "BB", "Childs": 0, "ChildsAge": [], "CurrencyCode": "VND", "IsOptional": false, "IsPromotion": true, "Penalty_Date": "2024-08-14", "Penalty_Type": 2, "Penalty_Val": 1242000.00, "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancellationPolicy": null, "PromotionDescription": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionId": 31962, "RoomCategory": 0, "RoomID": 78084, "RoomEANID": 0, "RoomName": "Superior Room", "RoomPriceBreak": [{ "AgreementID": 31962, "CurrencyCode": "VND", "DailyRateInfo": 1080000.0, "CompulsoryRate": 0, "BaseRate": 1080000.0, "DateOfRate": "2024-08-15", "RateType": "Room", "RoomCategory": 1, "RoomClsLocationID": 1, "RoomID": 78084, "PriceHadDiscount": 1080000.0, "PriceRoomOta": 1458000.0, "PriceRoomTa": 1242000.0, "ServiceID": 10141127, "SupplierCode": "IVIVU", "MealCode": "BB", "MealName": "Bed \u0026 Breakfast", "Note": "", "SupplementRates": [], "dayOfService": null }], "RoomRefID": 10906, "Status": "RQ", "SupplierCode": "IVIVU", "Supplier": "Internal", "SupplierRef": [{ "ID": 1, "Value": "phutUytI39vRd1cbfZ7gLLkk3DD8iuYFGOUyJWNyeR8ttpJGOBjzPWoU5tNiH0uq" }, { "ID": 6, "Value": "WUQEGI9vjwO2TImADMpIGw==" }], "SupplementsPlus": [], "SupplierRefStr": "gQAAAB+LCAAAAAAABACLrlbydFGyMtRRCkvMKU1VslIqyCgtCa0s8TS2LAtKMUxOSosyT/fxyc42dnGxyCyNdHP3D630CverTA2yKCkp8HL3d8qqCgjPDzUt8cv0MCgtVKrVgZhphjAzPDTQ1d3Tsiyr3N8oxDPX0cW3wNO93NZWqTYWAF2H/6+BAAAA", "TotalPrice": 1080000.0, "TotalRooms": 1, "NameDisplay": "Gồm ăn sáng", "TotalPriceHadDiscount": 1080000.0, "TotalPriceHadDiscountTa": 1242000.0, "TotalPriceHadDiscountOta": 1458000.0, "TotalBaseRate": 1080000.0, "TotalCompulsoryRate": 0, "TotalTaxAndServiceFee": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "TotalDiscount": 0, "SuggestRate": 0, "PricesRoomNightTA": 1242000.0, "PricesRoomNightOTA": 1458000.0, "AveragePrice": 1080000.0, "AveragePriceTA": 1242000.0, "AveragePriceOTA": 1458000.0, "Images": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "ImagesOrigin": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1.webp?o=jpg", "ImagesMaxWidth320": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-320x240.webp?o=jpg", "ImagesMaxWidth414": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-420x315.webp?o=jpg", "ImagesMaxWidth768": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "ImagesMaxWidth500": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "Infomation": null, "RoomInfomations": { "RoomImage": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1.webp?o=jpg", "SubRoomHotels": [{ "BedRoomId": 20999, "Quantity": 1, "BedSummarys": [{ "BedQuantity": 1, "Name": "Giường King", "type": null, "ShortName": "King" }] }, { "BedRoomId": 21000, "Quantity": 1, "BedSummarys": [{ "BedQuantity": 2, "Name": "Giường đơn", "type": null, "ShortName": "đơn" }] }], "RoomImageList": [{ "Url": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8.webp?o=jpg", "Caption": "", "Order": 1 }, { "Url": "//cdn1.ivivu.com/iVivu/2023/04/07/19/1-1-.webp?o=jpg", "Caption": "", "Order": 2 }], "RoomDescription": "", "BedSummaryDisplays": ["1 King", "2 đơn"], "BedTypes": null, "BedSummaryDisplaysMobile": ["1 Giường King", "2 Giường đơn"], "Facilitys": [{ "Id": 644947, "Name": "Wifi miễn phí", "Description": null }, { "Id": 644948, "Name": "Trà/Cà phê miễn phí", "Description": null }], "RoomClassFacility": null, "Direction": "vườn", "Acreage": "29", "AllowSmoke": false, "BathTub": false, "Pools": false, "Shower": true, "WindowOpen": false, "Window": true, "Balcony": false, "NoneWindow": false, "BathTubShower": false, "Maylanh": true, "BathTubJacuz": false, "Toilet": 1, "Hongam": false }, "MaxAdults": 3, "MaxPax": 4, "MaxPaxNotAdult": 1, "ChildInfant": 0, "ChildUseResidue": 0, "ChildUseResidue2": 0, "ChildUseAirportTransfer": 0, "AdultUseAirportTransfer": 0, "MaxChils": 2, "IncludeAdults": 2, "ExtraBedForAdult": 0, "ExtraBedForChild": 0, "ExtraBedForChild2": 0, "ChildWithoutNo": 0, "ChildWithoutNo2": 0, "ChildChargeAdult": 0, "AdultWithoutNo": 0, "AllotmentAvailable": 0, "AllotmentBlocked": 0, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "Note": "", "PromotionInclusions": "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)\nXe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "HotelFee": 0, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "Isshowprices": 1, "DataFromERP": true, "BlackOut": false, "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "JsonData": null }], "MealTypeRates": [{ "guidId": "78084_0976ddb2-c87d-42a1-8d16-fdd77c4892a5", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1242000.0, "PriceAvgPlusNet": 1080000.0, "PriceAvgPlusNetStr": "1.080.000", "PriceAvgMinPriceStr": "1.242.000", "PriceAvgPlusOTA": 1458000.0, "PriceAvgPlusTAStr": "1.242.000", "PriceAvgPlusTotalTA": 1242000.0, "PriceAvgPlusOTAStr": "1.458.000", "PriceAvgDefaultNet": 1080000.0, "PriceAvgDefaultNetStr": "1.080.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1242000.0, "PriceAvgDefaultOTA": 1458000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_4518fbc7-8635-41ca-8ad0-976f3e0facf0", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1357000.0, "PriceAvgPlusNet": 1180000.0, "PriceAvgPlusNetStr": "1.180.000", "PriceAvgMinPriceStr": "1.357.000", "PriceAvgPlusOTA": 1357000.0, "PriceAvgPlusTAStr": "1.357.000", "PriceAvgPlusTotalTA": 1357000.0, "PriceAvgPlusOTAStr": "1.357.000", "PriceAvgDefaultNet": 1180000.0, "PriceAvgDefaultNetStr": "1.180.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e1.357.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e1.357.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1180000.00, "Penalty_Val_OTA": 1357000.00, "Penalty_Val_TA": 1357000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1180000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1180000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1180000.0,\"PriceRoomOta\":1357000.0,\"PriceRoomTa\":1357000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1357000.0, "PriceAvgDefaultOTA": 1357000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_d01eb684-bf19-4e85-bf96-9626f32086b5", "RoomId": 78084, "RoomName": "Superior Room", "Code": "HB", "Name": "Gồm ăn sáng + bữa ăn trưa hoặc tối", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2024000.0, "PriceAvgPlusNet": 1760000.0, "PriceAvgPlusNetStr": "1.760.000", "PriceAvgMinPriceStr": "2.024.000", "PriceAvgPlusOTA": 2024000.0, "PriceAvgPlusTAStr": "2.024.000", "PriceAvgPlusTotalTA": 2024000.0, "PriceAvgPlusOTAStr": "2.024.000", "PriceAvgDefaultNet": 1760000.0, "PriceAvgDefaultNetStr": "1.760.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.024.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.024.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1760000.00, "Penalty_Val_OTA": 2024000.00, "Penalty_Val_TA": 2024000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1760000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1760000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1760000.0,\"PriceRoomOta\":2024000.0,\"PriceRoomTa\":2024000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"HB\",\"MealName\":\"HalfBoard\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2024000.0, "PriceAvgDefaultOTA": 2024000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_cf52ad72-a495-48c9-910f-d9d502494ee9", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + 01 ngày vui chơi Vinpearl Safari (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2599000.0, "PriceAvgPlusNet": 2260000.0, "PriceAvgPlusNetStr": "2.260.000", "PriceAvgMinPriceStr": "2.599.000", "PriceAvgPlusOTA": 2599000.0, "PriceAvgPlusTAStr": "2.599.000", "PriceAvgPlusTotalTA": 2599000.0, "PriceAvgPlusOTAStr": "2.599.000", "PriceAvgDefaultNet": 2260000.0, "PriceAvgDefaultNetStr": "2.260.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.599.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "Xe VinBus đưa đón Vinpearl Safari"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.599.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2260000.00, "Penalty_Val_OTA": 2599000.00, "Penalty_Val_TA": 2599000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31716,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2260000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2260000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2260000.0,\"PriceRoomOta\":2599000.0,\"PriceRoomTa\":2599000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + 01 ngày vui chơi Vinpearl Safari (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2599000.0, "PriceAvgDefaultOTA": 2599000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_5ad464c3-f9c2-424b-ab37-eb3b7e9f9e12", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + 01 ngày vui chơi VinWonders (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 3174000.0, "PriceAvgPlusNet": 2760000.0, "PriceAvgPlusNetStr": "2.760.000", "PriceAvgMinPriceStr": "3.174.000", "PriceAvgPlusOTA": 3174000.0, "PriceAvgPlusTAStr": "3.174.000", "PriceAvgPlusTotalTA": 3174000.0, "PriceAvgPlusOTAStr": "3.174.000", "PriceAvgDefaultNet": 2760000.0, "PriceAvgDefaultNetStr": "2.760.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.174.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "Xe VinBus đưa đón VinWonders"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.174.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2760000.00, "Penalty_Val_OTA": 3174000.00, "Penalty_Val_TA": 3174000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31714,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2760000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2760000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2760000.0,\"PriceRoomOta\":3174000.0,\"PriceRoomTa\":3174000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + 01 ngày vui chơi VinWonders (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 3174000.0, "PriceAvgDefaultOTA": 3174000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_ba78c4d1-3a5e-4919-a711-6fd0d35cc7f6", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + Vui chơi VinWonders \u0026 Vinpearl Safari (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 3910000.0, "PriceAvgPlusNet": 3400000.0, "PriceAvgPlusNetStr": "3.400.000", "PriceAvgMinPriceStr": "3.910.000", "PriceAvgPlusOTA": 3910000.0, "PriceAvgPlusTAStr": "3.910.000", "PriceAvgPlusTotalTA": 3910000.0, "PriceAvgPlusOTAStr": "3.910.000", "PriceAvgDefaultNet": 3400000.0, "PriceAvgDefaultNetStr": "3.400.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.910.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)\r", "(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Xe VinBus đưa đón VinWonders \u0026 Vinpearl Safari"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.910.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 3400000.00, "Penalty_Val_OTA": 3910000.00, "Penalty_Val_TA": 3910000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":3400000.0,\"CompulsoryRate\":0.0,\"BaseRate\":3400000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":3400000.0,\"PriceRoomOta\":3910000.0,\"PriceRoomTa\":3910000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + Vui chơi VinWonders \u0026 Vinpearl Safari (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 3910000.0, "PriceAvgDefaultOTA": 3910000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_e602233c-1751-4dae-b95a-65a0f1016bf3", "RoomId": 78084, "RoomName": "Superior Room", "Code": "FB", "Name": "Gồm 3 bữa ăn", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2691000.0, "PriceAvgPlusNet": 2340000.0, "PriceAvgPlusNetStr": "2.340.000", "PriceAvgMinPriceStr": "2.691.000", "PriceAvgPlusOTA": 2691000.0, "PriceAvgPlusTAStr": "2.691.000", "PriceAvgPlusTotalTA": 2691000.0, "PriceAvgPlusOTAStr": "2.691.000", "PriceAvgDefaultNet": 2340000.0, "PriceAvgDefaultNetStr": "2.340.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.691.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.691.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2340000.00, "Penalty_Val_OTA": 2691000.00, "Penalty_Val_TA": 2691000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2340000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2340000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2340000.0,\"PriceRoomOta\":2691000.0,\"PriceRoomTa\":2691000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"FB\",\"MealName\":\"FullBoard\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2691000.0, "PriceAvgDefaultOTA": 2691000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }], "TotalMealTypeShowed": 4, "ExcludeVAT": 0, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenAgoda": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "HotelCheckDetailTokenInternal": "SXU7SOooOWBtjA3GAQ+UYjWawAeXqnplnWpZ9TUfF5fHemOY/kfoyg2v72hjQnA6TLqf3kLOmykTe35279zGzZDI2kHAt5NL/5gCLea8sdY2im+eihFxYQhkHVKqVNlQk6nYNgmQX4c=", "ReqHBED": null, "TotalPriceHadDiscountTa": 1242000, "TotalPriceHadDiscountOta": 1458000, "Status": "RQ", "OrderStatus": 1, "Supplier": "Internal", "SupplierCode": "IVIVU", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "TotalPrice": 1080000.0, "SuggestRate": 0, "TotalRoom": 1, "TotalAlloment": 0, "AvailableNo": 0, "PercentPaxRoom": 50, "BlockNo": 0, "MSG": "", "MSGCode": "", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "RoomType": "phòng", "ListObjRoomClass": null, "StayPeriod": "", "StayPeriodRangeDates": null, "ImageEAN": null, "RoomsRequest": [{ "Adults": 1, "Childs": 0, "ChildsAge": [] }], "GrossProfitOnline": 0, "RequestObj": null, "BedTypes": null, "MaxPax": 0, "MaxAdult": 0, "MaxChild": 0, "View": null, "SquareMeters": null, "Description": null, "BathRoom": null, "IsSmoking": null, "RoomClassFacility": null, "DescriptionTaxFee": null, "CityID": 0, "CountryID": "VN", "AllomentBreak": null, "IsPromotionAllotment": false, "PaymentPeriod": "\/Date(1730393940000)\/", "JsonData": "{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}", "IsFenced": false, "time1": 0, "time2": 0, "time3": 0, "time4": 0 };
        const _idLogin = '0';
        var isBizAccount = false;
        setTimeout(() => {
            console.log('gioitinh', { "transactionid": "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", "checkpage": 0, "Source": null, "periodPaymentDate": "2024-08-14 20:30", "hotelType": "Khách sạn (Hotel)", "regionname": "Phú Quốc", "linkimgaes": "https://cdn1.ivivu.com/images/2023/05/31/11/wggpq-exterior-6-cr___3k8hl6____horizontal.webp?o=jpg", "hotelregion": 114181, "datacheckxml": "True", "IsShowPrice": 1, "checkdatata": "2024-08-15", "_datecheckin": "T5, 15/08/2024", "_datecheckout": "T6, 16/08/2024", "_numberadust": 1, "HotelId": 648218, "Checkin": "2024-08-15", "Checkout": "2024-08-16", "CheckInInstructions": "", "SpecialCheckInInstructions": "", "_numberchild": 0, "sp": "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", "_name": { "ClassID": "10906", "ClassEANID": "0", "ClassHbID": null, "ClassAgodaId": 0, "AgodaSearchId": 0, "ClassNameAgoda": "", "ClassLocationID": "0", "ClassName": "Superior Room", "ClassNameEAN": "", "ClassNameHBed": "", "CurrencyCode": "VND", "HotelOptionals": null, "IsOptional": false, "IsPromotion": true, "Rooms": [{ "Adults": 2, "AdultPax": 1, "AgreementID": 31962, "BBCode": "BB", "Childs": 0, "ChildsAge": [], "CurrencyCode": "VND", "IsOptional": false, "IsPromotion": true, "Penalty_Date": "2024-08-14", "Penalty_Type": 2, "Penalty_Val": 1242000.00, "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancellationPolicy": null, "PromotionDescription": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionId": 31962, "RoomCategory": 0, "RoomID": 78084, "RoomEANID": 0, "RoomName": "Superior Room", "RoomPriceBreak": [{ "AgreementID": 31962, "CurrencyCode": "VND", "DailyRateInfo": 1080000.0, "CompulsoryRate": 0, "BaseRate": 1080000.0, "DateOfRate": "2024-08-15", "RateType": "Room", "RoomCategory": 1, "RoomClsLocationID": 1, "RoomID": 78084, "PriceHadDiscount": 1080000.0, "PriceRoomOta": 1458000.0, "PriceRoomTa": 1242000.0, "ServiceID": 10141127, "SupplierCode": "IVIVU", "MealCode": "BB", "MealName": "Bed \u0026 Breakfast", "Note": "", "SupplementRates": [], "dayOfService": null }], "RoomRefID": 10906, "Status": "RQ", "SupplierCode": "IVIVU", "Supplier": "Internal", "SupplierRef": [{ "ID": 1, "Value": "phutUytI39vRd1cbfZ7gLLkk3DD8iuYFGOUyJWNyeR8ttpJGOBjzPWoU5tNiH0uq" }, { "ID": 6, "Value": "WUQEGI9vjwO2TImADMpIGw==" }], "SupplementsPlus": [], "SupplierRefStr": "gQAAAB+LCAAAAAAABACLrlbydFGyMtRRCkvMKU1VslIqyCgtCa0s8TS2LAtKMUxOSosyT/fxyc42dnGxyCyNdHP3D630CverTA2yKCkp8HL3d8qqCgjPDzUt8cv0MCgtVKrVgZhphjAzPDTQ1d3Tsiyr3N8oxDPX0cW3wNO93NZWqTYWAF2H/6+BAAAA", "TotalPrice": 1080000.0, "TotalRooms": 1, "NameDisplay": "Gồm ăn sáng", "TotalPriceHadDiscount": 1080000.0, "TotalPriceHadDiscountTa": 1242000.0, "TotalPriceHadDiscountOta": 1458000.0, "TotalBaseRate": 1080000.0, "TotalCompulsoryRate": 0, "TotalTaxAndServiceFee": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "TotalDiscount": 0, "SuggestRate": 0, "PricesRoomNightTA": 1242000.0, "PricesRoomNightOTA": 1458000.0, "AveragePrice": 1080000.0, "AveragePriceTA": 1242000.0, "AveragePriceOTA": 1458000.0, "Images": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "ImagesOrigin": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1.webp?o=jpg", "ImagesMaxWidth320": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-320x240.webp?o=jpg", "ImagesMaxWidth414": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-420x315.webp?o=jpg", "ImagesMaxWidth768": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "ImagesMaxWidth500": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1-500x375.webp?o=jpg", "Infomation": null, "RoomInfomations": { "RoomImage": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8-cr-1.webp?o=jpg", "SubRoomHotels": [{ "BedRoomId": 20999, "Quantity": 1, "BedSummarys": [{ "BedQuantity": 1, "Name": "Giường King", "type": null, "ShortName": "King" }] }, { "BedRoomId": 21000, "Quantity": 1, "BedSummarys": [{ "BedQuantity": 2, "Name": "Giường đơn", "type": null, "ShortName": "đơn" }] }], "RoomImageList": [{ "Url": "//cdn1.ivivu.com/iVivu/2023/04/07/19/8.webp?o=jpg", "Caption": "", "Order": 1 }, { "Url": "//cdn1.ivivu.com/iVivu/2023/04/07/19/1-1-.webp?o=jpg", "Caption": "", "Order": 2 }], "RoomDescription": "", "BedSummaryDisplays": ["1 King", "2 đơn"], "BedTypes": null, "BedSummaryDisplaysMobile": ["1 Giường King", "2 Giường đơn"], "Facilitys": [{ "Id": 644947, "Name": "Wifi miễn phí", "Description": null }, { "Id": 644948, "Name": "Trà/Cà phê miễn phí", "Description": null }], "RoomClassFacility": null, "Direction": "vườn", "Acreage": "29", "AllowSmoke": false, "BathTub": false, "Pools": false, "Shower": true, "WindowOpen": false, "Window": true, "Balcony": false, "NoneWindow": false, "BathTubShower": false, "Maylanh": true, "BathTubJacuz": false, "Toilet": 1, "Hongam": false }, "MaxAdults": 3, "MaxPax": 4, "MaxPaxNotAdult": 1, "ChildInfant": 0, "ChildUseResidue": 0, "ChildUseResidue2": 0, "ChildUseAirportTransfer": 0, "AdultUseAirportTransfer": 0, "MaxChils": 2, "IncludeAdults": 2, "ExtraBedForAdult": 0, "ExtraBedForChild": 0, "ExtraBedForChild2": 0, "ChildWithoutNo": 0, "ChildWithoutNo2": 0, "ChildChargeAdult": 0, "AdultWithoutNo": 0, "AllotmentAvailable": 0, "AllotmentBlocked": 0, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "Note": "", "PromotionInclusions": "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)\nXe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "HotelFee": 0, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "Isshowprices": 1, "DataFromERP": true, "BlackOut": false, "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "JsonData": null }], "MealTypeRates": [{ "guidId": "78084_3f65f204-34b8-4934-8c7f-052674086405", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1242000.0, "PriceAvgPlusNet": 1080000.0, "PriceAvgPlusNetStr": "1.080.000", "PriceAvgMinPriceStr": "1.242.000", "PriceAvgPlusOTA": 1458000.0, "PriceAvgPlusTAStr": "1.242.000", "PriceAvgPlusTotalTA": 1242000.0, "PriceAvgPlusOTAStr": "1.458.000", "PriceAvgDefaultNet": 1080000.0, "PriceAvgDefaultNetStr": "1.080.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1242000.0, "PriceAvgDefaultOTA": 1458000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_d06e2f5e-ebd1-43e7-a79d-9857f138a33a", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1357000.0, "PriceAvgPlusNet": 1180000.0, "PriceAvgPlusNetStr": "1.180.000", "PriceAvgMinPriceStr": "1.357.000", "PriceAvgPlusOTA": 1357000.0, "PriceAvgPlusTAStr": "1.357.000", "PriceAvgPlusTotalTA": 1357000.0, "PriceAvgPlusOTAStr": "1.357.000", "PriceAvgDefaultNet": 1180000.0, "PriceAvgDefaultNetStr": "1.180.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e1.357.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e1.357.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1180000.00, "Penalty_Val_OTA": 1357000.00, "Penalty_Val_TA": 1357000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1180000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1180000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1180000.0,\"PriceRoomOta\":1357000.0,\"PriceRoomTa\":1357000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1357000.0, "PriceAvgDefaultOTA": 1357000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_89e54339-1d05-4234-801c-500cfa55615d", "RoomId": 78084, "RoomName": "Superior Room", "Code": "HB", "Name": "Gồm ăn sáng + bữa ăn trưa hoặc tối", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2024000.0, "PriceAvgPlusNet": 1760000.0, "PriceAvgPlusNetStr": "1.760.000", "PriceAvgMinPriceStr": "2.024.000", "PriceAvgPlusOTA": 2024000.0, "PriceAvgPlusTAStr": "2.024.000", "PriceAvgPlusTotalTA": 2024000.0, "PriceAvgPlusOTAStr": "2.024.000", "PriceAvgDefaultNet": 1760000.0, "PriceAvgDefaultNetStr": "1.760.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.024.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.024.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1760000.00, "Penalty_Val_OTA": 2024000.00, "Penalty_Val_TA": 2024000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1760000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1760000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1760000.0,\"PriceRoomOta\":2024000.0,\"PriceRoomTa\":2024000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"HB\",\"MealName\":\"HalfBoard\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2024000.0, "PriceAvgDefaultOTA": 2024000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_18b8cfdf-efbd-4218-a06a-af9fedc4ddbb", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + 01 ngày vui chơi Vinpearl Safari (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2599000.0, "PriceAvgPlusNet": 2260000.0, "PriceAvgPlusNetStr": "2.260.000", "PriceAvgMinPriceStr": "2.599.000", "PriceAvgPlusOTA": 2599000.0, "PriceAvgPlusTAStr": "2.599.000", "PriceAvgPlusTotalTA": 2599000.0, "PriceAvgPlusOTAStr": "2.599.000", "PriceAvgDefaultNet": 2260000.0, "PriceAvgDefaultNetStr": "2.260.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.599.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "Xe VinBus đưa đón Vinpearl Safari"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.599.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2260000.00, "Penalty_Val_OTA": 2599000.00, "Penalty_Val_TA": 2599000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31716,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2260000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2260000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2260000.0,\"PriceRoomOta\":2599000.0,\"PriceRoomTa\":2599000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + 01 ngày vui chơi Vinpearl Safari (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2599000.0, "PriceAvgDefaultOTA": 2599000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_237c5a1d-8758-43b4-9afb-0cdbfc0bfb9e", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + 01 ngày vui chơi VinWonders (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 3174000.0, "PriceAvgPlusNet": 2760000.0, "PriceAvgPlusNetStr": "2.760.000", "PriceAvgMinPriceStr": "3.174.000", "PriceAvgPlusOTA": 3174000.0, "PriceAvgPlusTAStr": "3.174.000", "PriceAvgPlusTotalTA": 3174000.0, "PriceAvgPlusOTAStr": "3.174.000", "PriceAvgDefaultNet": 2760000.0, "PriceAvgDefaultNetStr": "2.760.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.174.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)", "Xe VinBus đưa đón VinWonders"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.174.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2760000.00, "Penalty_Val_OTA": 3174000.00, "Penalty_Val_TA": 3174000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31714,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2760000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2760000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2760000.0,\"PriceRoomOta\":3174000.0,\"PriceRoomTa\":3174000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + 01 ngày vui chơi VinWonders (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 3174000.0, "PriceAvgDefaultOTA": 3174000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_4063c137-453e-4d28-8e04-fb9cb459527e", "RoomId": 78084, "RoomName": "Superior Room", "Code": "CUS", "Name": "Gồm ăn sáng + Vui chơi VinWonders \u0026 Vinpearl Safari (*)", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 3910000.0, "PriceAvgPlusNet": 3400000.0, "PriceAvgPlusNetStr": "3.400.000", "PriceAvgMinPriceStr": "3.910.000", "PriceAvgPlusOTA": 3910000.0, "PriceAvgPlusTAStr": "3.910.000", "PriceAvgPlusTotalTA": 3910000.0, "PriceAvgPlusOTAStr": "3.910.000", "PriceAvgDefaultNet": 3400000.0, "PriceAvgDefaultNetStr": "3.400.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.910.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)\r", "(*) Trẻ từ 4-11 tuổi cao trên 1m39 có phụ thu thêm", "Xe VinBus đưa đón VinWonders \u0026 Vinpearl Safari"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e3.910.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 3400000.00, "Penalty_Val_OTA": 3910000.00, "Penalty_Val_TA": 3910000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":3400000.0,\"CompulsoryRate\":0.0,\"BaseRate\":3400000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":3400000.0,\"PriceRoomOta\":3910000.0,\"PriceRoomTa\":3910000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"CUS\",\"MealName\":\"Custom\",\"Note\":\"Gồm ăn sáng + Vui chơi VinWonders \u0026 Vinpearl Safari (*)\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": false, "IsShowMoreOrgin": false, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 3910000.0, "PriceAvgDefaultOTA": 3910000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, { "guidId": "78084_a12567d8-3335-4d9c-8585-e6a2832f3a6d", "RoomId": 78084, "RoomName": "Superior Room", "Code": "FB", "Name": "Gồm 3 bữa ăn", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 2691000.0, "PriceAvgPlusNet": 2340000.0, "PriceAvgPlusNetStr": "2.340.000", "PriceAvgMinPriceStr": "2.691.000", "PriceAvgPlusOTA": 2691000.0, "PriceAvgPlusTAStr": "2.691.000", "PriceAvgPlusTotalTA": 2691000.0, "PriceAvgPlusOTAStr": "2.691.000", "PriceAvgDefaultNet": 2340000.0, "PriceAvgDefaultNetStr": "2.340.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.691.000 VND\u003c/b\u003e\u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Ưu Đãi iVIVU", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e\u003cb\u003e- Sau 12:00 PM ngày T3, 13-08-2024\u003c/b\u003e   \u003cb\u003e\u003c/b\u003e sẽ bị tính phí là: \u003cb class=\u0027vcolor-info\u0027\u003e2.691.000 VND\u003c/b\u003e\u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 2340000.00, "Penalty_Val_OTA": 2691000.00, "Penalty_Val_TA": 2691000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 1 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31712,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":2340000.0,\"CompulsoryRate\":0.0,\"BaseRate\":2340000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":2340000.0,\"PriceRoomOta\":2691000.0,\"PriceRoomTa\":2691000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"FB\",\"MealName\":\"FullBoard\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "Bảng giá 2024", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 2691000.0, "PriceAvgDefaultOTA": 2691000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }], "TotalMealTypeShowed": 4, "ExcludeVAT": 0, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenAgoda": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "HotelCheckDetailTokenInternal": "SXU7SOooOWBtjA3GAQ+UYjWawAeXqnplnWpZ9TUfF5fHemOY/kfoyg2v72hjQnA6TLqf3kLOmykTe35279zGzZDI2kHAt5NL/5gCLea8sdY2im+eihFxYQhkHVKqVNlQk6nYNgmQX4c=", "ReqHBED": null, "TotalPriceHadDiscountTa": 1242000, "TotalPriceHadDiscountOta": 1458000, "Status": "RQ", "OrderStatus": 1, "Supplier": "Internal", "SupplierCode": "IVIVU", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "TotalPrice": 1080000.0, "SuggestRate": 0, "TotalRoom": 1, "TotalAlloment": 0, "AvailableNo": 0, "PercentPaxRoom": 50, "BlockNo": 0, "MSG": "", "MSGCode": "", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "RoomType": "phòng", "ListObjRoomClass": null, "StayPeriod": "", "StayPeriodRangeDates": null, "ImageEAN": null, "RoomsRequest": [{ "Adults": 1, "Childs": 0, "ChildsAge": [] }], "GrossProfitOnline": 0, "RequestObj": null, "BedTypes": null, "MaxPax": 0, "MaxAdult": 0, "MaxChild": 0, "View": null, "SquareMeters": null, "Description": null, "BathRoom": null, "IsSmoking": null, "RoomClassFacility": null, "DescriptionTaxFee": null, "CityID": 0, "CountryID": "VN", "AllomentBreak": null, "IsPromotionAllotment": false, "PaymentPeriod": "\/Date(1730393940000)\/", "JsonData": "{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}", "IsFenced": false, "time1": 0, "time2": 0, "time3": 0, "time4": 0 }, "_totalroom": 1, "day": 1, "sodem": 1, "MeaiTypeSelected": { "guidId": "78084_45ca0499-a709-4241-9522-e325c42a54e5", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1242000.0, "PriceAvgPlusNet": 1080000.0, "PriceAvgPlusNetStr": "1.080.000", "PriceAvgMinPriceStr": "1.242.000", "PriceAvgPlusOTA": 1458000.0, "PriceAvgPlusTAStr": "1.242.000", "PriceAvgPlusTotalTA": 1242000.0, "PriceAvgPlusOTAStr": "1.458.000", "PriceAvgDefaultNet": 1080000.0, "PriceAvgDefaultNetStr": "1.080.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1242000.0, "PriceAvgDefaultOTA": 1458000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 }, "TotalSupplementPlus": 0, "prices": 1242000.0, "totalprices": "CQAAAB+LCAAAAAAABAAzNDIxMjAw0DMAAO8vilUJAAAA", "vnd": "VND", "rechecprice": "ok", "SupplementsPlus": [], "_datavalue": "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", "datahotel": { "HotelId": 648218, "HotelName": "Khách sạn Wyndham Garden Grandworld Phú Quốc", "MinPrice": 1242000, "MaxPrice": 1242000, "District": "Phú Quốc", "Address": "Bãi Dài, Gành Dầu, Phú Quốc, tỉnh Kiên Giang", "Description": "\u003cp\u003e\u003cstrong\u003eWyndham Garden Grandworld Ph\u0026uacute; Quốc\u003c/strong\u003e\u0026nbsp;l\u0026agrave; 1 trong những\u0026nbsp;kh\u0026aacute;ch sạn mới nhất của chuỗi kh\u0026aacute;ch sạn Vinpearl\u0026nbsp;Ph\u0026uacute; Quốc. Với thiết kế tối giản độc đ\u0026aacute;o, mới mẻ - thiết kế tập trung v\u0026agrave;o những đường n\u0026eacute;t đơn giản, giảm thiểu tối đa c\u0026aacute;c đồ nội thất. Mọi chi tiết, vật dụng trong ph\u0026ograve;ng đều c\u0026oacute; \u0026yacute; nghĩa, c\u0026ocirc;ng năng nhất định nhằm tạo ra một kh\u0026ocirc;ng gian h\u0026agrave;i h\u0026ograve;a v\u0026agrave; th\u0026ocirc;ng tho\u0026aacute;ng nhất.\u0026nbsp;Kh\u0026aacute;ch sạn sở hữu đầy đủ những tiện \u0026iacute;ch của một kh\u0026aacute;ch sạn cao cấp như: bể bơi, sảnh đ\u0026oacute;n tiếp, lounge, nh\u0026agrave; h\u0026agrave;ng buffet, ph\u0026ograve;ng họp\u0026hellip; Đồng thời nằm giữa \u0026ldquo;tứ trụ giải tr\u0026iacute;\u0026rdquo; của Ph\u0026uacute; Quốc United Center, kế thừa c\u0026aacute;c dịch vụ giải tr\u0026iacute; đẳng cấp bao gồm: Khu giải tr\u0026iacute; c\u0026ocirc;ng nghệ cao Corona, vườn th\u0026uacute; mở b\u0026aacute;n hoang d\u0026atilde; Vinpearl Safari, c\u0026ocirc;ng vi\u0026ecirc;n chủ đề VinWonders, s\u0026acirc;n golf 18 lỗ Vinpearl Golf.\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eSố lượng:\u003c/strong\u003e 921 ph\u0026ograve;ng.\u003c/p\u003e", "Latitude": 10.32389895, "Longitude": 103.85619256, "Rating": 40, "CountryCode": "VN", "CityId": 0, "RegionId": 114181, "Avatar": "https://cdn1.ivivu.com/images/2023/05/31/11/wggpq-exterior-6-cr___3k8hl6____horizontal.webp?o=jpg", "WotifCode": "V912462", "PhoneNumber": "02973612999, 0938097904", "MarkUpTA": 10, "MarkUpOTA": 5, "Code": "wyndham-garden-grandworld-phu-quoc", "Url": "/khach-san-phu-quoc/wyndham-garden-grandworld-phu-quoc", "ExpTips": "\u003cp\u003e\u003cstrong\u003eTổ hợp Mua sắm Grand World\u003c/strong\u003e\u003c/p\u003e\r\n\u003cp\u003eNằm trong khu phức hợp nghỉ dưỡng v\u0026agrave; giải tr\u0026iacute; Corona \u0026amp; Ph\u0026uacute; Quốc United Center, với quy m\u0026ocirc; 85 hecta, sở hữu nhiều c\u0026ocirc;ng tr\u0026igrave;nh kiến tr\u0026uacute;c nổi bật v\u0026agrave; h\u0026ugrave;ng vĩ với kiến tr\u0026uacute;c tinh xảo, những con phố kinh doanh nhộn nhịp, phong c\u0026aacute;ch. Nơi đ\u0026acirc;y c\u0026ograve;n diễn ra h\u0026agrave;ng trăm sự kiện v\u0026agrave; bữa tiệc ho\u0026agrave;nh tr\u0026aacute;ng, t\u0026aacute;i hiện một loạt c\u0026aacute;c khu giải tr\u0026iacute; s\u0026ocirc;i động như Venice, Thượng Hải, Chợ Đ\u0026ecirc;m v\u0026agrave; nhiều hơn nữa. Tất cả hoạt động kh\u0026ocirc;ng ngừng nghỉ 24 giờ một ng\u0026agrave;y, 365 ng\u0026agrave;y một năm, tạo n\u0026ecirc;n một m\u0026ocirc;i trường lễ hội li\u0026ecirc;n tục v\u0026agrave; bất tận đầy s\u0026ocirc;i động, tương tự như những thị trấn kh\u0026ocirc;ng ngủ nổi tiếng khắp thế giới.\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eTổ hợp Giải tr\u0026iacute; Corona\u003c/strong\u003e\u003c/p\u003e\r\n\u003cp\u003eS\u0026ograve;ng b\u0026agrave;i\u0026nbsp;đầu ti\u0026ecirc;n v\u0026agrave; duy nhất m\u0026agrave; c\u0026ocirc;ng d\u0026acirc;n Việt Nam c\u0026oacute; thể hợp ph\u0026aacute;p v\u0026agrave;o chơi, tự h\u0026agrave;o l\u0026agrave;\u0026nbsp;tổ hợp\u0026nbsp;nghỉ dưỡng \u0026ndash; giải tr\u0026iacute; sang trọng Việt Nam v\u0026agrave; Đ\u0026ocirc;ng Nam \u0026Aacute;.\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eC\u0026ocirc;ng vi\u0026ecirc;n chủ đề VinWonders\u003c/strong\u003e\u003c/p\u003e\r\n\u003cp\u003eVinWonders l\u0026agrave; c\u0026ocirc;ng vi\u0026ecirc;n giải tr\u0026iacute; đầu ti\u0026ecirc;n tại Việt Nam v\u0026agrave; l\u0026agrave; lớn nhất ở Đ\u0026ocirc;ng Nam \u0026Aacute;. Bao gồm 6 khu vực giải tr\u0026iacute; theo chủ đề độc đ\u0026aacute;o, c\u0026oacute; sức chứa 20,000 kh\u0026aacute;ch/ng\u0026agrave;y v\u0026agrave; hơn 60 tr\u0026ograve; chơi đẳng cấp thế giới. Bể c\u0026aacute; kh\u0026ocirc;ng chứa kim loại với diện t\u0026iacute;ch 15,000 m\u0026eacute;t vu\u0026ocirc;ng. Top 5 bể c\u0026aacute; lớn nhất thế giới, tầm nh\u0026igrave;n v\u0026ocirc; cực mới với k\u0026iacute;nh cường lực phục hồi 200 m\u0026eacute;t vu\u0026ocirc;ng. T\u0026agrave;u lượn si\u0026ecirc;u tốc c\u0026oacute; vận tốc nhanh nhất Việt Nam 95 km/h.\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eVườn th\u0026uacute; Vinpearl Safari\u003c/strong\u003e\u003c/p\u003e\r\n\u003cp\u003eC\u0026ocirc;ng vi\u0026ecirc;n chăm s\u0026oacute;c v\u0026agrave; bảo tồn động vật b\u0026aacute;n hoang d\u0026atilde; đầu ti\u0026ecirc;n v\u0026agrave; lớn nhất tại Việt Nam, được x\u0026acirc;y dựng theo ti\u0026ecirc;u chuẩn Safari quốc tế v\u0026agrave; hơn thế nữa. Vinpearl Safari Ph\u0026uacute; Quốc l\u0026agrave; \u0026ldquo;ng\u0026ocirc;i nh\u0026agrave; chung\u0026rdquo; của hơn 3000 c\u0026aacute; thể, thuộc 150 lo\u0026agrave;i động vật kh\u0026aacute;c nhau từ Ch\u0026acirc;u \u0026Acirc;u, Ch\u0026acirc;u Mỹ, Nam Phi, v.v. Trong c\u0026ocirc;ng vi\u0026ecirc;n n\u0026agrave;y, c\u0026aacute;c lo\u0026agrave;i động vật được nu\u0026ocirc;i dưỡng trong điều kiện tốt nhất theo ti\u0026ecirc;u chuẩn quốc tế.\u003c/p\u003e", "ExpLink": "", "IsShowPrice": 1, "ComboName": null, "ChildAgeFrom": 4, "ChildAgeTo": 11, "NoteForAgent": "\u003cp\u003e\u003cstrong\u003eTham khảo\u0026nbsp;\u003ca href=\"https://drive.google.com/file/d/1BhgbOcim_P_1i4gPmDp18kmeT-pUz3y_\" target=\"_blank\"\u003eSơ Đồ Vị Tr\u0026iacute; - Vinpearl Ph\u0026uacute; Quốc\u003c/a\u003e |\u0026nbsp;\u003ca href=\"https://drive.google.com/file/d/1kM-zbl32ObFuHl_Gp5Ga5oXouARZVM0R/view?usp=share_link\" target=\"_blank\"\u003eTr\u0026ograve; Chơi \u0026amp; Sơ Đồ VinWonders\u003c/a\u003e |\u0026nbsp;\u003ca href=\"https://drive.google.com/file/d/1ltWHBI55Qtqw-W0fiZGbNgR_Kkfyhmk-/view?usp=share_link\" target=\"_blank\"\u003eSơ Đồ Vinpearl Safari\u003c/a\u003e\u003c/strong\u003e\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003eGiường phụ Kh\u0026aacute;ch sạn \u0026iacute;t,\u003c/strong\u003e team kiểm tra kỹ với Resa nha.\u003c/p\u003e\r\n\u003cp\u003e\u003cstrong\u003e\u003ca href=\"https://drive.google.com/file/d/15YRx5Lo2bK_x-u96qLp1KwCr-rHxjwlj/view\" target=\"_blank\"\u003eFlyer chương tr\u0026igrave;nh \"Hải Thanh \u0026Acirc;m\"\u003c/a\u003e\u003c/strong\u003e\u003c/p\u003e", "CheckinTime": { "Hours": 14, "Minutes": 0, "Seconds": 0, "Milliseconds": 0, "Ticks": 504000000000, "Days": 0, "TotalDays": 0.58333333333333326, "TotalHours": 14, "TotalMilliseconds": 50400000, "TotalMinutes": 840, "TotalSeconds": 50400 }, "CheckoutTime": { "Hours": 12, "Minutes": 0, "Seconds": 0, "Milliseconds": 0, "Ticks": 432000000000, "Days": 0, "TotalDays": 0.5, "TotalHours": 12, "TotalMilliseconds": 43200000, "TotalMinutes": 720, "TotalSeconds": 43200 }, "AvgPoint": 9.5, "ExcludeVat": 0 }, "Title": "Index", "IsAgent": false })
        }, 1000)
        // isRequest = true => yêu cầu đặt phòng :::::: false => thanh toán ngay
        const _isRequestPhase = (_alStatus != null && _alStatus == "RQ") || _roomClassContracting.Supplier == "B2B";
        var paymentObject = {
            isRequestPhase: _isRequestPhase,
            alStatus: _alStatus,
            checkIn: '2024-08-15',
            checkOut: '2024-08-16',
            sodem: '1',
            mealType: { "guidId": "78084_63fecc34-efdc-4763-89d5-643eaa682b51", "RoomId": 78084, "RoomName": "Superior Room", "Code": "BB", "Name": "Gồm ăn sáng", "Adults": 2, "SuppType": "MealPlan", "ChargeType": "Per Night", "Optional": "", "PriceAvgPlusTA": 1242000.0, "PriceAvgPlusNet": 1080000.0, "PriceAvgPlusNetStr": "1.080.000", "PriceAvgMinPriceStr": "1.242.000", "PriceAvgPlusOTA": 1458000.0, "PriceAvgPlusTAStr": "1.242.000", "PriceAvgPlusTotalTA": 1242000.0, "PriceAvgPlusOTAStr": "1.458.000", "PriceAvgDefaultNet": 1080000.0, "PriceAvgDefaultNetStr": "1.080.000", "TotalTaxAndServiceFee": 0, "PriceAvgPlusCombo": 0, "PriceAvgPlusComboStr": null, "PriceAvgPlusComboTA": 0, "PriceAvgPlusComboTAStr": null, "PriceAvgPlusComboOTA": 0, "PriceAvgPlusComboOTAStr": null, "SuggestRate": 0, "SalesTax": 0, "HotelOccupancyTax": 0, "SalesTaxStr": "0", "HotelOccupancyTaxStr": "0", "TotalTaxAndServiceFeeStr": null, "PriceNotTaxAndServiceTAStr": null, "PriceNotTaxAndServiceOTAStr": null, "PriceDiscount": 0, "PriceOrginDiscountStr": null, "Note": "", "Notes": [], "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "ExtraBedNoteAdult": "", "ExtraBedNoteChild": "", "CompulsoryNote": "", "CompulsoryNoteP": "", "AirportTransferNoteP": "", "CompulsoryAdultWithoutNoNote": "", "CompulsoryChildWithoutNoNote": "", "PromotionNote": "Giảm 20% - Ưu Đãi Độc Quyền", "PromotionInclusions": ["Đưa đón sân bay đến Khách sạn theo lịch trình của VinBus (Khách hàng sẽ được VinBus đưa đón đến trạm T2 GrandWorld, sau đó sẽ có xe đưa đón của KS)", "Xe đưa đón từ \u0026 đến trạm chờ Grandworld T2 (vui lòng liên hệ đặt chỗ với lễ tân)"], "Status": "RQ", "Penaltys": [{ "Penalty_Date": "2024-08-14", "PenaltyDateParse": "\/Date(1723482000000)\/", "PenaltyDateParseStr": "T3, 13-08-2024", "PenaltyShortDateStr": "13-08", "IsPenaltyFree": false, "PenaltyDescription": "\u003cp\u003e- Không hoàn huỷ hoặc thay đổi \u003c/p\u003e", "Penalty_Type": 2, "Penalty_Val": 1080000.00, "Penalty_Val_OTA": 1242000.00, "Penalty_Val_TA": 1242000.00, "Penalty_Val_Amount": 0, "Penalty_Val_AmountTa": 0, "Penalty_Val_AmountOta": 0, "Status": 0 }], "CancelAllowBooking": false, "NoteForCancelPolicy": "", "PaymentPolicy": "{\"PaymentType\":1,\"PaymentDay\":-8,\"PaymentDate\":\"2024-08-14\"}", "ExDataJson": "{\"PriceBreakDown\":[{\"AgreementID\":31962,\"CurrencyCode\":\"VND\",\"DailyRateInfo\":1080000.0,\"CompulsoryRate\":0.0,\"BaseRate\":1080000.0,\"DateOfRate\":\"2024-08-15\",\"RateType\":\"Room\",\"RoomCategory\":1,\"RoomClsLocationID\":1,\"RoomID\":78084,\"PriceHadDiscount\":1080000.0,\"PriceRoomOta\":1458000.0,\"PriceRoomTa\":1242000.0,\"ServiceID\":10141127,\"SupplierCode\":\"IVIVU\",\"MealCode\":\"BB\",\"MealName\":\"Bed \u0026 Breakfast\",\"Note\":\"\",\"SupplementRates\":[],\"dayOfService\":null}],\"MerJsonData\":{\"IsB2B\":false,\"B2BPartnerEmail\":\"\"}}", "IsPackageRate": false, "IsHoliday": false, "IsVoucher": false, "IsInternalRate": false, "IsFlashSale": false, "IsSuggest": false, "PaymentPeriod": "\/Date(1730393940000)\/", "IsComboFlight": false, "IsAllowBooking": false, "MSG": "", "MSGCode": "", "HotelFee": 0, "HotelFeeStr": "0", "Supplier": "Internal", "NoteForSupplier": "PROMOTION DÀNH CHO ĐỐI TÁC IVIVU.COM", "IsBrief": false, "IsShowMore": true, "IsShowMoreOrgin": true, "TotalRoom": 1, "IsBestPrice": false, "HotelRoomReservationRequest": null, "HotelRoomHBedReservationRequest": null, "HotelCheckDetailTokenVinHms": null, "HotelCheckDetailTokenInternal": null, "HotelCheckDetailTokenAgoda": null, "GrossProfitOnline": 0, "DescriptionTaxFee": null, "HotelCheckPriceTokenSMD": null, "HotelCheckPriceTokenHLS": null, "BedTypes": null, "CustomerSessionId": "54c16cc300c35adecfc4b649b807f269", "PriceAvgDefaultTA": 1242000.0, "PriceAvgDefaultOTA": 1458000.0, "ExtraBedAndGalaDinerList": [], "Isshowprices": 1, "IsshowpricesOTA": true, "AvailableNo": 0, "BlockNo": 0, "IsShowAllotment": false, "SummaryFilter": "Giá 1 đêm x 1 phòng cho 1 người lớn", "AllomentBreak": null, "IsPromotionAllotment": false, "SortOrder": 0 },
            supplementsPlus: [],
            totalNight: '1',
            totalAdult: '1',
            totalChild: '0',
            totalRoom: '1',
            roomClassContracting: _roomClassContracting,
            paymentStepStart: 1,
            paymentStepEnd: _isRequestPhase ? 2 : 3,
            paymentStepTitle: _isRequestPhase ? "Yêu cầu đặt phòng" : "Xác nhận đặt phòng",
            stickyButtonLabel: _isRequestPhase ? "Tiếp tục" : "Xác nhận",
            gender: '',
            isStaff: _idLogin && _idLogin.toString() != "0",
            consultantFrom: ""
        };

    </script>

</body>

</html>