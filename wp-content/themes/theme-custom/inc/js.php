<!-- BEGIN JAVASCRIPT -->

<script src="https://res.ivivu.com/hotel/vendor/jquery-1.11.2.min.js"></script>
<script src="https://res.ivivu.com/hotel/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= site_url() ?>/public/js/moment.min.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/moment-with-locales.min.js?v=<?= time() ?>"></script>
<script src="https://res.ivivu.com/hotel/vendor/bootstrap.datetimepicker.min.js"></script>
<!-- <script
  src="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/js/bootstrap-datetimepicker.min.js"></script> -->

<script src="<?= site_url() ?>/public/js/jquery.cookie.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/jquery.mCustomScrollbar.min.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/gmap3.min.js?v=<?= time() ?>"></script>
<script
  src="//maps.google.com/maps/api/js?key=AIzaSyAPhx--mlOWGuog0IpbbE8DMvcXPBr5_W4&amp;sensor=false&amp;language=vi"></script>
<script src="https://res.ivivu.com/hotel/vendor/sweetalert/sweet-alert.min.js" type="text/javascript"></script>

<script src="<?= site_url() ?>/public/js/jquery.royalslider.min.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/owl.carousel.min.js?v=<?= time() ?>"></script><iframe
  allow="join-ad-interest-group" data-tagging-id="AW-952773342" data-load-time="1723100355618" height="0" width="0"
  src="https://td.doubleclick.net/td/rul/952773342?random=1723100355584&amp;cv=11&amp;fst=1723100355584&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4851v9103423562za200&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.ivivu.com%2F&amp;ref=https%3A%2F%2Fwww.ivivu.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=%C4%90%E1%BA%B7t%20ph%C3%B2ng%20kh%C3%A1ch%20s%E1%BA%A1n%20tr%E1%BB%B1c%20tuy%E1%BA%BFn%20gi%C3%A1%20r%E1%BA%BB%2C%20khuy%E1%BA%BFn%20m%C3%A3i%20%C4%91%E1%BA%BFn%2075%25&amp;currency_code=VND&amp;npa=0&amp;pscdl=noapi&amp;auid=639341284.1723099104&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.99%7CChromium%3B127.0.6533.99&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
  style="display: none; visibility: hidden;"></iframe>
<iframe id="_hjSafeContext_36147650" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank"
  style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
<script src="https://res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/min/daterangepicker-min.js"></script>
<script src="https://res.ivivu.com/hotel/vendor/tdatepicker/js/t-datepicker.min.js?v=3"></script>
<script src="https://res.ivivu.com/hotel/vendor/typeahead/min/typeahead-min.js"></script>
<script src="https://res.ivivu.com/hotel/js/publicHelper.js"></script>
<script src="https://res.ivivu.com/hotel/js/angular/angular.min.js"></script>
<script src="https://res.ivivu.com/hotel/js/angular/angular-route.min.js"></script>

<script>
  (function() {
    if (typeof window.CustomEvent === "function") {
      return false;
    }

    function CustomEvent(event, params) {
      params = params || {
        bubbles: false,
        cancelable: false,
        detail: undefined
      };
      var evt = document.createEvent("CustomEvent");
      evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
      return evt;
    }

    CustomEvent.prototype = window.Event.prototype;
    window.CustomEvent = CustomEvent;
  })();

  // Listen to the Initialized event
  window.addEventListener('LazyLoad::Initialized', function(e) {
    // Get the instance and puts it in the lazyLoadInstance variable
    lazyLoadInstance = e.detail.instance;
  }, false);

  // Set the lazyload options for async usage
  lazyLoadOptions = {
    /* your lazyload options */
  };
</script>
<script src="<?= site_url() ?>/public/js/lazyload.min.js?v=<?= time() ?>"></script>



<script src="<?= site_url() ?>/public/js/static.min.js?v=<?= time() ?>" type="text/javascript"></script>
<script src="<?= site_url() ?>/public/js/common.min.js?v=<?= time() ?>" type="text/javascript"></script>
<script src="<?= site_url() ?>/public/js/searchbox.min.js?v=<?= time() ?>" type="text/javascript"></script>
<script src="https://apis.google.com/js/api:client.js" gapi_processed="true"></script>
<script src="<?= site_url() ?>/public/js/member.min.js?v=<?= time() ?>"></script>

