window.Dropzone = require('dropzone');
require('./bootstrap');
$('.zone').bind('click touchstart mouseenter mouseleave', function(e) {
    e.stopPropagation();
    e.preventDefault();
    var floor = $(this).attr('data-floor'),
        floor_id = $(this).attr('data-floor-id'),
        elements = $(this).parents().find('svg.hover[data-floor=' + floor + ']'),
        flats_text = typeof building_flats !== 'undefined' ? building_flats[floor_id] : null;

    console.log(floor);
    console.log(floor_id);
    console.log(elements);
    console.log(flats_text);
    console.log(e.type);

    switch (e.type) {
        case 'click':
        case 'touchstart':
            window.location = '/public/visual/' + $(this).attr('data-floor-id');
            break;
        case 'mouseenter':
            elements.addClass('active');
            // self.hint.addClass('active');
            // self.hint_floor_text.empty().html(floor);
            // self.hint_flats_text.empty().html(flats_text);
            // $(window).bind('mousemove', self.mousemovehint);
            // self.update_hint_position(e);
            break;
        case 'mouseleave':
            elements.removeClass('active');
            // self.hint.removeClass('active');
            // $(window).unbind('mousemove', self.mousemovehint);
            break;
    }
});

$('.js-main-menu-trigger').on('click', function(e) {

    $('#main-menu').toggleClass('open');
    $('#screen').toggleClass('contentFixed');

});



var swiper = new Swiper('.product-slider', {
    spaceBetween: 30,
    effect: 'fade',
    // initialSlide: 2,
    loop: false,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev'
    },
    // mousewheel: {
    //     // invert: false
    // },
    on: {
        init: function() {
            var index = this.activeIndex;

            var target = $('.product-slider__item').eq(index).data('target');

            console.log(target);

            $('.product-img__item').removeClass('active');
            $('.product-img__item#' + target).addClass('active');
        }
    }

});

swiper.on('slideChange', function() {
    var index = this.activeIndex;

    var target = $('.product-slider__item').eq(index).data('target');

    console.log(target);

    $('.product-img__item').removeClass('active');
    $('.product-img__item#' + target).addClass('active');

    if (swiper.isEnd) {
        $('.prev').removeClass('disabled');
        $('.next').addClass('disabled');
    } else {
        $('.next').removeClass('disabled');
    }

    if (swiper.isBeginning) {
        $('.prev').addClass('disabled');
    } else {
        $('.prev').removeClass('disabled');
    }
});

$(".js-fav").on("click", function() {
    $(this).find('.heart').toggleClass("is-active");
});