<?php include 'inc/head.php'; ?>
<!-- header inc -->
<style>
  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 6px;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 6px;
  }

  .swiper {
    margin-left: auto;
    margin-right: auto;
  }

  /* custom swiper  */

  .swiper-pagination-bullet-active {
    background-color: white !important;
  }

  .swiper-button-prev,
  .swiper-button-next {
    width: 50px !important;
    height: 50px !important;
    padding: 22px;
    border-radius: 30px;
    color: white !important;
    transition: all 0.3s ease-in-out;
  }

  .swiper-button-prev:hover,
  .swiper-button-next:hover {
    background-color: #003c71;
  }

  .swiper-tablet-pc {
    display: none;
  }

  .swiper-mobile {
    display: none;
  }

  @media screen and (min-width: 768px) {
    .swiper-tablet-pc {
      display: block;
    }

 


  }

  @media screen and (max-width: 767px) {
    .swiper-mobile {
      display: block;
    }

    .owl-carousel .haft-right {
      padding-left: unset !important;
    }
  }

  .mySwiperKsMobile.swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px;
    height: 300px;
  }

  .mySwiperKsMobile.swiper-slide img {
    display: block;
    width: 100%;
    border-radius: 6px !important;
  }

  .mySwiperKsMobile {
    overflow: initial !important;
  }
</style>

