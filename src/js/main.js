import '@scss/main';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel';

$(function(){
  $.datepicker.setDefaults($.datepicker.regional["ja"]);
  $(".dp").datepicker({ dateFormat: "yy-mm-dd" });
  $(".mp").datepicker({ dateFormat: "yy-mm" });
  });