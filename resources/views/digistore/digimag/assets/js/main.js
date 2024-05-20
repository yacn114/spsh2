$(document).ready(function(){

       //    resposive-megamenu-mobile------------------
       $('.dropdown-toggle').on('click', function(e) {
        e.stopPropagation();
        e.preventDefault();

        var self = $(this);
        if (self.is('.disabled, :disabled')) {
          return false;
        }
        self.parent().toggleClass("open");
      });

      $(document).on('click', function(e) {
        if ($('.dropdown').hasClass('open')) {
          $('.dropdown').removeClass('open');
        }
      });

      $('.nav-btn.nav-slider').on('click', function() {
        $('.overlay').show();
        $('nav').toggleClass("open");
      });

      $('.overlay').on('click', function() {
        if ($('nav').hasClass('open')) {
          $('nav').removeClass('open');
        }
        $(this).hide();
      });


        $('li.active').addClass('open').children('ul').show();
        $("li.has-sub > a").on('click', function () {
            $(this).removeAttr('href');
            var e = $(this).parent('li');
            if (e.hasClass('open')) {
                e.removeClass('open');
                e.find('li').removeClass('opne');
                e.find('ul').slideUp(200);
            }
            else {
                e.addClass('open');
                e.children('ul').slideDown(200);
                e.siblings('li').children('ul').slideUp(200);
                e.siblings('li').removeClass('open');
                e.siblings('li').find('li').removeClass('open');
                e.siblings('li').find('ul').slideUp(200);
            }
        });
//    resposive-megamenu-mobile------------------

    //    slider-product-------------------
    $(".product-carousel").owlCarousel({
        rtl: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fa fa-angle-right"></i>', '<i class="fa fa-angle-left"></i>'],
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            576: {
                items: 1,
                slideBy: 1
            },
            768: {
                items: 3,
                slideBy: 2
            },
            992: {
                items: 4,
                slideBy: 2
            },
            1400: {
                items: 4,
                slideBy: 3
            }
        }
    });
    //    slider-product------------------- 

    // sidebar-sticky-------------------------
        if ($('.sticky-sidebar').length) {
            $('.sticky-sidebar').theiaStickySidebar();
        }

    // favorites product----------------------
    
    $(".popularity").on("click",function () {
        $(this).toggleClass("btn-option-favorites");
    });
    
    // favorites product-----------------------

    // nice-select-----------------------------------
    if($('.custom-select-ui').length){
        $('.custom-select-ui select').niceSelect();
    }

    //start slider sidebar---------------------
    $("#suggestion-slider").owlCarousel({
        rtl: true,
        items: 1,
        nav: true,
        navText: ['<i class="fa fa-angle-right"></i>', '<i class="fa fa-angle-left"></i>'],
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            576: {
                items: 1,
                slideBy: 1
            },
            768: {
                items: 1,
                slideBy: 2
            },
            992: {
                items: 1,
                slideBy: 2
            },
            1400: {
                items: 1,
                slideBy: 3
            }
        }
    });
    //start slider sidebar---------------------

    // slider-main-----------------------------
        $(".product-carousel-main").owlCarousel({
            rtl: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1
                },
                1400: {
                    items: 1,
                    slideBy: 1
                }
            }
        });
});