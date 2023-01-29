(function($) {
    "use strict";

    /*====================================================
                    Initialize Swiper    
    ====================================================*/

    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000
        },
        loop: true,
        speed: 600,
    });

    /*====================================================
                    counter up
    ====================================================*/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    /*====================================================
                    owl carousel
    ====================================================*/
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: false,
        autoplaySpeed: true,
        animateOut: 'fadeOut',
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })



    /*====================================================
                    stickey menu
    ====================================================*/
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop(),
            mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();

        // console.log(mainHeader.innerHeight());
        if (scroll > 280) {
            $("#sticky-header").addClass("sticky-menu");
        } else {
            $("#sticky-header").removeClass("sticky-menu");
        }
    });


    
    /*====================================================
                    scrollUp
    ====================================================*/

    // declare variable
    var scrollTop = $(".scrollup");

    //Click event to scroll to top
    $(scrollTop).on('click', function() {
        $('html, body').animate({
        scrollTop: 0
        }, 900);
        return true;

    }); // click() scroll top EMD

    /*====================================================
                    popup video
    ====================================================*/
    $('.video-popup').magnificPopup({
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });

    /*==================================
            LOAD MORE JQUERY
    ================================== */
    var list1 = $(".moreload");
    var numToShow1 = 3;
    var button1 = $(".loadmore");
    var numInList1 = list1.length;

    list1.hide();
    if (numInList1 > numToShow1) {
        button1.show();
    }
    list1.slice(0, numToShow1).show();
    button1.on('click', function() {
        var showing1 = list1.filter(':visible').length;
        list1.slice(showing1 - 1, showing1 + numToShow1).fadeIn();
        var nowShowing1 = list1.filter(':visible').length;
        if (nowShowing1 >= numInList1) {
            button1.hide();
        }
    });

})(jQuery);