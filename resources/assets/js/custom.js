// var windowHeight = $(window).height();
// var containerHeight = $('.container-fluid starting').height();
// containerHeight = windowHeight;
// console.log(containerHeight);

$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    $('.container-fluid.starting').css('min-height', windowHeight);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});


