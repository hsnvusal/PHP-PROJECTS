"use strict";

$(document).ready(function () {
  $('.chat-btn').on('click', function () {
    $('.chat-box').addClass('chat-box-active');
  });
  $('.chat-box__close').on('click', function () {
    $('.chat-box').removeClass('chat-box-active');
  });
  $('.buy-now').each(function () {
    $(this).click(function () {
      $('.buynowModal').addClass('buynowModal-active');
    });
  });
  $('.buynowModal__close').click(function () {
    $('.buynowModal').removeClass('buynowModal-active');
  });
  $('*').click(function (e) {
    if (!$(e.target).is('.buynowModal__center') && !$(e.target).is('.buynowModal__center *')) if (!$(e.target).is('.buy-now') && !$(e.target).is('.buy-now *')) {
      $('.buynowModal').removeClass('buynowModal-active');
    }
  });
}); // gulpOptions sperated operator olmadan map olunmuyacaqdi sepereted opereator vasitesiyle biz rahatliqla json objecti map ede bileriy ve yaxudda {gulpOptions} bele
// butun jsler babel vasitesiyle convert edilir
// bu dosya ve bu dosyada yazilan butun jsler test ucundur js dosyasinda olan butun elementleri sile biler ozunuz istedyiniz yeni js fayllarini yarada bilersiniz