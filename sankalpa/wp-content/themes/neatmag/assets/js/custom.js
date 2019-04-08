jQuery(document).ready(function($) {

    if(neatmag_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var neatmagstickyNavTop = $('.neatmag-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var neatmagstickyNav = function(){
        var neatmagscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (neatmagscrollTop > neatmagstickyNavTop) { 
            $('.neatmag-menu-container').addClass('neatmag-fixed');
        } else {
            $('.neatmag-menu-container').removeClass('neatmag-fixed'); 
        }
    };

    neatmagstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        neatmagstickyNav();
    });
    }

    $(".neatmag-nav-primary .neatmag-nav-menu").addClass("responsive-menu").before('<div class="neatmag-responsive-menu-icon"></div>');

    $(".neatmag-responsive-menu-icon").click(function(){
        $(this).next(".neatmag-nav-primary .neatmag-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".neatmag-nav-primary .neatmag-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".responsive-menu > li").removeClass("menu-open");
        }
    });

    $(".responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

    $("div.neatmag-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

    $(".neatmag-social-search-icon").on('click', function (e) {
        e.preventDefault();
        $('.neatmag-social-search-box').slideToggle(400);
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="neatmag-scroll-top"></div>');
    var scrollButtonEl = $( '.neatmag-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.neatmag-scroll-top' ).fadeOut();
        } else {
            $( '.neatmag-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(neatmag_ajax_object.sticky_sidebar){
    $('#neatmag-main-wrapper, #neatmag-sidebar-wrapper').theiaStickySidebar({
        containerSelector: "#neatmag-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 785,
    });
    }

});