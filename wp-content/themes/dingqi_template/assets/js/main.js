/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    'use strict';

    // mini-cart
    var $mini_cart = jQuery('.mini-cart');
    $mini_cart.on('click', function (e) {
        jQuery(this).addClass('open');
    });

    jQuery(document).on('click', function (e) {
        if (jQuery(e.target).closest($mini_cart).length == 0) {
            $mini_cart.removeClass('open');
        }
    });

    jQuery('#open-left').on('click', function () {
        jQuery('body').addClass('body-noscroll');
        jQuery('.popup-menu').toggleClass('show');
        jQuery('.popup-menu-inner').addClass('open');
    });

    jQuery('.popup-menu').on('click', function () {
        jQuery('body').removeClass('body-noscroll');
        jQuery('.popup-menu-inner').removeClass('open');
        jQuery('.popup-menu').toggleClass('show');
    });

    jQuery('.search-btn').on('click', function () {
        jQuery('.popup-search').show();
        jQuery('.popup-search .search-field').focus();
        jQuery('body').addClass('body-noscroll');
    });

    jQuery('.popup-search-close').on('click', function () {
        jQuery('.popup-search').hide();
        jQuery('body').removeClass('body-noscroll');
    });

    // counterup
    jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    jQuery('.mobile-menu .menu-item-has-children').each(function () {
        jQuery(this).append('<span class="mobile-menu-expand fa fa-angle-down"></span>');
    });

    jQuery('.mobile-menu-expand').on('click', function () {
        jQuery(this).parent().find('ul:first').slideToggle();
        jQuery(this).tmToggleClass('fa-angle-down', 'fa-angle-up');
    });


    jQuery('.product-image').matchHeight({byRow: true});

    //ourteam type3
    jQuery('.ourteam-type3').each(function () {
        var oth = jQuery(this).find('img').height() + jQuery(this).find('.ourteam-info').height();
        jQuery(this).height(oth);
    });
    setInterval(function () {
        jQuery('.ourteam-type3').each(function () {
            var oth = jQuery(this).find('img').height() + jQuery(this).find('.ourteam-info').height();
            jQuery(this).height(oth);
        });
    }, 3000);
});

jQuery(window).resize(function ($) {
    //ourteam type3
    jQuery('.ourteam-type3').each(function () {
        var oth = jQuery(this).find('img').height() + jQuery(this).find('.ourteam-info').height();
        jQuery(this).height(oth);
    });
});

jQuery.fn.tmToggleClass = function (t1, t2) {
    if (this.hasClass(t1)) {
        this.removeClass(t1);
        this.addClass(t2);
    } else {
        this.removeClass(t2);
        this.addClass(t1);
    }
    return this;
};