$(function () {
    var headerHight = 60; //ヘッダの高さ
    $('a[href^=#]').click(function(){
        var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
           var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
        $("html, body").animate({scrollTop:position}, 550, "swing");
           return false;
      });
   });

let client_h = document.getElementById('top-image').clientHeight;

console.log(client_h);

jQuery(window).on('scroll', function () {
 
 if ($(this).scrollTop() > client_h-1) { 
jQuery('header').addClass('change-color'); }
 else {
 jQuery('header').removeClass('change-color'); } });

//  if (window.matchMedia('(max-width: 639px)').matches) {
 $('.header-right ul li a').on('click',function(){
    $('.header-right ul').removeClass('open');
    $('.menu').removeClass('menu--isOpen');
});
// }

 $('.menu__button').on('click',function(){
    $('.header-right ul').toggleClass('open');
    $('.menu').toggleClass('menu--isOpen');
});