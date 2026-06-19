jQuery(function ($) {
    $('.header__hamburger').on('click', function () {
        $('.header__nav-list').toggleClass('open')
        $(this).toggleClass('active').toggleClass('open')
    })

    const $list = $('.testimonial__list');

    $('.next').on('click', function () {
        if (!$list.is(':animated')) {

            const $item = $('.testimonial__item');
            const gap = parseInt($list.css('gap')) || 0;
            const slideWidth = $item[0].getBoundingClientRect().width + gap;

            $list.animate({
                marginLeft: -slideWidth
            }, 500, function () {
                $list.append($('.testimonial__item:first-child'));
                $list.css('marginLeft', 0);
            });
        }
    });
    $('.prev').on('click', function () {
        if (!$list.is(':animated')) {

            const $item = $('.testimonial__item');
            const gap = parseInt($list.css('gap')) || 0;
            const slideWidth = $item[0].getBoundingClientRect().width + gap;

            $list.prepend($('.testimonial__item:last-child')); // 末尾を先頭に移動
            $list.css('margin-left', -slideWidth); // 瞬時に1つ分左にずらす
            $list.animate({
                marginLeft: 0
            }, 500); // 0に向かってアニメーション（右へ動く）
        }
    });
    // Contact Form 7 の送信が成功したときの処理
    document.addEventListener('wpcf7mailsent', function (event) {
        location = window.location.origin + '/music-school/thanks/';
    }, false);
})