<script src="<?= site_url() ?>/public/js/contractingfactory.min.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/homepage.min.js?v=<?= time() ?>"></script>
<script src="<?= site_url() ?>/public/js/countdown.min.js?v=<?= time() ?>"></script>
<script>
  var blockScrollUpDown = false;
  var classname = document.getElementsByClassName("owl-carousel");

  // Thêm sự kiện khi touch cho tất cả các Owl Slider
  for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('touchmove', function(evt) {
      if (blockScrollUpDown) {
        evt.preventDefault();
      }
    }, {
      passive: false
    });
  }

  //Lazyload Image
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
</script>



<script>
  $('#homepage-search-icon').remove();


  //Script sample for new search
  $(document).ready(function() {
    var lazyImages = $('.lazy[data-src]');
    var imagesLoaded = 0; // Biến để theo dõi số lượng hình ảnh đã tải
    var totalImages = lazyImages.length; // Tổng số lượng hình ảnh cần tải

    lazyImages.each(function() {
      var imgDiv = $(this);
      var img = new Image();
      img.src = imgDiv.attr('data-src');

      img.onload = function() {
        imgDiv.css('background-image', 'url("' + img.src + '")');
        imgDiv.removeClass('lazy');
        imagesLoaded++; // Tăng số lượng hình ảnh đã tải
        checkAllImagesLoaded(); // Kiểm tra xem tất cả hình ảnh đã tải xong chưa
      };

      img.onerror = function() {
        console.error('Error loading image:', img.src);
        imagesLoaded++; // Ngay cả khi có lỗi, vẫn cần đếm hình ảnh này
        checkAllImagesLoaded(); // Kiểm tra lại
      };
    });

    function checkAllImagesLoaded() {
      if (imagesLoaded === totalImages) {
        // Tất cả hình ảnh đã tải xong
        console.log('All images have been loaded');
        // Thực hiện hành động tiếp theo, ví dụ ẩn placeholder, hiển thị carousel, v.v.
        var owlmood = $('.owl-carousel-mood');
        owlmood.parent().find('.item-placeholder-loading').hide();
        owlmood.find('.item').show();
      }
    }
    setTimeout(function() {
      var owlmood = $('.owl-carousel-mood');
      var height = owlmood.find('.item').innerHeight();
      owlmood.parent().find('.item-placeholder-loading').innerHeight(height);
      owlmood.on('initialize.owl.carousel', function(event) {});
      owlmood.on('drag.owl.carousel', function(e) {
        blockScrollUpDown = true;
        if ((e.item.count - 2) <= e.item.index) {
          $(e.target.firstElementChild).find('.owl-stage').addClass('haft-right');
        } else {
          $(e.target.firstElementChild).find('.owl-stage').removeClass('haft-right');
        }

      });
      owlmood.on('dragged.owl.carousel', function(e) {
        blockScrollUpDown = false;
        owlmood.trigger('stop.owl.autoplay');

      });
      owlmood.on('initialized.owl.carousel', function(event) {



        //owlmood.trigger('next.owl.carousel');
        //owlmood.trigger('prev.owl.carousel');
      }).owlCarousel({
        margin: 15,
        smartSpeed: 450,
        dots: false,
        items: 4,
        autoHeight: false,

        autoplay: false,
        autoplayHoverPause: true,
        loop: false,
        lazyLoad: true,
        responsiveClass: true,
        nav: false,
        responsive: {
          0: {
            stagePadding: 50,
            items: 1,
            autoplay: false,
            autoplayHoverPause: true
          },
          600: {
            stagePadding: 100,
            items: 2,
            autoplay: false,
            autoplayHoverPause: true
          },
          1000: {
            stagePadding: 50,
            items: 3,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true,
          },
          1200: {
            stagePadding: 0,
            items: 4,
            //nav: true,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true
          }
        },
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ]
      });
    }, 500)
    setTimeout(function() {
      var owl = $('.owl-carousel-promotion');
      var height = owl.find('.item').innerHeight();
      owl.parent().find('.item-placeholder-loading').innerHeight(height);
      owl.on('initialize.owl.carousel', function(event) {});
      owl.on('drag.owl.carousel', function(e) {
        blockScrollUpDown = true;
        if ((e.item.count - 2) <= e.item.index) {
          $(e.target.firstElementChild).find('.owl-stage').addClass('haft-right');
        } else {
          $(e.target.firstElementChild).find('.owl-stage').removeClass('haft-right');
        }

      });
      owl.on('dragged.owl.carousel', function(e) {
        blockScrollUpDown = false;
        owl.trigger('stop.owl.autoplay');
      });
      owl.on('initialized.owl.carousel', function(event) {
        //setTimeout(function () {
        owl.parent().find('.item-placeholder-loading').hide();
        owl.find('.item').show();
      }).owlCarousel({
        margin: 15,
        stagePadding: 0,
        smartSpeed: 450,
        dots: true,
        items: 1,
        lazyLoad: true,
        autoHeight: false,
        autoHeightClass: 'owl-height',
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        loop: false,
        responsiveClass: true,
        responsive: {
          0: {
            stagePadding: 50,
            dots: false,
            autoplayHoverPause: true,
            autoplay: false,
          },
          600: {
            stagePadding: 100,
            autoplay: false,
            autoplayHoverPause: true,
            dots: false,
          },
          1000: {
            stagePadding: 50,
            dots: false,
            autoplay: false,
            autoplayHoverPause: true
          },
          1200: {
            stagePadding: 0
          }
        }
      });
    }, 500)
    $("#hero-banner-home").click(function(e) {
      var specifiedElement = document.getElementById('hero-form');
      var isClickInside = specifiedElement.contains(e.target);
      if (window.innerWidth > 768 && !isClickInside) {
        var url = this.getAttribute("data-href");
        window.open(url, "_blank");
      }
    });

    function showSearchRoomDetails(show) {

      if (show) {
        $(".room-popover").data("display", true);
        $(".room-popover").css("display", "block");
        if (window.innerWidth < 768) {

          $('body').css({
            overflow: 'hidden',
            //top: '0px',
            height: '100%',
            width: '100%',
            position: 'fixed'
          });
          if ($('#overlay').length === 0) {
            $('body').append('<div id="overlay" style="display: block;"></div>');
          }



          // Cấu hình CSS cho overlay
          $('#overlay').css({
            'position': 'fixed', // Sử dụng fixed để overlay nằm trên toàn bộ nội dung, kể cả khi scroll
            'top': '0',
            'left': '0',
            'width': '100%',
            'height': '100%',
            'background': 'rgba(0, 0, 0, 0.5)',
            'zIndex': '999', // Đảm bảo overlay nằm dưới modal nhưng trên nội dung khác
          });
          $('#overlay').fadeIn();
          $('.drag-handle').css('display', 'block');
          $(".room-popover").addClass('slideIn');
          $(".room-popover").addClass("div-popup-passenger");

        }
      } else {
        if (window.innerWidth < 768) {
          $(".room-popover").addClass("slideOut");
          setTimeout(function() {
            $(".room-popover").removeClass("slideIn");
          }, 20);
          setTimeout(function() {
            $(".room-popover").removeClass("div-popup-passenger");
            $(".room-popover").data("display", false);
            $(".room-popover").css("display", "none");
          }, 550);
          setTimeout(function() {
            $(".room-popover").removeClass("slideOut");
          }, 600);
          setTimeout(function() {
            $('body').css({
              overflow: '',
              //top: '',
              width: '',
              height: '',
              position: ''
            });
            $('#overlay').css({
              display: 'none',
            });
            if ($("body").attr('topcurrent')) {
              $('html, body').animate({
                scrollTop: $("body").attr('topcurrent')
              }, 0);
              $("body").removeAttr('topcurrent');
            }
            $('#overlay').fadeOut();
            $('.drag-handle').css('display', 'none');

          }, 200)
        } else {
          $(".room-popover").data("display", false);
          $(".room-popover").css("display", "none");
        }
      }
    }
    if (window.innerWidth < 768) {
      dragElement(document.querySelector(".room-popover"));
    }

    function dragElement(elmnt) {
      var startY = 0;
      var dragging = false;
      var ispopup = false;
      elmnt.addEventListener('touchstart', function(e) {
        startY = e.touches[0].clientY;
        var target = e.target; // Phần tử mà sự kiện được kích hoạt
        var divMobileElement = elmnt.querySelector('.child-age-selection'); // Tìm phần tử .div-mobile bên trong .room-popover

        // Kiểm tra nếu sự kiện xảy ra bên trong .div-mobile hoặc các phần tử con của nó
        if (divMobileElement && divMobileElement.contains(target)) {
          ispopup = false;
        } else {
          ispopup = true;
        }
      });
      elmnt.addEventListener('touchmove', function(e) {
        var clientY = e.touches[0].clientY;
        if (clientY - startY > 30 && ispopup) {
          dragging = true;
        }
      }, {
        passive: false
      });

      elmnt.addEventListener('touchend', function(e) {
        if (dragging) {
          showSearchRoomDetails(false);
          dragging = false; // Reset trạng thái dragging sau mỗi lần kéo
        }



      });
    }
    $(".rooms .v_field,  .close-popup-filter").click(function() {
      var display = $(".room-popover").data("display");
      showSearchRoomDetails(!display);
    });

    function checkclickoutsiderooms() {
      var specifiedElement = document.getElementById('search-form-rooms');
      if (window.innerWidth < 768) {
        $(document).on('click', '#overlay', function(event) {
          var isClickInside = specifiedElement.contains(event.target);
          console.log(isClickInside);
          if (!isClickInside && $('.room-popover-header').data('display') === true) {
            showSearchRoomDetails(false);
          }
        })
      } else {

        $(document).on('click', function(event) {
          var isClickInside = specifiedElement.contains(event.target);
          console.log(isClickInside);

          if ((!isClickInside && $('.room-popover-header').data('display') === true)) {
            showSearchRoomDetails(false);
          }
        });

      }
    }
    //if (window.innerWidth > 768) {
    checkclickoutsiderooms();
    //}
  });

  var hots = [];
  hots.push({
    "Name": "Đà Lạt",
    "Link": "/khach-san-da-lat",
    "Description": "741",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/18/23/undefined-60x60.jpg"
  })
  hots.push({
    "Name": "Phan Thiết",
    "Link": "/khach-san-phan-thiet",
    "Description": "293",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-2-60x60.jpg"
  })
  hots.push({
    "Name": "Nha Trang",
    "Link": "/khach-san-nha-trang",
    "Description": "728",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-1-60x60.jpg"
  })
  hots.push({
    "Name": "Phú Quốc",
    "Link": "/khach-san-phu-quoc",
    "Description": "626",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-3-60x60.jpg"
  })
  hots.push({
    "Name": "Đà Nẵng",
    "Link": "/khach-san-da-nang",
    "Description": "958",
    "Image": "https://cdn1.ivivu.com/iVivu/2017/05/18/14/da-nang-home-60x60.jpg"
  })
  hots.push({
    "Name": "Vũng Tàu",
    "Link": "/khach-san-vung-tau",
    "Description": "612",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-6-60x60.jpg"
  })
  hots.push({
    "Name": "Quy Nhơn",
    "Link": "/khach-san-quy-nhon",
    "Description": "77",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-4-60x60.jpg"
  })
  hots.push({
    "Name": "Vịnh Hạ Long",
    "Link": "/khach-san-vinh-ha-long",
    "Description": "488",
    "Image": "https://cdn1.ivivu.com/iVivu/2019/06/14/14/vinh-ha-long-60x60.jpg"
  })
  hots.push({
    "Name": "Hội An",
    "Link": "/khach-san-hoi-an",
    "Description": "643",
    "Image": "https://cdn1.ivivu.com/iVivu/2018/10/15/19/undefined-60x60.jpg"
  })
