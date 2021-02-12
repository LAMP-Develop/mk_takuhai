// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "slick-carousel";
import InfiniteScroll from 'infinite-scroll';

$(function(){
  // スライドショー
  $("#mv").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    centerPadding:'30%',
    speed: 2000,
    dots: true,
    arrows: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding:'20px',
      },
    }, ],
  });
});