<body data-page="homepage" class="homePage">
  <noscript id="deferred-styles">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/ivivu_icons/ivivu_icons.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/daterangepicker.css?v=89.8">
    <link rel="stylesheet" type="text/css" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.carousel.min.css?v=89.8">
    <link rel="stylesheet" type="text/css"
      href="https://res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.theme.default.min.css?v=89.8">
    <link rel="stylesheet" type="text/css" href="https://res.ivivu.com/hotel/vendor/animate/animate.min.css">
  </noscript>

  <?php include 'inc/header.php' ?>
  <ul id="UserNotLogged" style="visibility: hidden; position: absolute;">

    <li class="btn-login-wrap">
      <btn type="button" class="btn btn-action btn-login-header" onclick="showLoginDialog()">Đăng nhập</btn>
    </li>
    <li class="register-text">Chưa có tài khoản? <span class="register-link" onclick="showRegisterDialog()">Đăng
        ký</span> ngay</li>
  </ul>


  <ul id="UserLogged" style="visibility: hidden; position: absolute;">
    <li class="visible-xs">
      <div class="member-header">
        <div class="member-header__avatar img-wrapper-mobile">
          <img class="img-circle" src="">
        </div>
        <div class="member-header__info">
          <p class="no-margin name max username-header"></p>
          <p class="no-margin description max userMail-header"></p>
        </div>
      </div>
    </li>
    <li class="divider visible-xs" style="margin-top:0px;"></li>
    <li><a href="https://member.ivivu.com/dashboard/trips">Kỳ nghỉ của tôi</a></li>
    <li><a href="https://member.ivivu.com/dashboard/voucher">Voucher của tôi</a></li>

    <li>
      <a class="col-xs-12 point-menu-padding equal-row" href="https://member.ivivu.com/dashboard/points">
        <span class="col-xs-6">iVIVUPoint</span>
        <span class="col-xs-6 point-text">
          <span class="userPoint-header"></span> điểm
        </span>
      </a>
    </li>
    <li><a href="https://member.ivivu.com/dashboard/profile">Hồ sơ của tôi</a></li>
    <li><a href="https://member.ivivu.com/dashboard/my-review">Nhận xét của tôi</a></li>
    <div class="col-xs-12 logout-btn-wrap">
      <button class="col-xs-12 logout-btn" type="button" onclick="logoutUser();">Đăng xuất</button>
    </div>
  </ul>

  <!-- END HEADER -->
  <!-- BEGIN BODY -->


  <!-- BEGIN HOME SLIDER  -->


  <!-- END HOME SLIDER -->
  <!-- BEGIN HOME SEARCH -->
  <?php include 'inc/form_ks.php' ?>
  <!-- END HOME SEARCH -->
  <div class="container mainContainer">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mainContent">

      <div class="col-xs-12 no-padding v-margin-top-30">
        <div class="col-xs-12 no-padding heading">
          <h2 class="heading__title">Ưu đãi đặc biệt dành cho bạn</h2>
          <p class="heading__description">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
        </div>
        <div class="col-xs-12 no-padding promotion-cards swiper-tablet-pc">
          <div class=" item-placeholder-loading item-placeholder-loading__flash"
            style="border-radius: 6px; height: 0px; display: none;">
          </div>
          <div class="col-xs-12 no-padding ">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://cdn1.ivivu.com/images/2024/07/12/11/HOLIDAYINN_HT-sd_3i1zpz_.webp" alt="">
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://cdn1.ivivu.com/images/2024/08/01/13/TheOceanResortbyFusion_QN-sd_i1plnj_.webp"
                      alt="">
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://cdn1.ivivu.com/images/2024/08/01/13/Zannier-sd_8neutr_.webp" alt="">
                  </a>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 no-padding promotion-cards swiper-mobile">
          <div class=" item-placeholder-loading item-placeholder-loading__flash"
            style="border-radius: 6px; height: 0px; display: none;">
          </div>
          <div class="col-xs-12 no-padding owl-carousel owl-carousel-promotion owl-theme owl-loaded owl-drag">
            <div class="swiper mySwiperKsMobile">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="">
                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                  </a>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>


      </div>

      <div class="col-xs-12 no-padding v-margin-top-30 v-margin-bottom-30">
        <div class="col-xs-12 no-padding heading">
          <h2 class="heading__title">Điểm đến yêu thích trong nước</h2>
          <p class="heading__description">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
        </div>
        <!--<div class="headLineDivider"></div>-->
        <div class="col-xs-12 no-padding">
          <div class="grid__container grid__container--popular super-cards">

            <div class="grid__item grid__item--1">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuquoc-show.webp');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-phu-quoc" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Phú Quốc</p>

                      <p class="description hidden-xs"> 626 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--2">
              <div class="col-xs-12 super-card card-auto-height"
                style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/vungtau-show.webp');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-vung-tau" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Vũng Tàu</p>

                      <p class="description hidden-xs"> 612 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--3">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/da-lat.png');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-da-lat" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Đà Lạt</p>

                      <p class="description hidden-xs"> 741 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--4">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/quynhon-show.webp');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-quy-nhon" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Quy Nhơn</p>

                      <p class="description hidden-xs"> 77 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--5">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phanthiet-show.webp');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-phan-thiet" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Phan Thiết</p>

                      <p class="description hidden-xs"> 293 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--6">
              <div class="col-xs-12 super-card card-auto-height"
                style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/nha-trang.jpg');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-nha-trang" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Nha Trang</p>

                      <p class="description hidden-xs"> 728 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--7">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2024/05/09/16/da-nang.png');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-da-nang" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Đà Nẵng</p>

                      <p class="description hidden-xs"> 958 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="grid__item grid__item--8">
              <div class="col-xs-12 super-card "
                style="background-image: url('//cdn1.ivivu.com/iVivu/2023/03/02/10/phuyen-show.webp');">
                <!--style="background-image: url('img');"-->
                <a href="/khach-san-tinh-phu-yen" target="_blank">
                  <div class="col-xs-12 card-bg">
                    <div class="info">
                      <p class="title">Phú Yên</p>

                      <p class="description hidden-xs"> 15 khách sạn</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

   

      <!-- END MOST INTERESTING HOTELS -->
      <!-- BEGIN PLACE POPULAR -->
      <!-- END PLACE POPULAR -->
      <!--BEGIN PREDICT GUEST-->

      <style>
        .title-predict {
          font-size: 14px;
          font-weight: bold;
          padding: 4px 8px;
          background-color: #DDDDDD;
        }

        .item-place-predict {
          font-size: 14px;
          font-weight: bold;
          padding: 4px 8px;
        }
      </style>
      <!--BEGIN PREDICT GUEST-->



      <!-- Modal from button Lấy giá tốt -->




      <div class="modal fade findDealForCustomerModal" id="findDealForCustomerModal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" style="padding-left:15px; text-transform: uppercase; ">
                ĐẶT PHÒNG ĐOÀN
                <i class="glyphicon glyphicon-info-sign fixGlyphicon vcolor-primary hidden-sm hidden-md hidden-lg"
                  style="font-size:14px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="iVIVU.com sẽ tìm kiếm những deal tốt nhất (khách sạn giá tốt nhất và tour giá tốt nhất) và
                            gửi đến địa chỉ mail của khách hàng dựa vào thông tin mà khách hàng cung cấp."></i>
              </h4>
            </div>
            <div class="modal-body">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 findDealForCustomerHeading vspacingbottom15">
                <p class="hidden-xs">
                  Khi đặt phòng theo đoàn với iVIVU.com, bạn sẽ có được <b>khách sạn phù hợp nhất</b> với <b>giá tốt
                    nhất</b> mà <b>không phải tốn thời gian tìm kiếm</b>.
                </p>


              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vremoveSpacing">
                  <div class="form-group vspacingbottom25">
                    <label class="control-label">
                      <i class="glyphicon glyphicon-home hidden"></i> Yêu cầu
                    </label>
                    <div class="findDealForCustomerStyleCheckbox">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <textarea id="typehotel" name="typehotel" class="form-control" rows="3"
                            style="resize: vertical;"
                            placeholder="Địa điểm, thời gian đặt phòng, số lượng thành viên của đoàn..."></textarea>
                        </div>
                      </div>
                    </div>


                  </div>

                  <div class="form-group vspacingbottom15">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 vspacingbottom15">
                        <div style="position:relative;">
                          <label for="findDealForCustomerPhone" class="control-label"><i
                              class="glyphicon glyphicon glyphicon-earphone hidden"></i> Điện thoại </label>

                          <div class="div-phone">
                            <input type="tel" class="form-control" id="findDealForCustomerPhone" name="phone"
                              placeholder="Số điện thoại"
                              onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="div-email" style="position:relative;">
                          <label for="findDealForCustomerEmail" class="control-label">
                            <i class="glyphicon glyphicon-send hidden"></i> Email
                          </label>
                          <i class="vcolor-danger" style="font-size:28px;position: absolute;" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Bắt buộc nhập">*</i>
                          <div>
                            <input type="text" class="form-control" id="findDealForCustomerEmail" name="email"
                              placeholder="Địa chỉ email" maxlength="100">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--if have any error, set class has-error, if not, dont -->
                  <div class="alert alert-danger" role="alert" style="display:none">
                    <div class="pre-place" style="display:none">
                      <strong>
                        <i class="glyphicon glyphicon-warning-sign"></i>
                      </strong> Vui lòng nhập địa điểm.
                    </div>
                    <div class="pre-email">
                      <strong>
                        <i class="glyphicon glyphicon-warning-sign"></i>
                      </strong> Chưa nhập địa chỉ email hoặc địa chỉ email chưa đúng
                    </div>
                    <div class="pre-phone" style="display:none">
                      <strong>
                        <i class="glyphicon glyphicon-warning-sign"></i>
                      </strong> Vui lòng nhập số điện thoại.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vspacingbottom10">
                <div class="findDealForCustomerGuarantee hidden">
                  • iVIVU.com cam kết đảm bảo an toàn thông tin của quý khách hàng. <br>
                  • Quý khách hàng có thể yêu cầu ngưng dịch vụ tìm kiếm deal tốt nhất bất cứ lúc nào.
                </div>

                <button type="button" class="btn btn-warning btn-block btn-lg vbackground-warning"
                  id="findDealForCustomerButton"
                  onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'Đăng ký tìm kiếm deal', 'eventAction': 'Click', 'eventLabel': 'Đăng ký tìm kiếm deal' });">
                  Đặt phòng đoàn
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!--end modal from button lấy giá tốt-->
      <!--END PREDICT GUEST-->

    </div>
  </div>
  </div>
  <!-- END BODY -->
  <?php include 'inc/js.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper_ks_mobile = new Swiper(".mySwiperKsMobile", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <?php include 'inc/footer.php'; ?>