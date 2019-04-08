jQuery(document).ready(function($) {

    $(".coolwp-nav-secondary .coolwp-secondary-nav-menu").addClass("coolwp-secondary-responsive-menu").before('<div class="coolwp-secondary-responsive-menu-icon"></div>');

    $(".coolwp-secondary-responsive-menu-icon").click(function(){
        $(this).next(".coolwp-nav-secondary .coolwp-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".coolwp-nav-secondary .coolwp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".coolwp-secondary-responsive-menu > li").removeClass("coolwp-secondary-menu-open");
        }
    });

    $(".coolwp-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-secondary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-secondary-menu-open");
        });
    });

    $("div.coolwp-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-secondary-menu-open");
        });
    });

    if(coolwp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var coolwpstickyNavTop = $('.coolwp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var coolwpstickyNav = function(){
        var coolwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(coolwp_ajax_object.sticky_menu_mobile){
            if (coolwpscrollTop > coolwpstickyNavTop) {
                $('.coolwp-primary-menu-container').addClass('coolwp-fixed');
            } else {
                $('.coolwp-primary-menu-container').removeClass('coolwp-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (coolwpscrollTop > coolwpstickyNavTop) {
                    $('.coolwp-primary-menu-container').addClass('coolwp-fixed');
                } else {
                    $('.coolwp-primary-menu-container').removeClass('coolwp-fixed'); 
                }
            }
        }
    };

    coolwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        coolwpstickyNav();
    });
    }

    $(".coolwp-nav-primary .coolwp-nav-primary-menu").addClass("coolwp-primary-responsive-menu").before('<div class="coolwp-primary-responsive-menu-icon"></div>');

    $(".coolwp-primary-responsive-menu-icon").click(function(){
        $(this).next(".coolwp-nav-primary .coolwp-nav-primary-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".coolwp-nav-primary .coolwp-nav-primary-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".coolwp-primary-responsive-menu > li").removeClass("coolwp-primary-menu-open");
        }
    });

    $(".coolwp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-primary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-primary-menu-open");
        });
    });

    $("div.coolwp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("coolwp-primary-menu-open");
        });
    });

    /*$(".coolwp-social-search-icon").on('click', function (e) {
        e.preventDefault();
        $('.coolwp-social-search-box').slideToggle(400);
    });*/

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="coolwp-scroll-top"></div>');
    var scrollButtonEl = $( '.coolwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.coolwp-scroll-top' ).fadeOut();
        } else {
            $( '.coolwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if ( $().owlCarousel ) {
        var coolwpcarouselwrapper = $('.coolwp-posts-carousel');
        var imgLoad = imagesLoaded(coolwpcarouselwrapper);
        imgLoad.on( 'always', function() {
            coolwpcarouselwrapper.each(function(){
                    var $this = $(this);
                    $this.find('.owl-carousel').owlCarousel({
                        autoplay: true,
                        loop: true,
                        margin: 0,
                        smartSpeed: 250,
                        dots: false,
                        nav: true,
                        autoplayTimeout: 4000,
                        autoHeight: true,
                        navText: [ '<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>' ],
                        responsive:{
                        0:{
                            items: 1
                        },
                        480:{
                            items: 2
                        },
                        991:{
                            items: 3
                        },
                        1024:{
                            items: 4
                        }
                    }
                });
            });
        });
    } // end if

    if(coolwp_ajax_object.sticky_sidebar){
    $('.coolwp-main-wrapper, .coolwp-sidebar-one-wrapper, .coolwp-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".coolwp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

});

function openSearch() {
    document.getElementById("coolwp-search-overlay-wrap").style.display = "block";
}

function closeSearch() {
    document.getElementById("coolwp-search-overlay-wrap").style.display = "none";
}