</script>
<script>
  String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
  };

  function cleanWords(stringToClean) {
    stringToClean = publicHelper.remove_unicode($.trim(stringToClean.toLowerCase()));
    stringToClean = stringToClean.replaceAll('-', ' ');
    stringToClean = stringToClean.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
    return stringToClean;
  }

  function matcher(query, data, syncResults) {
    if (!publicHelper.isBlank(query)) {
      var matches = [];
      query = cleanWords(query);
      substrRegex = new RegExp(query, 'i');

      $.each(data, function(i, object) {
        var name = cleanWords(object.Name);
        if (substrRegex.test(name)) {
          matches.push(object);
        }

        /*if (fullTextCompare(query, object.Name)) {
         matches.push(object);
         }*/
      });
      syncResults(matches);
    }
  }
</script>



<!-- END JAVASCRIPT -->
<!-- Facebook Tracking Event Section -->

<!--Facebook SDK-->
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=338156189903178";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  function CloseAppBanner() {
    //Static.createCookie('ivivu.openbanner', 'hidden', 365);
    $(".app-banner").hide();
    ga('send', {
      'hitType': 'event',
      'eventCategory': 'Thống kê download app',
      'eventAction': 'Click',
      'eventLabel': 'Tắt link download'
    });
  }

  function LinkToAppBanner(source) {
    ga('send', {
      'hitType': 'event',
      'eventCategory': 'Thống kê download app',
      'eventAction': 'Click',
      'eventValue': 100000,
      'eventLabel': 'Mở link download ' + source
    });
    Static.createCookie('ivivu.openbanner', 'hidden', 365);
    $(".app-banner").hide();
    window.open('https://ivivu.com/tai-ve-ung-dung', '_blank');
  }
  $(function() {
    window.onload = function() {
      var CheckCookie = $.cookie("ivivu.login");
      if (CheckCookie == "ok") {
        $(".login").show();
        $(".logout").hide();
      } else {
        $(".login").hide();
        $(".logout").show();
      }

      var CheckCookieBanner = $.cookie("ivivu.openbanner");
      if (CheckCookieBanner != "hidden") {
        $(".app-banner").show();
      }
    };

    function addQueryString(uri, parameters) {
      var delimiter = (uri.indexOf('?') == -1) ? '?' : '&';
      for (var parameterName in parameters) {
        var parameterValue = parameters[parameterName];
        uri += delimiter + encodeURIComponent(parameterName) + '=' + encodeURIComponent(parameterValue);
        delimiter = '&';
      }
      return uri;
    }

    $('#loginLink').click(function() {

      var authorizeUri = 'https://login.ivivu.com/OAuth/Authorize';
      var nonce = 'my-nonce';
      var uri = addQueryString(authorizeUri, {
        'client_id': '12345678',
        'redirect_uri': 'https://www.ivivu.com/home/ssologin',
        'state': nonce,
        'scope': 'bio notes',
        'response_type': 'token',
      });

      window.loginDone = function() {
        loginWindow.close();
        location.reload();
      };





      var loginWindow = window.open(uri, 'Authorize', 'width=780,height=480');
      return false;
    });

  });
  $(".home-search").click(function(e) {
    if (e.target == $(".search-box")) return;
    window.location = $(this).find(".banner-link").attr("href");
    //window.open($(this).find(".banner-link").attr("href"));
    //return false;
    var evt = e || window.event;
    e.stopPropagation();
  });
  $(".searchbox").mouseenter(function() {
    var title = $(this).attr("title");
    $(this).attr("tmp_title", title);
    $(this).attr("title", "");
  });
  $(".searchbox").mouseleave(function() {
    var title = $(this).attr("tmp_title");
    $(this).attr("title", title);
  })
  $(".searchbox").click(function(e) {
    //return false;
    var evt = e || window.event;
    e.stopPropagation();
    //window.event.stopPropagation();
  });
