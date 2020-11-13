var intervaloBanner;

$(function () {


    var qtdGallery = $('.gallery').length;
    for (x = 1; x <= qtdGallery; x++) {
        $('#gallery-' + x + ' a').attr('rel', 'gallery' + x);
        $('#gallery-' + x + ' a > img').addClass('cont-galeria');
        $('#gallery-' + x + ' a[rel=gallery' + x + ']').fancybox({
            'padding': 10
        });
    }

    // Adiciona atributo de galeria para galeria de blocos
    $('.wp-block-gallery .blocks-gallery-item a').attr('rel', 'gallery').addClass('galeria');

    var images = $('section article.interna p > img:not(.cont-galeria)');

    images.each((i, v) => {
        var $this = v;
        $($this).replaceWith("<a href='" + $($this).attr('src') + "' class='galeria' rel='gallery" + (qtdGallery + 1) + "'>" + $this.outerHTML + "</a>");
    });

    $('section article.interna a.galeria').fancybox({
        'padding': 10
    });

    var capa_noticia = $('section article.interna a.capa');

    capa_noticia.attr('rel', 'gallery' + (qtdGallery + 2));

    capa_noticia.fancybox({
        'padding': 10
    });


    $('#form_filter select').on('change', function () {
        $('#form_filter').submit();
    });


    $('section aside li.menu-item-has-children').each(function (i, v) {
        var span = $('<span>+</span>');
        $(v).append(span);
        var height = $(this).find('a').height();
        $(span).css('top', ((height + 14) / 2) + 'px');

        $(span).on('click', function () {
            var li = $(this).parent();
            var ul = li.parent();

            if (ul.hasClass('sub-menu') === false) {
                var submenu = li.find('.sub-menu');
                if (li.hasClass('active')) {
                    $(this).html('+');
                    li.removeClass('active');
                    submenu.stop(true, true).slideUp();
                } else {
                    li.addClass('active');
                    $(this).html('-');
                    submenu.stop(true, true).slideDown();
                }
                return false;
            }
        });
    });


    $('section aside li.menu-item-has-children').each(function () {
        if ($(this).hasClass('current-menu-parent')) {
            $(this).addClass('active');
        }
    });

    $('#banners .nav_banners span').on('click', function () {
        if ($(this).hasClass('current') === false) {
            var index = $(this).index();
            $('#banners .banner').removeClass('active')
            $('#banners .banner:eq(' + index + ')').addClass('active')
            $('#banners .nav_banners span').removeClass('current');
            $(this).addClass('current');
            clearInterval(intervaloBanner);
            animaBanner();
        }
    });

    $('.mural .nav_mural .arrow').on('click', function () {
        var avisos = $('.mural .avisos .aviso:not(.vasio)').length;
        var avisosHeight = $('.mural .avisos .aviso').outerHeight();
        var avisosMTop = parseInt($('.mural .avisos .aviso_container').css('margin-top'));
        var avisosShow = 4;

        if ($(window).width() <= 500) {
            avisosShow = 1;
        } else if ($(window).width() <= 991) {
            avisosShow = 2;
        }
        var paginasAvisos = Math.floor(avisos / avisosShow);
        var paginaAtual = (avisosMTop / avisosHeight) * (-1);

        if ($(this).hasClass('arrow_left')) {
            if (avisosMTop < 0) {
                $('.mural .avisos .aviso_container').animate({
                    'margin-top': '+=' + avisosHeight + 'px'
                }, 0);
            }
        } else {
            if ((avisos > avisosShow) && (paginasAvisos > paginaAtual)) {
                $('.mural .avisos .aviso_container').animate({
                    'margin-top': '-=' + avisosHeight + 'px'
                }, 0);
            }
        }
    });

    $('.muda_contraste').on('click', function () {
        if ($('body').hasClass('contrast')) {
            $('body').removeClass('contrast');
        } else {
            $('body').addClass('contrast');
        }
    });
});


//POPUPS
var initPopup = function () {
    $('#bg_lightbox, #lightbox').fadeIn(800);

    var close = function () {
        $('#bg_lightbox, #lightbox').fadeOut();
        Cookies.set('popup', 1, {expires: 0.00347222, path: '/'});
    };

    $(document).keydown(function (e) {
        if (e.keyCode == 27) {
            close();
        }
    });

    $('#bg_lightbox, #lightbox .btn_fechar').click(function () {
        close();
    });

    $('#lightbox .container-popups .swiper-wrapper .swiper-slide .cont').click(function () {
        close();
    });

    //Cycle do banner
    $('#lightbox .container-popups .swiper-wrapper').cycle({
        fx: "fade",
        slides: ".swiper-slide",
        speed: 600,
        pager: ".swiper-container .paginacao",
        timeout: 5000,
        pauseOnHover: true
    });
}

$(document).ready(function () {
    animaBanner();
    acessoainformacao();
    initPopup();
});

function acessoainformacao() {
    var tamanhoTela = window.innerWidth;

    if (tamanhoTela > 1000) {
        $('#acessoainformacao').attr('href', 'javascript:void(0);');
    }
    if (tamanhoTela < 1000) {
        var caldazinha = $('#acessoainformacao').attr('href');
        $('#acessoainformacao .display').remove();

        $('#acessoainformacao').click(function () {
            window.location.href = caldazinha;
        });
    }
}

function animaBanner() {
    intervaloBanner = setInterval(function () {
        var index = $('#banners .nav_banners span.current').index();
        var length = $('#banners .banner').length - 1;
        var nextBanner = index + 1;
        if (index >= length) {
            nextBanner = 0;
        }
        $('#banners .banner').removeClass('active');
        $('#banners .banner:eq(' + nextBanner + ')').addClass('active');
        $('#banners .nav_banners span').removeClass('current');
        $('#banners .nav_banners span:eq(' + nextBanner + ')').addClass('current');
    }, 7000);
}

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