</script>

<!--header hotline-->
<script>
  //dropdown hotline
  $(document).ready(function() {
    $('.dropdown-toggle').dropdown();

  });
</script>

<script>
  $(document).ready(function() {


    var list_menu_direc = $(".navbar-nav li");

    // Khôi phục trạng thái active từ localStorage
    list_menu_direc.each(function(index, ele) {
      var isActive = localStorage.getItem("menu_" + index) === "true";
      if (isActive) {
        $(ele).addClass("active");
      }
    });

    // Thêm sự kiện click để lưu trạng thái vào localStorage
    list_menu_direc.on("click", function() {
      // Xóa class 'active' khỏi tất cả các menu items
      list_menu_direc.removeClass("active");

      // Thêm class 'active' vào menu item được click
      $(this).addClass("active");

      // Cập nhật trạng thái active trong localStorage
      list_menu_direc.each(function(index, ele) {
        var isActive = $(ele).hasClass("active");
        localStorage.setItem("menu_" + index, isActive);
      });

    });

    var myLogo = $('.navbar-header img');

    myLogo.on('click', function() {
      // Xóa class 'active' khỏi tất cả các menu items
      list_menu_direc.removeClass("active");

      // Xóa trạng thái active trong localStorage
      list_menu_direc.each(function(index) {
        localStorage.removeItem("menu_" + index);
      });
    });


    $('.navbar-toggler').on('click', function() {

      console.log($('.modal-navbar'));

      $('.nav__overlay').css('display', 'block');


    });

    $('.btn-navbar-close').on('click', function() {

      $('.modal-navbar').removeClass('show');

      $('.nav__overlay').css('display', 'none');

    });

    $('.nav__overlay').on('click', function() {

      $('.modal-navbar').removeClass('show');

      $('.nav__overlay').css('display', 'none');
    })




    $(window).on('scroll', function() {

      var tourSideBarUL = document.getElementById('tourSideBarUL'); // Phần tử điều hướng bên
      var tourHistoryDiv = document.getElementById('tourHistoryDiv'); // Phần tử điều hướng bên
      var homePageFooterDiv = document.querySelector('#homePageFooterDiv'); // Phần tử điều hướng bên
      var desktop_booking_form = document.querySelector('#desktop-booking-form'); // Phần tử lịch trình đặt tour
      var tour_services = document.querySelector('#tour-services'); // Phần tử dịch vụ tour
      var tourRelatedDiv = document.querySelector('#tourRelatedDiv-36'); // Các phần tử liên quan đến tour
      var screenWidth = window.innerWidth;

      console.log('kích thước màn hình', screenWidth);


      var scrollTop = document.documentElement.scrollTop;

      // console.log(tourSideBarUL);
      console.log(homePageFooterDiv);

      if (screenWidth >= 992) {
        if (scrollTop >= 256) {
          tourSideBarUL.style.display = 'block';
          tourSideBarUL.style.position = 'fixed';
          tourSideBarUL.style.top = '0px';
          tourSideBarUL.style.zIndex = '1000';

          const fixedRect_swiper = tourSideBarUL.getBoundingClientRect();
          const tourRelatedDivCheck = tourRelatedDiv.getBoundingClientRect();
          const tourHistoryDivCheck = tourHistoryDiv.getBoundingClientRect();
          const homePageFooterDivCheck = homePageFooterDiv.getBoundingClientRect();

          // console.log(tourRelatedDivCheck);
          // console.log(tourHistoryDivCheck);

          if (
            fixedRect_swiper.top < tourRelatedDivCheck.bottom &&
            fixedRect_swiper.bottom > tourRelatedDivCheck.top ||
            fixedRect_swiper.top < tourHistoryDivCheck.bottom &&
            fixedRect_swiper.bottom > tourHistoryDivCheck.top ||
            fixedRect_swiper.top < homePageFooterDivCheck.bottom &&
            fixedRect_swiper.bottom > homePageFooterDivCheck.top
          ) {
            // $('#desktop-booking-form').css('display', 'none');
            // $('#tour-services').css('display', 'none');
            $('#tourSideBarUL').css('display', 'none');
          }

        } else {
          tourSideBarUL.style.position = 'absolute';


        }
      }

      console.log(scrollTop);


      // end điện thoại


      var scrollBtn = document.getElementById('scroll_btn');
      var contact = document.querySelector('#contact'); //desktop-booking-form div Lịch Trình và Giá Tour
      var contact__cta = document.getElementById('contact__cta'); //tourSideBarUL
      var swiper_content = document.querySelector('.swiperPostFeature'); // id tour-services chị vụ 
      var contactSection = document.querySelectorAll('.div-cate-footer'); //tourRelatedDiv-36
      var footer = document.querySelector('.footer');

      if (document.documentElement.scrollTop >= 1100) {
        scrollBtn.style.display = 'block';

        scrollBtn.addEventListener('click', () => {
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        })
      } else {
        scrollBtn.style.display = 'none';
      }

      // Kiểm tra kích thước màn hình
      if (window.matchMedia("(min-width: 992px)").matches) {
        if (document.documentElement.scrollTop >= 560) {

          $('#contact').css('position', 'fixed');
          $('#contact').css('top', '20px');
          $('#contact').css('width', '365px');

          //

          $('.mySwiper').css('display', 'block');
          $('.swiperPostFeature').css('position', 'fixed');
          $('.swiperPostFeature').css('top', '347px');
          $('.swiperPostFeature').css('width', '365px');

          // $('#contact__cta').css('position', 'fixed');
          // $('#contact__cta').css('top', '50px');
          // $('#contact__cta').css('width', '388px');

          contactSection.forEach((item, index) => {

            const fixedRect = contact.getBoundingClientRect();
            const fixedRect_swiper = swiper_content.getBoundingClientRect();
            const itemSection = item.getBoundingClientRect();

            if (
              fixedRect_swiper.top < itemSection.bottom &&
              fixedRect_swiper.bottom > itemSection.top &&
              fixedRect_swiper.left < itemSection.right &&
              fixedRect_swiper.right > itemSection.left
            ) {
              $('#contact').css('display', 'none');
              $('.swiperPostFeature').css('display', 'none');
              // $('#contact__cta').css('display', 'none');
            }

            if (document.documentElement.scrollTop < itemSection.top) {
              $('#contact').css('display', 'block');
              $('.swiperPostFeature').css('display', 'block');
              $('.mySwiper').css('display', 'block');
              // $('#contact__cta').css('display', 'block');
            }
          })

          if (contact && footer) {
            const contactFixed = contact.getBoundingClientRect();
            const fixedRect_swiper = swiper_content.getBoundingClientRect();
            const footerTarget = footer.getBoundingClientRect();
            if (
              fixedRect_swiper.top < footerTarget.bottom &&
              fixedRect_swiper.bottom > footerTarget.top &&
              fixedRect_swiper.left < footerTarget.right &&
              fixedRect_swiper.right > footerTarget.left
            ) {
              $('#contact').css('display', 'none');
              $('.swiperPostFeature').css('display', 'none');
              // $('#contact__cta').css('display', 'none');
            }
          }




          // $('#contact').css('height', '388.66px');
        } else {
          $('#contact').css('position', 'unset');
          $('#contact').css('width', 'unset');

          $('.swiperPostFeature').css('position', 'unset');
          $('.swiperPostFeature').css('width', 'unset');

          // $('#contact__cta').css('position', 'unset');
          // $('#contact__cta').css('width', 'unset');
        }

      } else {
        $('#contact').css('position', 'unset');
        $('#contact').css('width', 'unset');

        $('.swiperPostFeature').css('position', 'unset');
        $('.swiperPostFeature').css('width', 'unset');

        // $('#contact__cta').css('position', 'unset');
        // $('#contact__cta').css('width', 'unset');
      }

      if (window.matchMedia("(min-width: 1024px)").matches) {

        if (document.documentElement.scrollTop >= 560) {
          $('#contact').css('width', '300px');
          $('.swiperPostFeature').css('width', '300px');
          // $('#contact__cta').css('width', '300px');
        }

      }


      if (window.matchMedia("(min-width: 1200px)").matches) {

        if (document.documentElement.scrollTop >= 560) {
          $('#contact').css('width', '365px');
          $('.swiperPostFeature').css('width', '365px');
          // $('#contact__cta').css('width', '388px');
        }

      }

    })


    function load(img) {
      const url = img.getAttribute('lazy-src');
      const alt = img.getAttribute('lazy-alt');
      img.setAttribute('src', url);
      img.setAttribute('alt', alt);
      img.removeAttribute('lazy-src');
      img.removeAttribute('lazy-alt');
      img.onload = function() {
        img.classList.remove('lazy-wave');
      }
    }

    function lazy_loading() {
      if ('IntersectionObserver' in window) {
        const lazyImgs = document.querySelectorAll('img[lazy-src]');
        let observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              load(entry.target);
              observer.unobserve(entry.target);
            }
          });
        }, {
          threshold: 0.05
        });

        lazyImgs.forEach(img => {
          observer.observe(img);
        });
      } else {
        const lazyImgs = document.querySelectorAll('img[lazy-src]');
        lazyImgs.forEach(img => {
          load(img);
        });
      }
    }

    lazy_loading();

    $('.navbar-toggler').on('click', function() {

      $('.modal-navbar').toggleClass('show');

      $('.modal-navbar-backdrop').toggleClass('show');

    });

    $('.btn-navbar-close, .modal-navbar-backdrop').on('click', function() {

      $('.modal-navbar').removeClass('show');

      $('.modal-navbar-backdrop').removeClass('show');

    });



    let currentPage = 1;

    let debounceTimeout;

    var input = $('#form_search');
    var myDomain = $('#myDomain').val();
    var show = 0;
    $(input).on('input', () => {
      show = 0;
      currentPage = 1;
      var keyword = $(input).val();
      clearTimeout(debounceTimeout);

      debounceTimeout = setTimeout(() => {
        if (keyword) {
          $('.groupCategory-tlt').text(`Kết quả cho khóa: ${keyword}`)
          searchPosts(keyword, currentPage);
        }
      }, 500);
    });

    function searchPosts(keyword, page) {

      $.ajax({
        url: `${myDomain}/wp-json/custom/v1/search-posts`,
        method: 'POST',
        data: {
          keyword: keyword,
          paged: page
        },
        success: function(res) {
          $('.loop-footer .no-ajx').remove();
          $('.sesions-home4').remove();
          $('.sesions-home5').remove();
          $('.bg-projec').remove();

          if (show == 0) {
            $('.list-post-home ul').empty();
          }
          show++;
          displayPosts(res.posts);

          handleLoadMoreButton(res.max_num_pages, res.posts);
        },
        error: function(e) {
          console.log(e);
        }
      });
    }

    function displayPosts(posts) {
      lazy_loading();
      const currentTimestamp = new Date().getTime();
      posts.forEach(post => {
        const postTimestamp = new Date(post.post_date).getTime();
        const daysDiff = Math.floor((currentTimestamp - postTimestamp) / (1000 * 60 * 60 * 24));
        const newLabel = daysDiff < 2 ? '<div class="post-home-lable"><span>Mới</span></div>' : '';
        var html = `
            <li>
            <div class="post-home">
            <div class="post-home-thumb">
            <a href="${post.post_permalink}" class="wrap-next-image">
            <div class="overlay-post"></div>
            <img src="${post.post_thumb != '' ? post.post_thumb : 'https://gacmai.vn/wp-content/uploads/2024/06/default_image.png'}" alt="${post.post_title}">
            </a>
            ${newLabel}
            </div>
            <h2 class="post-home-title">
            <a href="${post.post_permalink}">${post.post_title}</a>
            </h2>
            <div class="post-home-date">
            <span>${post.post_date}</span>
            </div>
            </div>
            </li>`;

        $('.list-post-home ul').append(html);
      });
    }

    function handleLoadMoreButton(maxPages, data) {
      $('#pagination').empty();

      var loadMoreBtn = $('<div class="load-more"><span>Xem thêm</span></div>');

      if (data.length >= 9) {
        $('.loop-footer').html(loadMoreBtn);

        loadMoreBtn.on('click', function() {
          currentPage++;
          searchPosts($('#form_search').val(), currentPage);
        });
      } else {
        $('.loop-footer').empty();
      }
    }

  });

  // start form đặt tour and tư vấn
  document.getElementById('bookTourBtn').addEventListener('click', function() {
    var modalTitle = document.querySelector('#getBundlePriceModal .modal__title .title');
    var modalSubtitle = document.querySelector('#getBundlePriceModal .modal__title small');
    modalTitle.textContent = 'Yêu cầu đặt';
    modalSubtitle.textContent = 'Quý khách vui lòng nhập thông tin liên hệ bên dưới';


    $('#getBundlePriceModal').modal('show');
  });

  document.getElementById('adviseButton').addEventListener('click', function() {
    var modalTitle = document.querySelector('#getBundlePriceModal .modal__title .title');
    var modalSubtitle = document.querySelector('#getBundlePriceModal .modal__title small');
    modalTitle.textContent = 'Yêu cầu tư vấn';
    modalSubtitle.textContent = 'Quý khách vui lòng nhập thông tin cần tư vấn bên dưới';

    // Hiển thị modal
    $('#getBundlePriceModal').modal('show');
  });

  document.getElementById('closeFormBtn').addEventListener('click', function() {
    $('#getBundlePriceModal').modal('hide');
  });

  // end form đặt tour and tư vấn
</script>